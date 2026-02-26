<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('strategy-healthcare.php', 'strategy-healthcare');
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

    <header class="bg-gradient-to-r from-emerald-900 to-slate-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <p class="text-xs uppercase tracking-[0.2em] text-emerald-200 font-bold mb-3">Case Study / Healthcare Compliance</p>
            <h1 class="text-4xl md:text-5xl font-black mb-4">Scaling Health AI Across the EU with Compliance by Design</h1>
            <p class="text-slate-200 max-w-3xl">How a health-tech company expanded into five European markets by combining compliance-first architecture with vetted implementation partners.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto py-14 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Regulatory Readiness</p>
                <p class="text-4xl font-black text-emerald-600">100%</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Markets Entered</p>
                <p class="text-4xl font-black text-emerald-600">5</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Project Duration</p>
                <p class="text-4xl font-black text-emerald-600">4 Months</p>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-8 md:p-12 shadow-sm">
            <h2 class="text-2xl font-black mb-4">Business challenge</h2>
            <p class="text-slate-600 leading-relaxed mb-7">The client needed to launch a diagnostics assistant across multiple EU regions while meeting GDPR and emerging AI Act requirements. Internal teams lacked localized compliance expertise and deployment governance tooling.</p>

            <h2 class="text-2xl font-black mb-4">Solution architecture</h2>
            <ul class="space-y-3 text-slate-600 leading-relaxed mb-7">
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i><span>Engaged BlockAI compliance specialists to build a policy and evidence framework.</span></li>
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i><span>Mapped data lineage, access boundaries, and model governance checkpoints by market.</span></li>
                <li class="flex gap-3"><i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i><span>Rolled out vendor implementation playbooks with clear legal and technical controls.</span></li>
            </ul>

            <h2 class="text-2xl font-black mb-4">Outcome</h2>
            <p class="text-slate-600 leading-relaxed mb-8">The team launched safely in five regions with complete compliance documentation and repeatable controls for future deployments. The process reduced legal uncertainty and accelerated executive sign-off cycles.</p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="case-studies.php" class="inline-flex items-center px-6 py-3 rounded-xl border border-slate-300 text-sm font-bold hover:border-emerald-600 hover:text-emerald-600 transition">Back to case studies</a>
                <a href="contact.php" class="inline-flex items-center px-6 py-3 rounded-xl bg-emerald-600 text-white text-sm font-bold hover:bg-emerald-700 transition">Request compliance workshop</a>
            </div>
        </div>
    </main>
</body>
</html>
