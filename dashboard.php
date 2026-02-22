<?php
session_start();
// যদি লগইন করা না থাকে, তবে তাকে লগইন পেজে পাঠিয়ে দাও
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#0C0C14] text-white">
    <div class="flex h-screen">
        <aside class="w-64 bg-black/40 border-r border-white/5 p-6">
            <h1 class="text-xl font-bold text-cyan-400 mb-10">BLOCKAI PANEL</h1>
            <nav class="space-y-4">
                <a href="#" class="block p-3 bg-cyan-400/10 text-cyan-400 rounded-xl"><i class="fa fa-home mr-2"></i> Overview</a>
                <a href="#" class="block p-3 hover:bg-white/5 rounded-xl transition"><i class="fa fa-brain mr-2"></i> My AI Models</a>
                <a href="logout.php" class="block p-3 text-red-400 hover:bg-red-400/10 rounded-xl mt-20"><i class="fa fa-sign-out mr-2"></i> Logout</a>
            </nav>
        </aside>

        <main class="flex-1 p-10">
            <header class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold">Welcome, <?php echo $_SESSION['user_name']; ?>! 👋</h2>
                <div class="px-4 py-2 bg-purple-500/20 text-purple-400 rounded-full text-sm font-bold border border-purple-500/30">
                    Mode: <?php echo strtoupper($_SESSION['user_type']); ?>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white/5 border border-white/10 rounded-[30px]">
                    <p class="text-slate-400 text-sm">Account Status</p>
                    <p class="text-2xl font-bold text-green-400">Active</p>
                </div>
                <div class="p-6 bg-white/5 border border-white/10 rounded-[30px]">
                    <p class="text-slate-400 text-sm">Balance</p>
                    <p class="text-2xl font-bold">0.00045 BTC</p>
                </div>
                <div class="p-6 bg-white/5 border border-white/10 rounded-[30px]">
                    <p class="text-slate-400 text-sm">AI Processing</p>
                    <p class="text-2xl font-bold">Ready</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
