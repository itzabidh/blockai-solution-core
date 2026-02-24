// callback.php এর শুরুতে যোগ করুন
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Azure যদি POST পাঠায় তবে আমরা কোড পাবো $_POST['code'] এ
    $code = $_POST['code'] ?? null;
} else {
    // নাহলে $_GET['code'] এ
    $code = $_GET['code'] ?? null;
}
<?php
/**
 * BlockAI Solution - Azure CIAM Callback Handler
 * Purpose: Exchange Auth Code for Access Token and Redirect to Dashboard
 */

require_once 'auth_config.php'; // Ensure your constants are defined here
session_start();

if (isset($_GET['code'])) {
    $code = $_GET['code'];

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
        // 3. Safe Base64 Decoding of ID Token Payload
        $token_parts = explode('.', $data['id_token']);
        if (count($token_parts) >= 2) {
            $base64Payload = str_replace(['-', '_'], ['+', '/'], $token_parts[1]);
            
            // Add padding if missing
            $padding = strlen($base64Payload) % 4;
            if ($padding) {
                $base64Payload .= str_repeat('=', 4 - $padding);
            }
            
            $payload = json_decode(base64_decode($base64Payload), true);

            // 4. Set Session Variables
            $_SESSION['user_id']    = $payload['oid'] ?? ($payload['sub'] ?? 'N/A');
            $_SESSION['user_name']  = $payload['name'] ?? ($payload['given_name'] ?? 'User');
            $_SESSION['user_email'] = $payload['email'] ?? ($payload['preferred_username'] ?? 'No Email');
            $_SESSION['user_logged_in'] = true;

            // 5. Success! Redirect to Dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            die("Error: Invalid Token Format.");
        }
    } else {
        // Log Azure specific errors
        error_log("Azure Token Error: " . json_encode($data));
        die("Error: Token exchange failed. " . ($data['error_description'] ?? 'Check Client Secret and Redirect URI.'));
    }
} else {
    // If user cancels or direct access
    header("Location: index.php?error=no_code");
    exit();
}
?>
