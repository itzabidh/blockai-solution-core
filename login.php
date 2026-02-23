<?php
require_once 'auth_config.php';

// B2C এর জন্য সঠিক অথোরাইজেশন ইউআরএল
$authUrl = "https://".TENANT_ID.".b2clogin.com/".TENANT_ID.".onmicrosoft.com/".USER_FLOW."/oauth2/v2.0/authorize?" . http_build_query([
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
