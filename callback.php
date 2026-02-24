<?php
require_once 'auth_config.php';
session_start();

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // 1. Updated Token Endpoint for CIAM/External ID
    // Using the TOKEN_URL defined in your auth_config.php
    $post_data = [
        'client_id'     => CLIENT_ID,
        'scope'         => SCOPES,
        'code'          => $code,
        'redirect_uri'  => REDIRECT_URI,
        'grant_type'    => 'authorization_code',
        'client_secret' => CLIENT_SECRET,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, TOKEN_URL); // Using constant from config
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['id_token'])) {
        // 2. Decode ID Token Payload
        $token_parts = explode('.', $data['id_token']);
        // Adding padding to base64 string for safe decoding
        $payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $token_parts[1])), true);

        // 3. Set Session Variables based on Claims
        // Note: CIAM usually uses 'oid' or 'sub' for Unique ID
        $_SESSION['user_id']    = $payload['oid'] ?? ($payload['sub'] ?? 'N/A');
        $_SESSION['user_name']  = $payload['name'] ?? ($payload['given_name'] ?? 'User');
        $_SESSION['user_email'] = $payload['email'] ?? ($payload['preferred_username'] ?? 'No Email');
        $_SESSION['user_type']  = 'external_user';

        // 4. Redirect to Dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Handle Error Details from Azure
        error_log("Azure Login Error: " . json_encode($data));
        die("Error: Login failed. " . ($data['error_description'] ?? 'Check Azure App Registration and Scopes.'));
    }
} else {
    die("No authorization code received.");
}
?>
