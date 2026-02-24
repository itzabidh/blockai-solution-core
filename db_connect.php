<?php
// Database connection configuration using environment variables
$serverName = getenv('DB_SERVER'); 
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');

try {
    // Connection string for Azure SQL Database
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Never show the actual error to the user for security
    die("Error: Could not connect to the database.");
}
?>
