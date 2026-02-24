<?php
/**
 * BlockAI Solution - Azure Authentication Configuration
 * This file handles the connection to Azure B2C/External ID (CIAM).
 */

// 1. Core Azure Credentials (Fetched from GitHub Secrets or Environment Variables)
define('CLIENT_ID', getenv('AZURE_CLIENT_ID'));
define('CLIENT_SECRET', getenv('AZURE_CLIENT_SECRET'));
define('TENANT_ID', getenv('AZURE_TENANT_ID'));
define('TENANT_NAME', 'blockaisolution26'); // Your specific CIAM tenant name

// 2. User Flow / Policy Name
define('USER_FLOW', getenv('AZURE_USER_FLOW') ?: 'BlockAI_Sign_In');

// 3. Redirect URI (Must match the URI registered in Azure Portal)
define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');

// 4. OIDC Endpoints for Azure CIAM
$base_url = "https://" . TENANT_NAME . ".ciamlogin.com/" . TENANT_ID . "/v2.0";

define('AUTHORITY_URL', $base_url . "/oauth2/v2.0/authorize");
define('TOKEN_URL', $base_url . "/oauth2/v2.0/token");
define('METADATA_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . TENANT_NAME . ".onmicrosoft.com/v2.0/.well-known/openid-configuration");

// 5. Scopes (Permissions requested from the user)
define('SCOPES', 'openid profile email offline_access');

/**
 * Generates the Login URL to redirect users to Azure Sign-In page
 */
function getLoginUrl() {
    $params = [
        'client_id' => CLIENT_ID,
        'response_type' => 'code', // Using Authorization Code Flow with PKCE
        'redirect_uri' => REDIRECT_URI,
        'response_mode' => 'query',
        'scope' => SCOPES,
        'state' => bin2hex(random_bytes(16)), // Security state token
    ];
    
    return AUTHORITY_URL . "?" . http_build_query($params);
}
?>
