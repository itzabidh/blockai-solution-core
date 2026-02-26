<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('about.php', 'about');

$currentYear = (int) date('Y');
$pageVersion = '3.0.0';

$strategicPillars = [
    [
        'icon' => 'fa-scale-balanced',
        'title' => 'Compliance by Design',
        'description' => 'Every deployment is mapped to regional legal frameworks and enterprise governance controls from day one.',
    ],
    [
        'icon' => 'fa-microchip',
        'title' => 'Performance and Reliability',
        'description' => 'We architect multi-region AI infrastructure that is benchmarked for predictable latency and uptime.',
    ],
    [
        'icon' => 'fa-shield-halved',
        'title' => 'Trust and Security',
        'description' => 'Cryptographic safeguards, controlled access patterns, and audit-ready operations reduce systemic risk.',
    ],
    [
        'icon' => 'fa-users-gear',
        'title' => 'Partner Quality Framework',
        'description' => 'Vendor onboarding includes capability validation, delivery scoring, and governance adherence checks.',
    ],
];

$operatingModel = [
    [
        'title' => 'Assess',
        'description' => 'Baseline business goals, technical constraints, data posture, and risk obligations.',
    ],
    [
        'title' => 'Design',
        'description' => 'Build solution architecture with policy boundaries, regional routing, and execution accountability.',
    ],
    [
        'title' => 'Deploy',
        'description' => 'Launch pilot and production workloads with observability, cost controls, and delivery KPIs.',
    ],
    [
        'title' => 'Scale',
        'description' => 'Expand into new markets with repeatable governance templates and partner enablement.',
    ],
];

$leadershipTeam = [
    [
        'name' => 'Abid Hasan',
        'role' => 'Global Infrastructure and Strategy Lead',
        'bio' => 'Leads market expansion strategy and cross-region infrastructure governance for enterprise rollout programs.',
        'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=640&q=80',
    ],
    [
        'name' => 'Maya Carter',
        'role' => 'Head of Enterprise Programs',
        'bio' => 'Oversees customer implementation journeys, operating cadence, and stakeholder alignment across functions.',
        'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=640&q=80',
    ],
    [
        'name' => 'Rafiq Rahman',
        'role' => 'Director of Compliance Engineering',
        'bio' => 'Defines legal and technical controls for AI workloads in regulated sectors and multinational operations.',
        'image' => 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?auto=format&fit=crop&w=640&q=80',
    ],
];

$globalHubs = [
    ['region' => 'London', 'focus' => 'Strategy and partner governance'],
    ['region' => 'Amsterdam', 'focus' => 'Compliance and data residency operations'],
    ['region' => 'Dubai', 'focus' => 'Regional enterprise delivery programs'],
    ['region' => 'Singapore', 'focus' => 'Infrastructure performance and AI operations'],
];

