<?php
// ১. কনফিগ ফাইল লোড করা
require_once 'auth_config.php';

// ২. মাইক্রোসফট এন্ট্রা-র লগইন ইউআরএল তৈরি করা
// এখানে আমরা ইউজারকে মাইক্রোসফটের পেজে পাঠাবো
$authUrl = "https://login.microsoftonline.com/" . TENANT_ID . "/oauth2/v2.0/authorize?" . http_build_query([
    'client_id'     => CLIENT_ID,
    'response_type' => 'code',
    'redirect_uri'  => REDIRECT_URI,
    'response_mode' => 'query',
    'scope'         => 'openid profile email', // ইউজারের নাম ও ইমেইল পাওয়ার জন্য
    'state'         => bin2hex(random_bytes(16)), // সিকিউরিটির জন্য র‍্যান্ডম স্টেট
]);

// ৩. ইউজারকে রিডাইরেক্ট করা
header("Location: " . $authUrl);
exit();
?>
