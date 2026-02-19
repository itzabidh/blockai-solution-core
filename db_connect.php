<?php
// Professional way: Loading credentials from Environment Variables
$serverName = getenv('DB_SERVER');
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Never show real password or server details in error messages
    error_log($e->getMessage());
    die("A secure connection error occurred.");
}
?>
