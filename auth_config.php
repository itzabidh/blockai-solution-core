<?php
declare(strict_types=1);

/**
 * Shared OAuth configuration and auth helper utilities.
 */
const AUTH_SESSION_STATE_KEY = 'oauth2_state';
const AUTH_SESSION_ERROR_KEY = 'auth_error';

define('CLIENT_ID', (string) getenv('AZURE_CLIENT_ID'));
define('CLIENT_SECRET', (string) getenv('AZURE_CLIENT_SECRET'));
define('TENANT_ID', (string) getenv('AZURE_TENANT_ID'));
define('TENANT_NAME', (string) (getenv('AZURE_TENANT_NAME') ?: 'blockaisolution26'));

$tenantDomain = TENANT_NAME . '.onmicrosoft.com';
define('AUTHORITY_URL', 'https://' . TENANT_NAME . '.ciamlogin.com/' . $tenantDomain . '/oauth2/v2.0/authorize');
define('TOKEN_URL', 'https://' . TENANT_NAME . '.ciamlogin.com/' . $tenantDomain . '/oauth2/v2.0/token');
define('SCOPES', 'openid profile email offline_access');

/**
 * Select a redirect URI that works for production and local testing.
 */
define('REDIRECT_URI', resolveRedirectUri());

function resolveRedirectUri(): string
{
    $envRedirect = (string) getenv('AZURE_REDIRECT_URI');
    if ($envRedirect !== '') {
        return $envRedirect;
    }

    if (!empty($_SERVER['HTTP_HOST'])) {
        $isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
        $scheme = $isHttps ? 'https' : 'http';
        return $scheme . '://' . $_SERVER['HTTP_HOST'] . '/callback.php';
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
    return CLIENT_ID !== '' && CLIENT_SECRET !== '' && TENANT_NAME !== '';
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
    $_SESSION[AUTH_SESSION_STATE_KEY] = $state;

    $params = [
        'client_id'     => CLIENT_ID,
        'response_type' => 'code',
        'redirect_uri'  => REDIRECT_URI,
        'response_mode' => 'query',
        'scope'         => SCOPES,
        'state'         => $state,
    ];

    return AUTHORITY_URL . '?' . http_build_query($params);
}
?>
