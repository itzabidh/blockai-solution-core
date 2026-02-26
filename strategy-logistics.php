<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('strategy-logistics.php', 'strategy-logistics');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <title>BlockAI Solution | Decentralized AI & Blockchain Neural Nodes</title>
    <meta name="description" content="BlockAI Solution provides high-performance decentralized AI compute and neural blockchain nodes for the future of Web3.">
    <meta name="keywords" content="BlockAI, AI nodes, Blockchain, Decentralized AI, blockaisolution.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-black text-indigo-600">BlockAI <span class="text-slate-400 font-light">Solution</span></a>
            <div class="hidden md:flex items-center gap-6 text-sm font-bold">
                <a href="index.php" class="text-slate-600 hover:text-indigo-600">Home</a>
                <a href="case-studies.php" class="text-slate-600 hover:text-indigo-600">Case Studies</a>
                <a href="contact.php" class="text-slate-600 hover:text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <header class="bg-gradient-to-r from-indigo-900 to-slate-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <p class="text-xs uppercase tracking-[0.2em] text-indigo-200 font-bold mb-3">Case Study / Logistics</p>
            <h1 class="text-4xl md:text-5xl font-black mb-4">Predictive AI for Trans-Atlantic Shipping Performance</h1>
            <p class="text-slate-200 max-w-3xl">How a logistics enterprise reduced delays and operating costs by deploying a region-aware forecasting model through the BlockAI vendor network.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto py-14 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Cost Reduction</p>
                <p class="text-4xl font-black text-indigo-600">18%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Port Clearance Speed</p>
                <p class="text-4xl font-black text-indigo-600">32%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Implementation Window</p>
                <p class="text-4xl font-black text-indigo-600">9 Weeks</p>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-8 md:p-12 shadow-sm">
            <h2 class="text-2xl font-black mb-4">Business challenge</h2>
            <p class="text-slate-600 leading-relaxed mb-7">The client managed multi-region shipping lanes and faced unpredictable congestion, resulting in penalties and inefficient fleet allocation. Existing analytics were static and lacked real-time regional context.</p>

            <h2 class="text-2xl font-black mb-4">Solution architecture</h2>
            <ul class="space-y-3 text-slate-600 leading-relaxed mb-7">
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Selected an ML forecasting partner from BlockAI's vetted marketplace.</span></li>
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Integrated weather, customs, and port telemetry into a unified prediction pipeline.</span></li>
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Deployed dynamic route recommendations to dispatch teams in near real time.</span></li>
            </ul>

            <h2 class="text-2xl font-black mb-4">Outcome</h2>
            <p class="text-slate-600 leading-relaxed mb-8">Within one quarter, the client achieved measurable cost optimization and improved schedule reliability across key routes. The engagement also established a repeatable model-governance framework for future expansion.</p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="case-studies.php" class="inline-flex items-center px-6 py-3 rounded-xl border border-slate-300 text-sm font-bold hover:border-indigo-600 hover:text-indigo-600 transition">Back to case studies</a>
                <a href="contact.php" class="inline-flex items-center px-6 py-3 rounded-xl bg-indigo-600 text-white text-sm font-bold hover:bg-indigo-700 transition">Plan a similar project</a>
            </div>
        </div>
    </main>
</body>
</html>
