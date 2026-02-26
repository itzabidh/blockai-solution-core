<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('vendor_list.php', 'vendor-list');

$vendors = [
    [
        'name' => 'Northscale ML Labs',
        'category' => 'Engineering',
        'region' => 'Europe',
        'certification' => 'ISO 27001',
        'delivery' => 'Managed delivery',
        'readiness' => '94%',
        'focus' => 'Forecasting and predictive maintenance pipelines for industrial operations.',
        'specialties' => ['Industrial forecasting', 'MLOps hardening', 'Model drift controls'],
    ],
    [
        'name' => 'DialogCore Systems',
        'category' => 'Experience',
        'region' => 'North America',
        'certification' => 'SOC 2 Type II',
        'delivery' => 'Project-based',
        'readiness' => '91%',
        'focus' => 'Multilingual assistants and service automation for enterprise support teams.',
        'specialties' => ['Conversational orchestration', 'Agent routing', 'Customer operations AI'],
    ],
    [
        'name' => 'ComplyMind Advisory',
        'category' => 'Governance',
        'region' => 'Europe',
        'certification' => 'GDPR Assured',
        'delivery' => 'Advisory + implementation',
        'readiness' => '96%',
        'focus' => 'AI risk management, audit readiness, and governance implementation.',
        'specialties' => ['Policy controls', 'Audit evidence design', 'Regulatory readiness'],
    ],
    [
        'name' => 'VectorVista Analytics',
        'category' => 'Analytics',
        'region' => 'Asia Pacific',
        'certification' => 'ISO 9001',
        'delivery' => 'Managed analytics',
        'readiness' => '89%',
        'focus' => 'Executive analytics, BI automation, and high-volume data modeling.',
        'specialties' => ['BI modernization', 'Data product design', 'Executive dashboards'],
    ],
    [
        'name' => 'Gridline Intelligence',
        'category' => 'Engineering',
        'region' => 'Middle East and Africa',
        'certification' => 'Enterprise Verified',
        'delivery' => 'Implementation partner',
        'readiness' => '92%',
        'focus' => 'Computer vision deployment and anomaly detection for critical infrastructure.',
        'specialties' => ['Computer vision', 'Edge deployment', 'Anomaly detection'],
    ],
    [
        'name' => 'Atlas Strategy Partners',
        'category' => 'Strategy',
        'region' => 'Europe',
        'certification' => 'Enterprise Verified',
        'delivery' => 'Advisory',
        'readiness' => '90%',
        'focus' => 'AI operating model design, transformation governance, and value realization planning.',
        'specialties' => ['Transformation roadmap', 'Executive alignment', 'Program governance'],
    ],
    [
        'name' => 'OpsBridge Collective',
        'category' => 'Operations',
        'region' => 'North America',
        'certification' => 'SOC 2 Type II',
        'delivery' => 'PMO-managed execution',
        'readiness' => '93%',
        'focus' => 'Cross-functional delivery management and vendor coordination for enterprise AI rollout programs.',
        'specialties' => ['PMO execution', 'Vendor governance', 'Delivery assurance'],
    ],
    [
        'name' => 'Sentinel Policy Works',
        'category' => 'Governance',
        'region' => 'Asia Pacific',
        'certification' => 'ISO 27001',
        'delivery' => 'Policy and controls program',
        'readiness' => '95%',
        'focus' => 'Risk frameworks and compliance controls for AI deployments in regulated industries.',
        'specialties' => ['Risk taxonomy', 'Control framework', 'Regulatory mapping'],
    ],
];

$categories = ['All', 'Strategy', 'Engineering', 'Experience', 'Analytics', 'Governance', 'Operations'];
$legacyCategoryMap = [
    'ML Models' => 'Engineering',
    'Conversational AI' => 'Experience',
    'AI Compliance' => 'Governance',
    'Data Insights' => 'Analytics',
];

$regions = array_values(array_unique(array_map(
    static fn(array $vendor): string => $vendor['region'],
    $vendors
)));
sort($regions);
array_unshift($regions, 'All');

$incomingCategory = trim((string) ($_GET['category'] ?? 'All'));
if (isset($legacyCategoryMap[$incomingCategory])) {
    $incomingCategory = $legacyCategoryMap[$incomingCategory];
}
$selectedCategory = in_array($incomingCategory, $categories, true) ? $incomingCategory : 'All';

$incomingRegion = trim((string) ($_GET['region'] ?? 'All'));
$selectedRegion = in_array($incomingRegion, $regions, true) ? $incomingRegion : 'All';

$searchQuery = trim((string) ($_GET['q'] ?? ''));
$searchNeedle = strtolower($searchQuery);

