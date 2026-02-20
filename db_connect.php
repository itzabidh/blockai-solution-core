<?php
/**
 * DB Connection - BlockAI Solution
 * Loading credentials securely from Azure Environment Variables
 */

$serverName = getenv('DB_SERVER');
$database   = getenv('DB_NAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');

try {
    // Azure SQL এর জন্য Connection String
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    
    // Error Mode সেট করা যাতে কোনো সমস্যা হলে আমরা বুঝতে পারি
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // সিকিউরিটির জন্য অরিজিনাল এরর মেসেজ হাইড রাখা হয়েছে
    // তুমি চাইলে চেক করার সময় নিচের লাইনটি আন-কমেন্ট করতে পারো:
    // die("Error: " . $e->getMessage()); 
    
    error_log($e->getMessage());
    die("A secure connection error occurred. Please check Environment Variables.");
}
?>
