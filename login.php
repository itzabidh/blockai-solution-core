<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// এরপর তোমার বাকি কোড...
<?php
// ১. কনফিগারেশন ফাইল লোড করা
require_once 'auth_config.php';
session_start();

/**
 * Entra External ID / B2C Authorize URL তৈরি করা
 * এই URL-এ ইউজারকে পাঠালে মাইক্রোসফট তার ইমেইল/পাসওয়ার্ড ভেরিফাই করবে
 */

// সিকিউরিটির জন্য একটি র‍্যান্ডম স্টেট জেনারেট করা
$state = bin2hex(random_bytes(16));
$_SESSION['oauth_state'] = $state;

// মাইক্রোসফট অথরাইজেশন এন্ডপয়েন্ট ইউআরএল তৈরি
// আমরা 'code' রেসপন্স টাইপ ব্যবহার করছি যা সবচেয়ে সিকিউর
$authUrl = "https://".TENANT_ID.".b2clogin.com/".TENANT_ID.".onmicrosoft.com/".USER_FLOW."/oauth2/v2.0/authorize?".http_build_query([
    'client_id'    => CLIENT_ID,
    'response_type' => 'code',
    'redirect_uri'  => REDIRECT_URI,
    'response_mode' => 'query',
    'scope'         => 'openid profile email',
    'state'         => $state
]);

// ইউজারকে মাইক্রোসফট লগইন পেজে পাঠিয়ে দাও
header("Location: " . $authUrl);
exit();
?>
