<?php
session_start();
include 'db_connect.php';

$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ডেটাবেস থেকে ইউজার খোঁজা
    $sql = "SELECT * FROM Users WHERE Email = ?";
    $params = array($email);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

    if ($user) {
        // পাসওয়ার্ড চেক (Hashing verification)
        if (password_verify($password, $user['Password'])) {
            // সেশন সেট করা
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_name'] = $user['Name'];
            $_SESSION['user_type'] = $user['UserType'];

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid Password!";
        }
    } else {
        $error = "No account found with this email!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { background-color: #0C0C14; color: white; }</style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white/5 p-10 rounded-3xl border border-white/10 w-96">
        <h2 class="text-2xl font-bold mb-6 text-center uppercase tracking-widest">Login to BlockAI</h2>
        <?php if($error): ?> <p class="text-red-500 text-xs mb-4"><?php echo $error; ?></p> <?php endif; ?>
        <form method="POST" class="space-y-4">
            <input type="email" name="email" placeholder="Email" required class="w-full p-3 rounded-xl bg-white/5 border border-white/10 outline-none focus:border-cyan-400">
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 rounded-xl bg-white/5 border border-white/10 outline-none focus:border-cyan-400">
            <button type="submit" class="w-full bg-cyan-500 text-black font-bold py-3 rounded-xl hover:bg-cyan-400 transition">Login Now</button>
        </form>
    </div>
</body>
</html>
