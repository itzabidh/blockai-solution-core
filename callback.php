<?php
declare(strict_types=1);

/**
 * OAuth callback endpoint for Azure B2C / CIAM.
 */
require_once 'auth_config.php';
ensureSessionStarted();

function redirectToLoginWithError(string $userMessage, array $context = []): void
{
    authLog('OAuth callback failure', ['message' => $userMessage] + $context);
    $_SESSION[AUTH_SESSION_ERROR_KEY] = $userMessage;
    header('Location: /auth/');
    exit();
}

function decodeIdTokenPayload(string $idToken): ?array
{
    $parts = explode('.', $idToken);
    if (count($parts) !== 3) {
        return null;
    }

    $payload = $parts[1];
    $payload .= str_repeat('=', (4 - strlen($payload) % 4) % 4);
    $decoded = base64_decode(strtr($payload, '-_', '+/'), true);
    if ($decoded === false) {
        return null;
    }

    $json = json_decode($decoded, true);
    return is_array($json) ? $json : null;
}

function extractProviderCode(string $description): ?string
{
    if (preg_match('/(AADB2C\d{5})/i', $description, $matches) !== 1) {
        return null;
    }

    return strtoupper((string) $matches[1]);
}

function buildProviderErrorMessage(string $providerError, string $providerDescription): string
{
    $errorCode = extractProviderCode($providerDescription);
    if ($errorCode === 'AADB2C90091') {
        return 'Sign-in was cancelled before completion. Please try again.';
    }
    if ($errorCode === 'AADB2C90118') {
        return 'Password reset was requested. Please use password reset flow or contact support.';
    }
    if ($errorCode === 'AADB2C90006') {
        return 'Authentication failed due to redirect URI mismatch. Please contact support.';
    }
    if ($errorCode === 'AADB2C90079' || $errorCode === 'AADB2C90057') {
        return 'Authentication application settings are incomplete. Please contact support.';
    }
    if ($errorCode === 'AADB2C99059') {
        return 'Authentication request is missing required security parameters. Please try again.';
    }

    if (strtolower($providerError) === 'access_denied') {
        return 'Authentication request was denied by identity provider. Please try again.';
    }

    return 'Authentication could not be completed. Please try again.';
}

if (!hasAuthConfig()) {
    redirectToLoginWithError('Authentication is not configured. Please contact support.');
}

$providerError = $_GET['error'] ?? $_POST['error'] ?? null;
if (is_string($providerError) && $providerError !== '') {
    $providerDescription = (string) ($_GET['error_description'] ?? $_POST['error_description'] ?? 'Authentication request was rejected.');
    $friendlyMessage = buildProviderErrorMessage($providerError, $providerDescription);
    redirectToLoginWithError($friendlyMessage, [
        'provider_error' => $providerError,
        'provider_description' => $providerDescription,
        'provider_code' => extractProviderCode($providerDescription),
    ]);
}

$code = $_SERVER['REQUEST_METHOD'] === 'POST' ? ($_POST['code'] ?? null) : ($_GET['code'] ?? null);
$incomingState = $_SERVER['REQUEST_METHOD'] === 'POST' ? ($_POST['state'] ?? null) : ($_GET['state'] ?? null);
$expectedState = $_SESSION[AUTH_SESSION_STATE_KEY] ?? null;
$expectedCodeVerifier = $_SESSION[AUTH_SESSION_PKCE_KEY] ?? null;
$expectedNonce = $_SESSION[AUTH_SESSION_NONCE_KEY] ?? null;
unset($_SESSION[AUTH_SESSION_STATE_KEY]);
unset($_SESSION[AUTH_SESSION_PKCE_KEY]);
unset($_SESSION[AUTH_SESSION_NONCE_KEY]);

if (!is_string($code) || $code === '') {
    redirectToLoginWithError('No authorization code received from identity provider.');
}

if (!is_string($incomingState) || $incomingState === '' || !is_string($expectedState) || $expectedState === '' || !hash_equals($expectedState, $incomingState)) {
    redirectToLoginWithError('Session validation failed. Please start login again.', [
        'has_incoming_state' => is_string($incomingState) && $incomingState !== '',
        'has_expected_state' => is_string($expectedState) && $expectedState !== '',
    ]);
}

