<?php
session_start();

// 1. Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// 2. Retrieve user information from session
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
        .dashboard-card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 400px; }
        .welcome-msg { color: #333; font-size: 1.5rem; margin-bottom: 0.5rem; }
        .user-email { color: #666; margin-bottom: 2rem; }
        .info-text { font-size: 0.9rem; color: #444; margin: 1.5rem 0; }
        .logout-btn { background-color: #ff4757; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-weight: bold; display: inline-block; transition: 0.3s; }
        .logout-btn:hover { background-color: #ff6b81; }
        hr { border: 0; border-top: 1px solid #eee; margin: 1rem 0; }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <div class="welcome-msg">Welcome, <?php echo htmlspecialchars($userName); ?>! 👋</div>
        <p class="user-email"><?php echo htmlspecialchars($userEmail); ?></p>
        <hr>
        <div class="info-text">
            You have successfully logged into your <strong>BlockAI</strong> dashboard using Azure Authentication.
        </div>
        <br>
        <a href="logout.php" class="logout-btn">Log Out</a>
    </div>

</body>
</html>
