<?php
declare(strict_types=1);

// Compatibility shim for environments where /login.php might be blocked.
$target = 'auth.php';
if (!empty($_SERVER['QUERY_STRING'])) {
    $target .= '?' . $_SERVER['QUERY_STRING'];
}
header('Location: ' . $target);
exit();
?>
