<?php
/**
 * BlockAI Solution - Final Azure Fix
 * Mama, this version uses the specific tenant domain to avoid AADSTS500209.
 */

// 1. Core Credentials (Hardcoded for maximum stability)
define('CLIENT_ID', 'f07dd32f-7d6b-4a54-b815-77b7a1867bd9');
define('CLIENT_SECRET', 'YOUR_ACTUAL_CLIENT_SECRET'); // Replace with your secret
define('TENANT_ID', '26d2f4c7-19ac-4d14-b5e4-d501448826b1');
define('TENANT_NAME', 'blockaisolution26');

// 2. Updated Authority URL (Using Domain instead of 'common')
// This fixes the "Unspecific Tenant" error
$tenant_domain = TENANT_NAME . ".onmicrosoft.com"; 
define('AUTHORITY_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . $tenant_domain . "/oauth2/v2.0/authorize");
define('TOKEN_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . $tenant_domain . "/oauth2/v2.0/token");

// 3. Other Settings
define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');
define('SCOPES', 'openid profile email offline_access');

/**
 * Generates the login URL
 */
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
