<?php
/**
 * BlockAI Solution - Production Config
 */

// Github Secrets থেকে ভ্যালুগুলো নিচ্ছে
define('CLIENT_ID', getenv('AZURE_CLIENT_ID'));
define('CLIENT_SECRET', getenv('AZURE_CLIENT_SECRET'));
define('TENANT_ID', getenv('AZURE_TENANT_ID'));
define('TENANT_NAME', 'blockaisolution26');

$tenant_domain = TENANT_NAME . ".onmicrosoft.com";

define('AUTHORITY_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . $tenant_domain . "/oauth2/v2.0/authorize");
define('TOKEN_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . $tenant_domain . "/oauth2/v2.0/token");

define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');
define('SCOPES', 'openid profile email offline_access');

function getLoginUrl() {
    $params = [
        'client_id'     => CLIENT_ID,
        'response_type' => 'code',
        'redirect_uri'  => REDIRECT_URI,
        'response_mode' => 'query',
        'scope'         => SCOPES,
        'state'         => bin2hex(random_bytes(16)),
    ];
    return AUTHORITY_URL . "?" . http_build_query($params);
}
?>