$milestones = [
    ['period' => '2024', 'event' => 'Platform strategy foundation and governance framework established.'],
    ['period' => '2025', 'event' => 'Enterprise partner verification model launched across initial markets.'],
    ['period' => '2026', 'event' => 'Global operating model expanded with multi-region delivery capabilities.'],
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
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>About and Strategy | BlockAI Solution</title>
    <meta name="description" content="Learn about BlockAI Solution strategy, leadership, operating model, governance approach, and global enterprise infrastructure roadmap.">
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
                        <i class="fa-solid fa-building text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Corporate Strategy</p>
                    </div>
                </a>
                <div class="hidden xl:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="services.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Services</a>
                    <a href="vendor_list.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Vendors</a>
                    <a href="case-studies.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Case Studies</a>
                    <a href="whitepaper.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Whitepaper</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">About BlockAI / Version <?= escapeHtml($pageVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Building Enterprise-Ready AI Infrastructure with Strategy, Governance, and Global Delivery
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                BlockAI Solution operates at the intersection of platform engineering and business transformation. Our mission is to help organizations deploy AI programs confidently with measurable outcomes, compliance resilience, and scalable partner ecosystems.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 max-w-5xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Verified Partners</p>
                    <p class="text-2xl font-bold text-white">80+</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Regional Hubs</p>
                    <p class="text-2xl font-bold text-white">12+</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Enterprise Programs</p>
                    <p class="text-2xl font-bold text-white">150+</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Global Markets</p>
                    <p class="text-2xl font-bold text-white">30+</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14 space-y-10">
        <section class="grid lg:grid-cols-5 gap-6">
            <article class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Why we exist</p>
                <h2 class="heading-font text-3xl font-bold text-white mb-4">Closing the enterprise AI execution gap</h2>
                <p class="text-slate-300 leading-relaxed mb-4">
                    Enterprises often struggle to move from AI pilots to global operations because of fragmented vendor ecosystems, inconsistent governance controls, and cross-border compliance complexity. We address this by combining vetted delivery partners, standardized operating frameworks, and auditable execution governance.
                </p>
                <p class="text-slate-300 leading-relaxed">
                    Our approach integrates technical architecture, legal readiness, and business accountability so decision-makers can scale with confidence and clear performance metrics.
                </p>
            </article>
            <aside class="lg:col-span-2 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Operating principles</p>
                <ul class="space-y-3 text-sm text-slate-300">
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Enterprise value before technical novelty.</span></li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Security and compliance integrated by default.</span></li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Global scalability through repeatable systems.</span></li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Transparent outcomes and measurable accountability.</span></li>
                </ul>
            </aside>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Strategic pillars</p>
            <h2 class="heading-font text-3xl font-bold text-white mb-6">How we deliver business-standard outcomes</h2>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4">
                <?php foreach ($strategicPillars as $pillar): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5">
                        <div class="w-11 h-11 rounded-xl bg-cyan-400/10 border border-cyan-300/20 text-cyan-300 flex items-center justify-center mb-4">
                            <i class="fa-solid <?= escapeHtml($pillar['icon']) ?>"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2"><?= escapeHtml($pillar['title']) ?></h3>
                        <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($pillar['description']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Execution framework</p>
            <h2 class="heading-font text-3xl font-bold text-white mb-6">Our operating model from strategy to scale</h2>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4">
                <?php foreach ($operatingModel as $phase): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5">
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2"><?= escapeHtml($phase['title']) ?></p>
                        <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($phase['description']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Leadership and accountability</p>
            <h2 class="heading-font text-3xl font-bold text-white mb-6">Cross-functional leadership team</h2>
            <div class="grid md:grid-cols-3 gap-5">
                <?php foreach ($leadershipTeam as $leader): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 overflow-hidden">
                        <img src="<?= escapeHtml($leader['image']) ?>" alt="<?= escapeHtml($leader['name']) ?>" class="w-full h-52 object-cover">
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-white"><?= escapeHtml($leader['name']) ?></h3>
                            <p class="text-cyan-300 text-sm font-medium mt-1 mb-3"><?= escapeHtml($leader['role']) ?></p>
                            <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($leader['bio']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="grid lg:grid-cols-5 gap-6">
            <article class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Global footprint</p>
                <h2 class="heading-font text-3xl font-bold text-white mb-5">Regional hubs supporting enterprise delivery</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    <?php foreach ($globalHubs as $hub): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-white font-semibold"><?= escapeHtml($hub['region']) ?></p>
                            <p class="text-sm text-slate-300 mt-1"><?= escapeHtml($hub['focus']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
            <aside class="lg:col-span-2 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Milestones</p>
                <div class="space-y-4">
                    <?php foreach ($milestones as $milestone): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-cyan-300 text-sm font-semibold"><?= escapeHtml($milestone['period']) ?></p>
                            <p class="text-sm text-slate-300 mt-1"><?= escapeHtml($milestone['event']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </aside>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Next step</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Partner with BlockAI on your next enterprise AI program</h2>
                    <p class="text-slate-300 max-w-3xl">Discuss deployment strategy, vendor frameworks, governance controls, and regional rollout plans with our business and architecture team.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="contact.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_26px_rgba(34,211,238,0.35)] transition">Contact Team</a>
                    <a href="whitepaper.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Read Whitepaper</a>
                    <a href="registration.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Become Partner</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="services.php" class="hover:text-white transition">Services</a>
                <a href="vendor_list.php" class="hover:text-white transition">Vendor Directory</a>
                <a href="case-studies.php" class="hover:text-white transition">Case Studies</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