if (!is_string($expectedCodeVerifier) || $expectedCodeVerifier === '') {
    redirectToLoginWithError('Session validation failed. Please login again.', [
        'missing_pkce_verifier' => true,
    ]);
}

$postData = [
    'client_id'     => CLIENT_ID,
    'scope'         => SCOPES,
    'code'          => $code,
    'redirect_uri'  => REDIRECT_URI,
    'grant_type'    => 'authorization_code',
    'client_secret' => CLIENT_SECRET,
    'code_verifier' => $expectedCodeVerifier,
];

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => TOKEN_URL,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($postData),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
]);

$response = curl_exec($ch);
$curlError = curl_error($ch);
$httpStatus = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false) {
    redirectToLoginWithError('Unable to contact identity provider. Please retry.', [
        'curl_error' => $curlError,
    ]);
}

$tokenResponse = json_decode((string) $response, true);
if (!is_array($tokenResponse)) {
    redirectToLoginWithError('Invalid response received from identity provider.', [
        'http_status' => $httpStatus,
        'raw_response' => (string) $response,
    ]);
}

$tokenError = $tokenResponse['error'] ?? null;
if (is_string($tokenError) && $tokenError !== '') {
    $tokenErrorDescription = $tokenResponse['error_description'] ?? 'Token exchange failed.';
    redirectToLoginWithError('Authentication failed at token exchange. Please try again.', [
        'http_status' => $httpStatus,
        'token_error' => $tokenError,
        'token_error_description' => $tokenErrorDescription,
        'response' => $tokenResponse,
    ]);
}

$idToken = $tokenResponse['id_token'] ?? null;
if (!is_string($idToken) || $idToken === '') {
    redirectToLoginWithError('Token exchange failed. Please verify OAuth settings.', [
        'http_status' => $httpStatus,
        'response' => $tokenResponse,
    ]);
}

$payload = decodeIdTokenPayload($idToken);
if (!is_array($payload)) {
    redirectToLoginWithError('Unable to decode identity token from provider.');
}

$tokenNonce = $payload['nonce'] ?? null;
if (is_string($expectedNonce) && $expectedNonce !== '' && is_string($tokenNonce) && $tokenNonce !== '' && !hash_equals($expectedNonce, $tokenNonce)) {
    redirectToLoginWithError('Session validation failed. Please login again.', [
        'nonce_mismatch' => true,
    ]);
}

$emailFromList = null;
if (isset($payload['emails']) && is_array($payload['emails'])) {
    $firstEmail = $payload['emails'][0] ?? null;
    if (is_string($firstEmail) && $firstEmail !== '') {
        $emailFromList = $firstEmail;
    }
}

$userId = $payload['oid'] ?? $payload['sub'] ?? $payload['email'] ?? $payload['preferred_username'] ?? $emailFromList ?? null;
if (!is_string($userId) || $userId === '') {
    redirectToLoginWithError('Identity token did not include a usable user id.', [
        'available_claims' => array_keys($payload),
    ]);
}

$userName = $payload['name'] ?? 'User';
if (!is_string($userName) || $userName === '') {
    $givenName = $payload['given_name'] ?? null;
    $familyName = $payload['family_name'] ?? null;
    if (is_string($givenName) && $givenName !== '' && is_string($familyName) && $familyName !== '') {
        $userName = $givenName . ' ' . $familyName;
    } elseif (is_string($givenName) && $givenName !== '') {
        $userName = $givenName;
    } else {
        $userName = 'User';
    }
}

$userEmail = $payload['email'] ?? $payload['preferred_username'] ?? $emailFromList ?? null;
if (!is_string($userEmail) || $userEmail === '') {
    $userEmail = 'No Email';
}

session_regenerate_id(true);
$_SESSION['user_id'] = $userId;
$_SESSION['user_name'] = $userName;
$_SESSION['user_email'] = $userEmail;
$_SESSION['user_logged_in'] = true;
unset($_SESSION[AUTH_SESSION_ERROR_KEY]);

authLog('User authenticated successfully', [
    'user_id' => $userId,
    'user_email' => $userEmail,
]);

header('Location: /dashboard/');
exit();
?>
