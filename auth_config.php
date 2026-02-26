<?php
declare(strict_types=1);

/**
 * Shared OAuth configuration and auth helper utilities.
 */
const AUTH_SESSION_STATE_KEY = 'oauth2_state';
const AUTH_SESSION_ERROR_KEY = 'auth_error';
const AUTH_SESSION_PKCE_KEY = 'oauth2_pkce_verifier';
const AUTH_SESSION_NONCE_KEY = 'oauth2_nonce';

define('CLIENT_ID', trim((string) getenv('AZURE_CLIENT_ID')));
define('CLIENT_SECRET', trim((string) getenv('AZURE_CLIENT_SECRET')));
define('TENANT_ID', trim((string) getenv('AZURE_TENANT_ID')));
define('TENANT_NAME', trim((string) (getenv('AZURE_TENANT_NAME') ?: 'blockaisolution26')));
define('TENANT_DOMAIN', TENANT_NAME !== '' ? TENANT_NAME . '.onmicrosoft.com' : '');
define('USER_FLOW', trim((string) (getenv('AZURE_USER_FLOW') ?: getenv('AZURE_B2C_USER_FLOW'))));

$authorityConfig = resolveAuthorityConfig();
define('AUTH_MODE', $authorityConfig['mode']);
define('AUTHORITY_HOST', $authorityConfig['authority_host']);
define('AUTHORITY_URL', $authorityConfig['authority_url']);
define('TOKEN_URL', $authorityConfig['token_url']);
define('SCOPES', resolveScopes());

/**
 * Select a redirect URI that works for production and local testing.
 */
define('REDIRECT_URI', resolveRedirectUri());

function resolveAuthorityConfig(): array
{
    $configuredHost = trim((string) (getenv('AZURE_AUTHORITY_HOST') ?: getenv('AZURE_AUTH_HOST')));
    if ($configuredHost !== '') {
        $configuredHost = preg_replace('#^https?://#i', '', $configuredHost) ?? $configuredHost;
        $configuredHost = rtrim($configuredHost, '/');
    }

    $explicitMode = strtolower(trim((string) getenv('AZURE_AUTH_MODE')));
    if ($explicitMode === 'b2c' || $explicitMode === 'ciam') {
        $mode = $explicitMode;
    } elseif ($configuredHost !== '' && stripos($configuredHost, 'b2clogin.com') !== false) {
        $mode = 'b2c';
    } elseif ($configuredHost !== '' && stripos($configuredHost, 'ciamlogin.com') !== false) {
        $mode = 'ciam';
    } elseif (USER_FLOW !== '' && preg_match('/^b2c_/i', USER_FLOW) === 1) {
        // B2C user flows are commonly named with a B2C_ prefix.
        $mode = 'b2c';
    } else {
        $mode = 'ciam';
    }

    $authorityHost = $configuredHost;
    if ($authorityHost === '' && TENANT_NAME !== '') {
        $authorityHost = TENANT_NAME . ($mode === 'b2c' ? '.b2clogin.com' : '.ciamlogin.com');
    }

    $pathPrefix = TENANT_DOMAIN;
    if ($mode === 'b2c' && USER_FLOW !== '') {
        $pathPrefix .= '/' . USER_FLOW;
    }

    $oauthBase = ($authorityHost !== '' && $pathPrefix !== '')
        ? 'https://' . $authorityHost . '/' . $pathPrefix . '/oauth2/v2.0'
        : '';

    return [
        'mode' => $mode,
        'authority_host' => $authorityHost,
        'authority_url' => $oauthBase !== '' ? $oauthBase . '/authorize' : '',
        'token_url' => $oauthBase !== '' ? $oauthBase . '/token' : '',
    ];
}

function resolveScopes(): string
{
    $scopes = trim((string) (getenv('AZURE_SCOPES') ?: getenv('AZURE_SCOPE')));
    if ($scopes !== '') {
        return $scopes;
    }

    return 'openid profile email offline_access';
}

