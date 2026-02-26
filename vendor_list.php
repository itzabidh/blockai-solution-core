<?php
declare(strict_types=1);

$vendors = [
    [
        'name' => 'Northscale ML Labs',
        'category' => 'ML Models',
        'region' => 'Europe',
        'certification' => 'ISO 27001',
        'focus' => 'Forecasting and predictive maintenance pipelines for industrial operations.',
    ],
    [
        'name' => 'DialogCore Systems',
        'category' => 'Conversational AI',
        'region' => 'North America',
        'certification' => 'SOC 2 Type II',
        'focus' => 'Multilingual assistants and service automation for enterprise support teams.',
    ],
    [
        'name' => 'ComplyMind Advisory',
        'category' => 'AI Compliance',
        'region' => 'Europe',
        'certification' => 'GDPR Assured',
        'focus' => 'AI risk management, audit readiness, and governance implementation.',
    ],
    [
        'name' => 'VectorVista Analytics',
        'category' => 'Data Insights',
        'region' => 'Asia Pacific',
        'certification' => 'ISO 9001',
        'focus' => 'Executive analytics, BI automation, and high-volume data modeling.',
    ],
    [
        'name' => 'Gridline Intelligence',
        'category' => 'ML Models',
        'region' => 'Middle East and Africa',
        'certification' => 'Enterprise Verified',
        'focus' => 'Computer vision deployment and anomaly detection for critical infrastructure.',
    ],
];

$categories = ['All', 'ML Models', 'Conversational AI', 'AI Compliance', 'Data Insights'];
$selectedCategory = trim((string) ($_GET['category'] ?? 'All'));
if (!in_array($selectedCategory, $categories, true)) {
    $selectedCategory = 'All';
}

$filteredVendors = array_values(array_filter(
    $vendors,
    static fn(array $vendor): bool => $selectedCategory === 'All' || $vendor['category'] === $selectedCategory
));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Directory | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-black text-indigo-600">BlockAI <span class="text-slate-400 font-light">Solution</span></a>
            <div class="hidden md:flex items-center gap-6 text-sm font-bold">
                <a href="index.php" class="text-slate-600 hover:text-indigo-600">Home</a>
                <a href="services.php" class="text-slate-600 hover:text-indigo-600">Services</a>
                <a href="registration.php" class="text-slate-600 hover:text-indigo-600">Vendor Registration</a>
                <a href="contact.php" class="text-slate-600 hover:text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <header class="bg-gradient-to-r from-slate-900 to-indigo-900 text-white py-14 px-4">
        <div class="max-w-7xl mx-auto">
            <p class="text-xs uppercase tracking-[0.22em] text-indigo-200 mb-3 font-bold">Verified Partner Network</p>
            <h1 class="text-4xl md:text-5xl font-black mb-4">Enterprise Vendor Directory</h1>
            <p class="text-slate-200 max-w-3xl">Browse vetted AI partners by specialization and region. Every listed partner has completed the BlockAI onboarding and quality review workflow.</p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-12 px-4">
        <div class="flex flex-wrap gap-3 mb-8">
            <?php foreach ($categories as $category): ?>
                <?php $isActive = $selectedCategory === $category; ?>
                <a
                    href="vendor_list.php?category=<?= urlencode($category) ?>"
                    class="<?= $isActive ? 'bg-indigo-600 text-white border-indigo-600' : 'bg-white text-slate-600 border-slate-200 hover:border-indigo-300' ?> px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest border transition"
                >
                    <?= htmlspecialchars($category, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($filteredVendors as $vendor): ?>
                <article class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <h2 class="text-xl font-black"><?= htmlspecialchars($vendor['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h2>
                        <span class="text-[10px] uppercase tracking-widest font-bold text-indigo-600 bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full"><?= htmlspecialchars($vendor['category'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></span>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed mb-5"><?= htmlspecialchars($vendor['focus'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
                    <div class="space-y-2 text-xs text-slate-500 font-bold uppercase tracking-wider">
                        <p><i class="fa-solid fa-earth-americas text-indigo-500 mr-2"></i><?= htmlspecialchars($vendor['region'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
                        <p><i class="fa-solid fa-shield-check text-indigo-500 mr-2"></i><?= htmlspecialchars($vendor['certification'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <?php if (count($filteredVendors) === 0): ?>
            <div class="mt-10 bg-white border border-slate-200 rounded-2xl p-6 text-center">
                <p class="text-slate-600">No vendors found in this category yet. Please explore another specialization.</p>
            </div>
        <?php endif; ?>
    </main>

    <footer class="py-8 text-center text-xs uppercase tracking-widest text-slate-500 border-t border-slate-200 bg-white">
        &copy; <?= date('Y') ?> BlockAI Solution | Vendor Network
    </footer>
</body>
</html>
