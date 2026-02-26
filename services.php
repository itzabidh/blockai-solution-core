<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('services.php', 'services');

$currentYear = (int) date('Y');
$pageVersion = '2.0.0';

$serviceMetrics = [
    ['label' => 'Active Enterprise Programs', 'value' => '150+', 'detail' => 'Governed AI projects in production'],
    ['label' => 'Verified Delivery Partners', 'value' => '80+', 'detail' => 'Quality-screened partner network'],
    ['label' => 'Supported Regions', 'value' => '30+', 'detail' => 'Cross-border deployment coverage'],
    ['label' => 'Average Time to Value', 'value' => '12 Weeks', 'detail' => 'From assessment to controlled rollout'],
];

$serviceLines = [
    [
        'name' => 'AI Strategy and Transformation',
        'description' => 'Translate board-level objectives into a measurable AI roadmap with clear ownership, operating controls, and implementation milestones.',
        'icon' => 'fa-sitemap',
        'vendorCount' => '95+',
        'focus' => 'Roadmap design, portfolio prioritization, stakeholder governance',
        'category' => 'Strategy',
    ],
    [
        'name' => 'Machine Learning Engineering',
        'description' => 'Design, deploy, and optimize ML pipelines for forecasting, recommendation, risk scoring, and process automation at enterprise scale.',
        'icon' => 'fa-brain',
        'vendorCount' => '120+',
        'focus' => 'Model lifecycle, MLOps controls, reliability and observability',
        'category' => 'Engineering',
    ],
    [
        'name' => 'Conversational and Agent AI',
        'description' => 'Build customer and employee assistants with secure context controls, response policies, and integration into core business systems.',
        'icon' => 'fa-comments',
        'vendorCount' => '70+',
        'focus' => 'Omnichannel assistants, intent orchestration, escalation design',
        'category' => 'Experience',
    ],
    [
        'name' => 'Data Intelligence and Analytics',
        'description' => 'Transform fragmented data estates into decision-ready analytics with semantic alignment, quality controls, and reporting governance.',
        'icon' => 'fa-magnifying-glass-chart',
        'vendorCount' => '105+',
        'focus' => 'Data products, BI modernization, executive insights',
        'category' => 'Analytics',
    ],
    [
        'name' => 'AI Risk, Security, and Compliance',
        'description' => 'Embed legal, ethical, and technical safeguards across AI workflows to meet sector-specific controls and international regulations.',
        'icon' => 'fa-shield-halved',
        'vendorCount' => '60+',
        'focus' => 'Policy controls, audit evidence, compliance readiness',
        'category' => 'Governance',
    ],
    [
        'name' => 'Partner Enablement and Managed Delivery',
        'description' => 'Run end-to-end delivery programs with verified vendors, controlled cadences, and KPI-based performance accountability.',
        'icon' => 'fa-users-gear',
        'vendorCount' => '85+',
        'focus' => 'Vendor governance, PMO execution, outcome tracking',
        'category' => 'Operations',
    ],
];

$deliveryFramework = [
    [
        'step' => 'Step 1',
        'title' => 'Business Assessment',
        'description' => 'Evaluate goals, readiness, data quality, and risk obligations to define the right execution path.',
    ],
    [
        'step' => 'Step 2',
        'title' => 'Solution and Partner Match',
        'description' => 'Select delivery partners and architecture patterns aligned to operating model, region, and regulatory demands.',
    ],
    [
        'step' => 'Step 3',
        'title' => 'Controlled Implementation',
        'description' => 'Deploy with defined governance checkpoints, security controls, and transparent performance metrics.',
    ],
    [
        'step' => 'Step 4',
        'title' => 'Scale and Optimize',
        'description' => 'Expand capabilities across markets with continuous monitoring, policy updates, and value realization.',
    ],
];

