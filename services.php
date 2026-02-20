<?php
// Database connection include (Required for Azure SQL connection)
// include 'db_connect.php';

// Dynamic Services Data - This will be fetched from SQL Database in the future
$services = [
    [
        "title" => "ML Models",
        "desc" => "Custom training and deployment of machine learning models for predictive analysis.",
        "icon" => "fa-brain",
        "bg" => "indigo",
        "count" => "320+"
    ],
    [
        "title" => "Conversational AI",
        "desc" => "Enterprise-grade chatbots and virtual assistants for customer engagement.",
        "icon" => "fa-comments",
        "bg" => "emerald",
        "count" => "150+"
    ],
    [
        "title" => "AI Compliance",
        "desc" => "Regulatory audits and ethical AI frameworks for international operations.",
        "icon" => "fa-shield-virus",
        "bg" => "amber",
        "count" => "85+"
    ],
    [
        "title" => "Data Insights",
        "desc" => "Transforming raw data into strategic business intelligence using AI.",
        "icon" => "fa-magnifying-glass-chart",
        "bg" => "rose",
        "count" => "210+"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Services | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="index.php" class="text-2xl font-black text-indigo-600">BlockAI <span class="text-slate-400 font-light">Solution</span></a>
            <div class="flex items-center space-x-6">
                <a href="index.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Home</a>
                <a href="registration.php" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md">Apply as Vendor</a>
            </div>
        </div>
    </nav>

    <section class="bg-indigo-900 py-16 px-4 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Find the Right AI Partner</h1>
        <p class="text-indigo-200 mb-8">Search through our vetted directory of global AI solution providers.</p>
        <div class="max-w-2xl mx-auto flex bg-white rounded-2xl overflow-hidden shadow-2xl">
            <input type="text" placeholder="Search by industry (e.g. Finance, Healthcare)..." class="w-full p-4 text-slate-900 outline-none">
            <button class="bg-indigo-600 px-8 py-4 font-bold hover:bg-indigo-700 transition">Search</button>
        </div>
    </section>

    <main class="max-w-7xl mx-auto py-16 px-4">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
            <h2 class="text-2xl font-bold">Explore AI Categories</h2>
            <div class="flex gap-2">
                <span class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold border border-indigo-200 cursor-pointer">All</span>
                <span class="px-4 py-2 bg-white text-slate-500 rounded-full text-xs font-bold border border-slate-200 hover:border-indigo-600 cursor-pointer transition">GDPR Compliant</span>
                <span class="px-4 py-2 bg-white text-slate-500 rounded-full text-xs font-bold border border-slate-200 hover:border-indigo-600 cursor-pointer transition">ISO Certified</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($services as $item): ?>
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-indigo-600 transition shadow-sm hover:shadow-xl group">
                <div class="w-14 h-14 bg-<?php echo $item['bg']; ?>-50 text-<?php echo $item['bg']; ?>-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-<?php echo $item['bg']; ?>-600 group-hover:text-white transition duration-500">
                    <i class="fa-solid <?php echo $item['icon']; ?> text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3"><?php echo $item['title']; ?></h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed"><?php echo $item['desc']; ?></p>
                <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 uppercase"><?php echo $item['count']; ?> VENDORS</span>
                    <a href="vendor_list.php?category=<?php echo urlencode($item['title']); ?>" class="text-indigo-600 font-bold text-sm hover:underline text-right">View List &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-20 p-8 bg-slate-900 rounded-3xl text-center">
            <h4 class="text-white font-bold text-xl mb-4">The Strategic Advantage</h4>
            <p class="text-slate-400 text-sm max-w-3xl mx-auto leading-relaxed">
                By categorizing AI solutions into specialized hubs, we reduce the "Global Complexity Gap" for SMEs. Each category is managed by a subject matter expert to ensure that the vendors provided are not only technically sound but also legally compliant with local market laws.
            </p>
        </div>
    </main>

    <footer class="py-10 text-center text-slate-400 text-xs border-t border-slate-100 uppercase tracking-widest bg-white">
        &copy; <?php echo date("Y"); ?> BlockAI Solution | Global Operations Center
    </footer>

</body>
</html>
