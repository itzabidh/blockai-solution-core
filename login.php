<?php
require_once 'auth_config.php';

// নিশ্চিত করো TENANT_ID এবং USER_FLOW ঠিকমতো আসছে
$tenantName = "blockai"; // তোমার Azure B2C টেন্যান্টের নাম (prefix)
$userFlow = USER_FLOW;   // তোমার B2C পলিসির নাম (B2C_1_...)

$authUrl = "https://{$tenantName}.b2clogin.com/{$tenantName}.onmicrosoft.com/{$userFlow}/oauth2/v2.0/authorize?" . http_build_query([
    'client_id'     => CLIENT_ID,
    'response_type' => 'code',
    'redirect_uri'  => REDIRECT_URI,
    'response_mode' => 'query',
    'scope'         => 'openid profile email',
    'state'         => bin2hex(random_bytes(16)),
]);

header("Location: " . $authUrl);
exit();
?>
