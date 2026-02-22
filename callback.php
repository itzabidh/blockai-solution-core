<?php
require_once 'auth_config.php';
session_start();

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // ১. টোকেন পাওয়ার জন্য মাইক্রোসফটকে রিকোয়েস্ট পাঠানো
    $token_url = "https://".TENANT_ID.".b2clogin.com/".TENANT_ID.".onmicrosoft.com/".USER_FLOW."/oauth2/v2.0/token";

    $post_data = [
        'client_id' => CLIENT_ID,
        'scope' => 'openid profile email',
        'code' => $code,
        'redirect_uri' => REDIRECT_URI,
        'grant_type' => 'authorization_code',
        'client_secret' => CLIENT_SECRET,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['id_token'])) {
        // ২. ID Token ডিকোড করা (Base64 Decode)
        $token_parts = explode('.', $data['id_token']);
        $payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $token_parts[1])), true);

        // ৩. ইউজারের তথ্য সেশনে সেভ করা
        $_SESSION['user_id'] = $payload['oid'] ?? $payload['sub'];
        $_SESSION['user_name'] = $payload['name'] ?? 'User';
        $_SESSION['user_email'] = $payload['emails'][0] ?? $payload['email'];
        $_SESSION['user_type'] = 'external_user';

        // ৪. ড্যাশবোর্ডে রিডাইরেক্ট করা
        header("Location: dashboard.php");
        exit();
    } else {
        die("Error: Login failed. " . ($data['error_description'] ?? 'Check your configuration.'));
    }
} else {
    die("No authorization code received.");
}
?>
