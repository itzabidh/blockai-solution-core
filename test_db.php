<?php
include 'db_connect.php';

try {
    // ডাটাবেস থেকে জাস্ট একটা ছোট টেস্ট কোয়েরি
    $stmt = $conn->query("SELECT TOP 1 ProductName FROM BusinessProducts");
    $result = $stmt->fetch();

    if ($result) {
        echo "<h1 style='color:green;'>সাফল্য! ডাটাবেস কানেক্টেড এবং ডাটা পাওয়া যাচ্ছে।</h1>";
        echo "টেস্ট ডাটা: " . $result['ProductName'];
    } else {
        echo "<h1 style='color:orange;'>কানেকশন হয়েছে কিন্তু টেবিল খালি!</h1>";
    }
} catch (PDOException $e) {
    echo "<h1 style='color:red;'>কানেকশন ফেইল মারছে মামা!</h1>";
    echo "এরর মেসেজ: " . $e->getMessage();
}
?>