$categoryStyles = [
    'Strategy' => ['badge' => 'bg-violet-400/15 text-violet-200 border-violet-300/30', 'icon' => 'fa-sitemap'],
    'Engineering' => ['badge' => 'bg-cyan-400/15 text-cyan-200 border-cyan-300/30', 'icon' => 'fa-brain'],
    'Experience' => ['badge' => 'bg-blue-400/15 text-blue-200 border-blue-300/30', 'icon' => 'fa-comments'],
    'Analytics' => ['badge' => 'bg-emerald-400/15 text-emerald-200 border-emerald-300/30', 'icon' => 'fa-magnifying-glass-chart'],
    'Governance' => ['badge' => 'bg-amber-400/15 text-amber-200 border-amber-300/30', 'icon' => 'fa-shield-halved'],
    'Operations' => ['badge' => 'bg-rose-400/15 text-rose-200 border-rose-300/30', 'icon' => 'fa-users-gear'],
];

$filteredVendors = array_values(array_filter(
    $vendors,
    static function (array $vendor) use ($selectedCategory, $selectedRegion, $searchNeedle): bool {
        if ($selectedCategory !== 'All' && $vendor['category'] !== $selectedCategory) {
            return false;
        }

        if ($selectedRegion !== 'All' && $vendor['region'] !== $selectedRegion) {
            return false;
        }

        if ($searchNeedle !== '') {
            $haystack = strtolower(
                $vendor['name'] . ' ' .
                $vendor['category'] . ' ' .
                $vendor['region'] . ' ' .
                $vendor['certification'] . ' ' .
                $vendor['focus'] . ' ' .
                implode(' ', $vendor['specialties'])
            );

            return strpos($haystack, $searchNeedle) !== false;
        }

        return true;
    }
));

$totalVendors = count($vendors);
$totalCategories = count($categories) - 1;
$totalRegions = count($regions) - 1;
$totalFiltered = count($filteredVendors);
$totalCertifications = count(array_unique(array_map(
    static fn(array $vendor): string => $vendor['certification'],
    $vendors
)));

