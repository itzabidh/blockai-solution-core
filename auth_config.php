<?php
/**
 * BlockAI Solution - Azure Configuration Fix
 */

// Core Credentials
define('CLIENT_ID', 'f07dd32f-7d6b-4a54-b815-77b7a1867bd9'); // Your Client ID
define('CLIENT_SECRET', 'YOUR_ACTUAL_CLIENT_SECRET'); // Put your secret here
define('TENANT_ID', '26d2f4c7-19ac-4d14-b5e4-d501448826b1'); // Your Directory ID
define('TENANT_NAME', 'blockaisolution26'); // Your Tenant Prefix

// Important: Fixed Authority URL for External ID (CIAM)
// This format removes the 'v2.0' error by structuring the path correctly
define('AUTHORITY_URL', "https://" . TENANT_NAME . ".ciamlogin.com/common/oauth2/v2.0/authorize");
define('TOKEN_URL', "https://" . TENANT_NAME . ".ciamlogin.com/common/oauth2/v2.0/token");

define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');
define('SCOPES', 'openid profile email offline_access');

/**
 * Generates the login URL without double slashes
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