function toBase64Url(string $binary): string
{
    return rtrim(strtr(base64_encode($binary), '+/', '-_'), '=');
}

/**
 * Build PKCE verifier and challenge pair for authorization code flow.
 *
 * @return array{verifier: string, challenge: string}
 */
function createPkcePair(): array
{
    $verifier = toBase64Url(random_bytes(64));
    $challenge = toBase64Url(hash('sha256', $verifier, true));

    return [
        'verifier' => $verifier,
        'challenge' => $challenge,
    ];
}

function currentAppBaseUrl(): ?string
{
    $host = trim((string) ($_SERVER['HTTP_HOST'] ?? ''));
    if ($host === '') {
        return null;
    }

    $isHttps = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
        (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower((string) $_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
    );
    $scheme = $isHttps ? 'https' : 'http';
    return $scheme . '://' . $host;
}

function resolveRedirectUri(): string
{
    $envRedirect = (string) getenv('AZURE_REDIRECT_URI');
    $envRedirect = trim($envRedirect);

    $dynamicBase = currentAppBaseUrl();
    $dynamicRedirect = $dynamicBase !== null ? $dynamicBase . '/callback.php' : null;

    if ($envRedirect !== '') {
        $strictRedirect = trim((string) getenv('AZURE_REDIRECT_URI_STRICT')) === '1';
        if (!$strictRedirect && $dynamicRedirect !== null) {
            $envHost = parse_url($envRedirect, PHP_URL_HOST);
            $dynamicHost = parse_url($dynamicRedirect, PHP_URL_HOST);
            if (is_string($envHost) && is_string($dynamicHost) && $envHost !== '' && $dynamicHost !== '' && strcasecmp($envHost, $dynamicHost) !== 0) {
                authLog('Using dynamic redirect URI to match current host', [
                    'configured_redirect_uri' => $envRedirect,
                    'dynamic_redirect_uri' => $dynamicRedirect,
                ]);
                return $dynamicRedirect;
            }
        }

        return $envRedirect;
    }

    if ($dynamicRedirect !== null) {
        return $dynamicRedirect;
    }

    return 'https://blockaisolution.com/callback.php';
}

function ensureSessionStarted(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function hasAuthConfig(): bool
{
    if (CLIENT_ID === '' || CLIENT_SECRET === '' || TENANT_NAME === '') {
        return false;
    }

    if (AUTH_MODE === 'b2c' && USER_FLOW === '') {
        return false;
    }

    return AUTHORITY_URL !== '' && TOKEN_URL !== '';
}

/**
 * Lightweight structured application logging.
 */
function authLog(string $message, array $context = []): void
{
    $line = '[BlockAI Auth] ' . $message;
    if ($context !== []) {
        $encoded = json_encode($context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        if (is_string($encoded)) {
            $line .= ' | ' . $encoded;
        }
    }
    error_log($line);
}

function getLoginUrl(): string
{
    ensureSessionStarted();

    $state = bin2hex(random_bytes(16));
    $nonce = bin2hex(random_bytes(16));
    $pkce = createPkcePair();
    $_SESSION[AUTH_SESSION_STATE_KEY] = $state;
    $_SESSION[AUTH_SESSION_NONCE_KEY] = $nonce;
    $_SESSION[AUTH_SESSION_PKCE_KEY] = $pkce['verifier'];

    $params = [
        'client_id'     => CLIENT_ID,
        'response_type' => 'code',
        'redirect_uri'  => REDIRECT_URI,
        'response_mode' => 'query',
        'scope'         => SCOPES,
        'state'         => $state,
        'nonce'         => $nonce,
        'code_challenge' => $pkce['challenge'],
        'code_challenge_method' => 'S256',
    ];

    // Add policy as query parameter for broad B2C compatibility.
    if (AUTH_MODE === 'b2c' && USER_FLOW !== '') {
        $params['p'] = USER_FLOW;
    }

    return AUTHORITY_URL . '?' . http_build_query($params);
}
?>
