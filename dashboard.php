<?php
// Start session to manage vendor login
session_start();

// Include database connection
include 'db_connect.php';

// Temporary variables - later these will come from your Azure SQL Database
$vendor_name = "AI Vendor";
$total_impressions = "12.4K";
$verified_leads = 84;
$compliance_score = "98%";

// Example array for inquiries - in future, this will be a SQL SELECT query
$inquiries = [
    ["org" => "Global Logistics Inc.", "region" => "UK/EU", "budget" => "£50k - £120k", "status" => "Interview Scheduled", "color" => "amber"],
    ["org" => "MedTech Solutions", "region" => "USA", "budget" => "£200k+", "status" => "Audited & Verified", "color" => "green"],
    ["org" => "FinCore Banking", "region" => "UAE", "budget" => "£80k - £150k", "status" => "New Inquiry", "color" => "indigo"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-100 font-sans text-slate-900">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-white hidden md:flex flex-col p-6">
            <div class="mb-10 text-center">
                <span class="text-xl font-black text-indigo-400">BlockAI</span>
                <span class="text-xs block text-slate-500 tracking-widest uppercase mt-1">Vendor Panel</span>
            </div>
            <nav class="space-y-4 flex-1">
                <a href="vendor_dashboard.php" class="flex items-center space-x-3 p-3 bg-indigo-600 rounded-xl font-bold">
                    <i class="fa-solid fa-chart-pie"></i> <span>Overview</span>
                </a>
                <a href="leads.php" class="flex items-center space-x-3 p-3 text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-users"></i> <span>Leads</span>
                </a>
                <a href="solutions.php" class="flex items-center space-x-3 p-3 text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-box"></i> <span>My Solutions</span>
                </a>
                <a href="compliance.php" class="flex items-center space-x-3 p-3 text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-file-invoice"></i> <span>Compliance</span>
                </a>
            </nav>
            <div class="pt-6 border-t border-slate-800">
                <a href="logout.php" class="flex items-center space-x-3 p-3 text-red-400 hover:text-red-300">
                    <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
                </a>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-4 md:p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">Welcome back, <span class="text-indigo-600"><?php echo $vendor_name; ?></span></h1>
                <div class="flex items-center space-x-4">
                    <button class="bg-white p-2 rounded-lg shadow-sm"><i class="fa-solid fa-bell text-slate-400"></i></button>
                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center font-bold text-indigo-600 border border-indigo-200">
                        <?php echo substr($vendor_name, 0, 2); ?>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                    <p class="text-slate-500 text-xs font-bold uppercase mb-2">Total Impressions</p>
                    <h2 class="text-3xl font-black"><?php echo $total_impressions; ?></h2>
                    <span class="text-green-500 text-xs font-bold mt-2 inline-block">+14% vs last month</span>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                    <p class="text-slate-500 text-xs font-bold uppercase mb-2">Verified Leads</p>
                    <h2 class="text-3xl font-black"><?php echo $verified_leads; ?></h2>
                    <span class="text-indigo-500 text-xs font-bold mt-2 inline-block">12 Active Tenders</span>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                    <p class="text-slate-500 text-xs font-bold uppercase mb-2">Compliance Score</p>
                    <h2 class="text-3xl font-black text-emerald-600"><?php echo $compliance_score; ?></h2>
                    <span class="text-slate-400 text-xs font-bold mt-2 inline-block">ISO/GDPR Compliant</span>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="font-bold">Recent Inquiries</h3>
                    <button class="text-xs font-bold text-indigo-600 hover:underline">Download PDF Report</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 border-b border-slate-100">
                            <tr>
                                <th class="p-4 text-xs font-bold text-slate-400 uppercase">Organization</th>
                                <th class="p-4 text-xs font-bold text-slate-400 uppercase">Region</th>
                                <th class="p-4 text-xs font-bold text-slate-400 uppercase">Budget Range</th>
                                <th class="p-4 text-xs font-bold text-slate-400 uppercase">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm font-medium">
                            <?php foreach ($inquiries as $row): ?>
                            <tr>
                                <td class="p-4"><?php echo $row['org']; ?></td>
                                <td class="p-4"><?php echo $row['region']; ?></td>
                                <td class="p-4"><?php echo $row['budget']; ?></td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-<?php echo $row['color']; ?>-100 text-<?php echo $row['color']; ?>-700 rounded-full text-[10px] font-bold">
                                        <?php echo $row['status']; ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
