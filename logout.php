<?php
declare(strict_types=1);

require_once 'auth_config.php';
ensureSessionStarted();

$userId = $_SESSION['user_id'] ?? 'unknown';
$userEmail = $_SESSION['user_email'] ?? 'unknown';

authLog('User requested logout', [
    'user_id' => $userId,
    'user_email' => $userEmail,
]);

$_SESSION = [];

if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

session_destroy();
header('Location: login.php');
exit();
?>
