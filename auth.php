<?php
declare(strict_types=1);

/**
 * BlockAI Solution - Login entry point.
 */
require_once 'auth_config.php';
ensureSessionStarted();

if (!hasAuthConfig()) {
    authLog('OAuth configuration missing', [
        'has_client_id' => CLIENT_ID !== '',
        'has_client_secret' => CLIENT_SECRET !== '',
        'tenant_name' => TENANT_NAME,
        'auth_mode' => AUTH_MODE,
        'has_user_flow' => USER_FLOW !== '',
        'authority_url' => AUTHORITY_URL,
    ]);

    http_response_code(500);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Configuration Error</title>
        <style>
            body { font-family: Arial, sans-serif; background: #0b1020; color: #e2e8f0; display: flex; min-height: 100vh; align-items: center; justify-content: center; margin: 0; padding: 20px; }
            .card { max-width: 560px; background: #111827; border: 1px solid #334155; border-radius: 12px; padding: 24px; }
            h1 { margin-top: 0; font-size: 22px; }
            p { color: #cbd5e1; line-height: 1.6; }
            a { color: #22d3ee; text-decoration: none; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Login is not configured yet</h1>
            <p>Required OAuth environment variables are missing or incomplete. Please configure Azure credentials and try again.</p>
            <p>If you use Microsoft B2C, ensure <strong>AZURE_USER_FLOW</strong> is configured (for example: <code>B2C_1_signupsignin</code>).</p>
            <p><a href="index.php">Back to homepage</a></p>
        </div>
    </body>
    </html>
    <?php
    exit();
}

$isAlreadyLoggedIn = !empty($_SESSION['user_logged_in']) && (!empty($_SESSION['user_id']) || !empty($_SESSION['user_email']));
if ($isAlreadyLoggedIn) {
    header('Location: dashboard.php');
    exit();
}

$authError = $_SESSION[AUTH_SESSION_ERROR_KEY] ?? null;
unset($_SESSION[AUTH_SESSION_ERROR_KEY]);

$showErrorPage = is_string($authError) && $authError !== '' && !isset($_GET['retry']);
if ($showErrorPage) {
    authLog('Rendering auth error on auth page', ['error' => $authError]);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Failed</title>
        <style>
            body { font-family: Arial, sans-serif; background: #0b1020; color: #e2e8f0; display: flex; min-height: 100vh; align-items: center; justify-content: center; margin: 0; padding: 20px; }
            .card { max-width: 560px; background: #111827; border: 1px solid #334155; border-radius: 12px; padding: 24px; }
            h1 { margin-top: 0; font-size: 22px; }
            p { color: #cbd5e1; line-height: 1.6; }
            .btn { display: inline-block; margin-top: 10px; background: #06b6d4; color: #0b1020; padding: 10px 14px; border-radius: 8px; text-decoration: none; font-weight: 700; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Authentication failed</h1>
            <p><?= htmlspecialchars($authError, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
            <a href="auth.php?retry=1" class="btn">Try again</a>
        </div>
    </body>
    </html>
    <?php
    exit();
}

$authUrl = getLoginUrl();
authLog('Redirecting to identity provider', ['redirect_uri' => REDIRECT_URI]);
header('Location: ' . $authUrl);
exit();
?>
