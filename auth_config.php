<?php
/**
 * BlockAI Solution - Azure Authentication Configuration
 * মামা, এই ফাইলটি আপনার Azure B2C/External ID কানেকশন হ্যান্ডেল করবে।
 */

// ১. Azure থেকে প্রাপ্ত মূল তথ্যগুলো (GitHub Secrets থেকে আসবে)
define('CLIENT_ID', getenv('AZURE_CLIENT_ID'));
define('CLIENT_SECRET', getenv('AZURE_CLIENT_SECRET'));
define('TENANT_ID', getenv('AZURE_TENANT_ID'));
define('TENANT_NAME', 'blockaisolution26'); // আপনার CIAM টেন্যান্টের নাম

// ২. ইউজার ফ্লো (আপনার সাইন-ইন পলিসির নাম)
define('USER_FLOW', getenv('AZURE_USER_FLOW') ?: 'B2C_1_BlockAI_Sign_In');

// ৩. রিডাইরেক্ট ইউআরএল (লগইন শেষে ইউজার যেখানে ফিরে আসবে)
// Azure পোর্টালে এই লিঙ্কটি অবশ্যই 'Web' Redirect URI হিসেবে থাকতে হবে
define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');

// ৪. ওআইডিসি (OIDC) এন্ডপয়েন্টস (Azure CIAM এর জন্য কনফিগার করা)
// এটি টোকেন ভ্যালিডেট এবং ইউজার ডাটা রিড করতে সাহায্য করে
$base_url = "https://" . TENANT_NAME . ".ciamlogin.com/" . TENANT_ID . "/v2.0";

define('AUTHORITY_URL', $base_url . "/oauth2/v2.0/authorize");
define('TOKEN_URL', $base_url . "/oauth2/v2.0/token");
define('METADATA_URL', "https://" . TENANT_NAME . ".ciamlogin.com/" . TENANT_NAME . ".onmicrosoft.com/v2.0/.well-known/openid-configuration");

// ৫. স্কোপ (ইউজারের কোন কোন তথ্য আমরা চাচ্ছি)
define('SCOPES', 'openid profile email offline_access');

/**
 * মামা, লগইন ইউআরএল জেনারেট করার ফাংশন
 */
function getLoginUrl() {
    $params = [
        'client_id' => CLIENT_ID,
        'response_type' => 'code', // PKCE এর জন্য code ব্যবহার করা ভালো
        'redirect_uri' => REDIRECT_URI,
        'response_mode' => 'query',
        'scope' => SCOPES,
        'state' => bin2hex(random_bytes(16)), // সিকিউরিটির জন্য স্টেট টোকেন
    ];
    
    return AUTHORITY_URL . "?" . http_build_query($params);
}
?>
