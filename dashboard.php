<?php
session_start();

// ১. চেক করা হচ্ছে ইউজার লগইন করা কি না
if (!isset($_SESSION['user_id'])) {
    // লগইন করা না থাকলে লগইন পেজে পাঠিয়ে দাও
    header("Location: login.php");
    exit();
}

// ২. সেশন থেকে ইউজারের তথ্য নেওয়া
$userName = $_SESSION['user_name'];
$userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Dashboard</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .dashboard-card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 350px; }
        .welcome-msg { color: #333; font-size: 1.5rem; margin-bottom: 0.5rem; }
        .user-email { color: #666; margin-bottom: 2rem; }
        .logout-btn { background-color: #ff4757; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-weight: bold; }
        .logout-btn:hover { background-color: #ff6b81; }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <div class="welcome-msg">স্বাগতম, <?php echo htmlspecialchars($userName); ?>! 👋</div>
        <p class="user-email"><?php echo htmlspecialchars($userEmail); ?></p>
        <hr>
        <p>আপনার <strong>BlockAI</strong> ড্যাশবোর্ডে আপনি এখন সাকসেসফুলি লগইন অবস্থায় আছেন।</p>
        <br>
        <a href="logout.php" class="logout-btn">Log Out</a>
    </div>

</body>
</html>