function escapeHtml(string|int|float $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <title>Vendor Directory | BlockAI Solution</title>
    <meta name="description" content="Browse verified enterprise AI vendors by category, region, and specialization in the BlockAI partner network.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #060713;
            --line-soft: rgba(255, 255, 255, 0.09);
            --panel-bg: rgba(255, 255, 255, 0.04);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #e6edf3;
            background-color: var(--bg-main);
            background-image:
                radial-gradient(circle at 10% 10%, rgba(34, 211, 238, 0.12), transparent 35%),
                radial-gradient(circle at 85% 0%, rgba(139, 92, 246, 0.14), transparent 40%);
        }

        .heading-font {
            font-family: 'Space Grotesk', sans-serif;
        }

        .panel {
            background: var(--panel-bg);
            border: 1px solid var(--line-soft);
            backdrop-filter: blur(14px);
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">
    <nav class="fixed inset-x-0 top-0 z-[60] py-4">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <div class="panel rounded-2xl h-16 px-5 lg:px-7 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-network-wired text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Vendor Directory</p>
                    </div>
                </a>
                <div class="hidden xl:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="services.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Services</a>
                    <a href="case-studies.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Case Studies</a>
                    <a href="registration.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Partner Registration</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Partner Network / Verified Directory</p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Find Trusted AI Delivery Partners for Enterprise-Grade Outcomes
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                Discover quality-screened partners across strategy, engineering, governance, analytics, and managed operations. Every listing is reviewed for capability, delivery maturity, and control alignment.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 mt-8 max-w-6xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Total Vendors</p>
                    <p class="text-2xl font-bold text-white"><?= escapeHtml($totalVendors) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Specializations</p>
                    <p class="text-2xl font-bold text-white"><?= escapeHtml($totalCategories) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Regions Covered</p>
                    <p class="text-2xl font-bold text-white"><?= escapeHtml($totalRegions) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Certifications</p>
                    <p class="text-2xl font-bold text-white"><?= escapeHtml($totalCertifications) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Filtered Results</p>
                    <p class="text-2xl font-bold text-cyan-300"><?= escapeHtml($totalFiltered) ?></p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14 space-y-8">
        <section class="panel rounded-2xl p-6">
            <form method="get" action="vendor_list.php" class="grid lg:grid-cols-12 gap-4 items-end">
                <div class="lg:col-span-4">
                    <label for="q" class="block text-[11px] uppercase tracking-[0.16em] text-slate-400 font-semibold mb-2">Search</label>
                    <input id="q" name="q" type="text" value="<?= escapeHtml($searchQuery) ?>" placeholder="Vendor name, certification, or capability" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-cyan-400/50">
                </div>
                <div class="lg:col-span-3">
                    <label for="category" class="block text-[11px] uppercase tracking-[0.16em] text-slate-400 font-semibold mb-2">Category</label>
                    <select id="category" name="category" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white focus:outline-none focus:ring-2 focus:ring-cyan-400/50">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= escapeHtml($category) ?>" <?= $selectedCategory === $category ? 'selected' : '' ?>>
                                <?= escapeHtml($category) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="lg:col-span-3">
                    <label for="region" class="block text-[11px] uppercase tracking-[0.16em] text-slate-400 font-semibold mb-2">Region</label>
                    <select id="region" name="region" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white focus:outline-none focus:ring-2 focus:ring-cyan-400/50">
                        <?php foreach ($regions as $region): ?>
                            <option value="<?= escapeHtml($region) ?>" <?= $selectedRegion === $region ? 'selected' : '' ?>>
                                <?= escapeHtml($region) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="lg:col-span-2 flex gap-2">
                    <button type="submit" class="flex-1 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 px-4 py-3 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_24px_rgba(34,211,238,0.35)] transition">Apply</button>
                    <a href="vendor_list.php" class="rounded-xl border border-white/20 px-4 py-3 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Reset</a>
                </div>
            </form>

            <div class="mt-5 flex flex-wrap gap-2">
                <?php foreach ($categories as $category): ?>
                    <a
                        href="vendor_list.php?category=<?= rawurlencode($category) ?>&region=<?= rawurlencode($selectedRegion) ?>&q=<?= rawurlencode($searchQuery) ?>"
                        class="<?= $selectedCategory === $category ? 'bg-cyan-500/20 border-cyan-300/40 text-cyan-200' : 'bg-white/5 border-white/15 text-slate-300 hover:border-white/30 hover:text-white' ?> px-3 py-1.5 rounded-full border text-[10px] uppercase tracking-[0.16em] font-semibold transition"
                    >
                        <?= escapeHtml($category) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <?php if ($totalFiltered > 0): ?>
            <section class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                <?php foreach ($filteredVendors as $vendor): ?>
                    <?php
                    $style = $categoryStyles[$vendor['category']] ?? ['badge' => 'bg-white/10 text-slate-200 border-white/20', 'icon' => 'fa-circle-nodes'];
                    $contactLink = 'contact.php?topic=vendor-intro&partner=' . rawurlencode($vendor['name']);
                    ?>
                    <article class="panel rounded-2xl p-5 hover:border-cyan-300/30 transition">
                        <div class="flex items-start justify-between gap-3 mb-4">
                            <div>
                                <h2 class="heading-font text-2xl font-bold text-white leading-tight mb-2"><?= escapeHtml($vendor['name']) ?></h2>
                                <p class="text-[11px] uppercase tracking-[0.14em] text-slate-400"><?= escapeHtml($vendor['delivery']) ?></p>
                            </div>
                            <span class="px-3 py-1 rounded-full border text-[10px] uppercase tracking-[0.16em] font-semibold <?= escapeHtml($style['badge']) ?>">
                                <i class="fa-solid <?= escapeHtml($style['icon']) ?> mr-1"></i><?= escapeHtml($vendor['category']) ?>
                            </span>
                        </div>

                        <p class="text-sm text-slate-300 leading-relaxed mb-4"><?= escapeHtml($vendor['focus']) ?></p>

                        <div class="grid grid-cols-2 gap-2 mb-4">
                            <div class="rounded-lg border border-white/10 bg-white/5 p-3">
                                <p class="text-[10px] uppercase tracking-[0.14em] text-slate-400 mb-1">Region</p>
                                <p class="text-sm text-white font-semibold"><?= escapeHtml($vendor['region']) ?></p>
                            </div>
                            <div class="rounded-lg border border-white/10 bg-white/5 p-3">
                                <p class="text-[10px] uppercase tracking-[0.14em] text-slate-400 mb-1">Readiness</p>
                                <p class="text-sm text-cyan-300 font-semibold"><?= escapeHtml($vendor['readiness']) ?></p>
                            </div>
                        </div>

                        <div class="rounded-lg border border-white/10 bg-white/5 p-3 mb-4">
                            <p class="text-[10px] uppercase tracking-[0.14em] text-slate-400 mb-1">Certification</p>
                            <p class="text-sm text-white font-semibold"><?= escapeHtml($vendor['certification']) ?></p>
                        </div>

                        <div class="mb-5">
                            <p class="text-[10px] uppercase tracking-[0.14em] text-slate-400 mb-2">Specialties</p>
                            <ul class="space-y-1.5 text-sm text-slate-300">
                                <?php foreach ($vendor['specialties'] as $specialty): ?>
                                    <li class="flex gap-2">
                                        <i class="fa-solid fa-check text-cyan-300 mt-1 text-xs"></i>
                                        <span><?= escapeHtml($specialty) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <a href="<?= escapeHtml($contactLink) ?>" class="inline-flex items-center text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                            Request introduction <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <section class="panel rounded-2xl p-8 text-center">
                <h2 class="heading-font text-3xl font-bold text-white mb-3">No vendors match your current filters</h2>
                <p class="text-slate-300 max-w-2xl mx-auto mb-6">Try broadening category or region filters, or remove some keywords to see more verified partners.</p>
                <a href="vendor_list.php" class="inline-flex items-center px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white">Reset filters</a>
            </section>
        <?php endif; ?>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Partner growth</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Want to join the verified partner network?</h2>
                    <p class="text-slate-300 max-w-3xl">Submit your company profile to start our partner validation workflow. We assess delivery capability, governance maturity, and enterprise readiness before listing.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="registration.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_24px_rgba(34,211,238,0.35)] transition">Apply as Partner</a>
                    <a href="services.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">View Service Lines</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="services.php" class="hover:text-white transition">Services</a>
                <a href="case-studies.php" class="hover:text-white transition">Case Studies</a>
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
