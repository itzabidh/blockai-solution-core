<?php
/**
 * DB Connection - BlockAI Solution
 * Loading credentials securely from Azure Environment Variables
 */

// 1. Fetch credentials from Environment Variables
$serverName = getenv('DB_SERVER');
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');

try {
    // 2. Connection string for Azure SQL Database
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    
    // 3. Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // 4. Detailed error message for troubleshooting
    echo "<div style='background:#fee; color:#b00; padding:10px; border:1px solid #b00; border-radius:5px;'>";
    echo "<strong>Database Connection Error!</strong><br>";
    echo "Details: " . htmlspecialchars($e->getMessage());
    echo "</div>";
    
    error_log($e->getMessage());
    die();
}
?>
