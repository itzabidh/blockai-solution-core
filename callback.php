<?php
require_once 'auth_config.php';
session_start();

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // টোকেন এন্ডপয়েন্ট (এখন login.php এর সাথে মিলবে)
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
        $token_parts = explode('.', $data['id_token']);
        $payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $token_parts[1])), true);

        $_SESSION['user_id'] = $payload['oid'] ?? $payload['sub'];
        $_SESSION['user_name'] = $payload['name'] ?? 'User';
        $_SESSION['user_email'] = $payload['emails'][0] ?? ($payload['email'] ?? 'No Email');
        $_SESSION['user_type'] = 'external_user';

        header("Location: dashboard.php");
        exit();
    } else {
        die("Error: Login failed. " . ($data['error_description'] ?? 'Check Azure B2C Policy/User Flow.'));
    }
} else {
    die("No authorization code received.");
}
?>
