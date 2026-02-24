<?php
/**
 * BlockAI Solution - Fixed Azure Callback
 */
require_once 'auth_config.php';
session_start();

// আপনার দেওয়া লজিক অনুযায়ী কোডটি ধরা
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'] ?? null;
} else {
    $code = $_GET['code'] ?? null;
}

if ($code) {
    // 1. Prepare Data for Token Exchange
    $post_data = [
        'client_id'     => CLIENT_ID,
        'scope'         => SCOPES,
        'code'          => $code,
        'redirect_uri'  => REDIRECT_URI,
        'grant_type'    => 'authorization_code',
        'client_secret' => CLIENT_SECRET,
    ];

    // 2. Initialize cURL for Token Request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, TOKEN_URL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    curl_close($ch);

    if (isset($data['id_token'])) {
        // 3. Decoding and Session Setting
        $token_parts = explode('.', $data['id_token']);
        $base64Payload = str_replace(['-', '_'], ['+', '/'], $token_parts[1]);
        $payload = json_decode(base64_decode($base64Payload), true);

        $_SESSION['user_name']  = $payload['name'] ?? 'User';
        $_SESSION['user_email'] = $payload['email'] ?? 'No Email';
        $_SESSION['user_logged_in'] = true;

        header("Location: dashboard.php");
        exit();
    } else {
        error_log("Azure Error: " . json_encode($data));
        die("Error: Token exchange failed. " . ($data['error_description'] ?? 'Check Secret.'));
    }
} else {
    die("Error: No code received from Azure.");
}
?>