$trustSignals = [
    'GDPR-aligned controls for regional deployments',
    'Policy-by-design templates for regulated sectors',
    'Verified vendor scoring and governance assurance',
    'Executive KPI reporting for every active engagement',
];

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
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <title>BlockAI Solution | Decentralized AI & Blockchain Neural Nodes</title>
    <meta name="description" content="BlockAI Solution provides high-performance decentralized AI compute and neural blockchain nodes for the future of Web3.">
    <meta name="keywords" content="BlockAI, AI nodes, Blockchain, Decentralized AI, blockaisolution.">
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
                        <i class="fa-solid fa-briefcase text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Services</p>
                    </div>
                </a>
                <div class="hidden xl:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="vendor_list.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Vendors</a>
                    <a href="case-studies.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Case Studies</a>
                    <a href="about.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">About</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Service Portfolio / Version <?= escapeHtml($pageVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Enterprise AI Services Designed for Scalable Results and Controlled Risk
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                We combine strategy, engineering, compliance, and partner execution to help organizations deliver AI outcomes with the speed of modern teams and the governance standards of global enterprises.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 max-w-6xl">
                <?php foreach ($serviceMetrics as $metric): ?>
                    <div class="panel rounded-xl p-4">
                        <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1"><?= escapeHtml($metric['label']) ?></p>
                        <p class="text-2xl font-bold text-white mb-1"><?= escapeHtml($metric['value']) ?></p>
                        <p class="text-xs text-slate-300"><?= escapeHtml($metric['detail']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14 space-y-10">
        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Core capabilities</p>
                    <h2 class="heading-font text-3xl font-bold text-white">Service lines for every stage of AI transformation</h2>
                </div>
                <a href="vendor_list.php" class="text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">Browse vendor-aligned services</a>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                <?php foreach ($serviceLines as $line): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5 hover:border-cyan-300/30 transition">
                        <div class="w-11 h-11 rounded-xl bg-cyan-400/10 border border-cyan-300/20 text-cyan-300 flex items-center justify-center mb-4">
                            <i class="fa-solid <?= escapeHtml($line['icon']) ?>"></i>
                        </div>
                        <p class="text-[10px] uppercase tracking-[0.18em] text-slate-400 mb-2"><?= escapeHtml($line['category']) ?></p>
                        <h3 class="text-xl font-bold text-white mb-3"><?= escapeHtml($line['name']) ?></h3>
                        <p class="text-sm text-slate-300 leading-relaxed mb-4"><?= escapeHtml($line['description']) ?></p>
                        <p class="text-xs text-slate-400 mb-4"><span class="text-slate-300 font-semibold">Focus:</span> <?= escapeHtml($line['focus']) ?></p>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between gap-3">
                            <span class="text-[10px] uppercase tracking-[0.18em] text-slate-400"><?= escapeHtml($line['vendorCount']) ?> Verified Vendors</span>
                            <a href="vendor_list.php?category=<?= rawurlencode($line['category']) ?>" class="text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                                Explore <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="grid lg:grid-cols-5 gap-6">
            <article class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Delivery model</p>
                <h2 class="heading-font text-3xl font-bold text-white mb-5">How we execute from strategy to scale</h2>
                <div class="space-y-4">
                    <?php foreach ($deliveryFramework as $phase): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-1"><?= escapeHtml($phase['step']) ?></p>
                            <h3 class="text-white font-semibold mb-1"><?= escapeHtml($phase['title']) ?></h3>
                            <p class="text-sm text-slate-300"><?= escapeHtml($phase['description']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
            <aside class="lg:col-span-2 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Trust and governance</p>
                <h2 class="heading-font text-2xl font-bold text-white mb-4">Why enterprises choose our model</h2>
                <ul class="space-y-3 text-sm text-slate-300 mb-6">
                    <?php foreach ($trustSignals as $signal): ?>
                        <li class="flex gap-3">
                            <i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i>
                            <span><?= escapeHtml($signal) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="rounded-xl border border-white/10 bg-black/20 p-4">
                    <p class="text-[10px] uppercase tracking-[0.18em] text-slate-400 mb-2">Need a tailored service mix?</p>
                    <p class="text-sm text-slate-300 leading-relaxed mb-4">Share your industry, target regions, and current maturity level. We will map the recommended service stack and partner profile.</p>
                    <a href="contact.php" class="inline-flex items-center text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                        Talk to solution team <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </aside>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Next step</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Ready to design your enterprise AI program?</h2>
                    <p class="text-slate-300 max-w-3xl">Engage our team to align services with your strategic priorities, compliance requirements, and delivery constraints. We support both pilot initiatives and multi-region transformation programs.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="contact.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_26px_rgba(34,211,238,0.35)] transition">Request Consultation</a>
                    <a href="registration.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Become a Partner</a>
                    <a href="case-studies.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">View Outcomes</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="vendor_list.php" class="hover:text-white transition">Vendor Directory</a>
                <a href="case-studies.php" class="hover:text-white transition">Case Studies</a>
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
