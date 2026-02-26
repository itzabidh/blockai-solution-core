<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('case-studies.php', 'case-studies');

$currentYear = (int) date('Y');
$pageVersion = '2.0.0';

$impactHighlights = [
    ['label' => 'Client Deployments', 'value' => '150+', 'detail' => 'Cross-region AI programs delivered'],
    ['label' => 'Average Rollout Acceleration', 'value' => '41%', 'detail' => 'From pilot to production'],
    ['label' => 'Markets Covered', 'value' => '30+', 'detail' => 'Enterprise operations footprint'],
    ['label' => 'Verified Partners', 'value' => '80+', 'detail' => 'Governance-screened ecosystem vendors'],
];

$caseStudies = [
    [
        'sector' => 'Logistics and Supply Chain',
        'title' => 'Optimizing Trans-Atlantic Shipping with Predictive Routing',
        'summary' => 'A logistics operator with multi-port operations required an AI control layer to reduce customs and berth delays. We deployed a predictive planning stack, integrated partner telemetry, and established governance dashboards for executive operations.',
        'client' => 'Regional maritime logistics group',
        'timeline' => '14 weeks',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1400&q=80',
        'results' => [
            ['value' => '18%', 'label' => 'Cost reduction'],
            ['value' => '32%', 'label' => 'Faster customs clearance'],
            ['value' => '27%', 'label' => 'Improved vessel turnaround'],
        ],
        'deliverables' => ['Forecasting model stack', 'Control-tower integration', 'Weekly governance scorecards'],
        'link' => 'strategy-logistics.php',
        'cta' => 'Read logistics strategy',
        'accent' => 'cyan',
    ],
    [
        'sector' => 'Healthcare Compliance',
        'title' => 'Scaling Healthcare AI Across EU Jurisdictions',
        'summary' => 'A health-tech platform needed to launch AI diagnostics services in Europe while meeting strict privacy and policy obligations. We aligned architecture to regional controls and delivered phased rollout governance for legal and technical stakeholders.',
        'client' => 'North American digital health provider',
        'timeline' => '4 months',
        'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1400&q=80',
        'results' => [
            ['value' => '100%', 'label' => 'Compliance readiness'],
            ['value' => '5', 'label' => 'New EU markets launched'],
            ['value' => '38%', 'label' => 'Faster policy approvals'],
        ],
        'deliverables' => ['Data governance map', 'Regulatory evidence pack', 'Multi-region operating playbook'],
        'link' => 'strategy-healthcare.php',
        'cta' => 'Read healthcare strategy',
        'accent' => 'emerald',
    ],
    [
        'sector' => 'Enterprise Operations',
        'title' => 'Governance-Led AI Standardization for Multi-Region Teams',
        'summary' => 'A global services organization consolidated fragmented AI initiatives into one enterprise operating model. The program introduced policy templates, partner standards, and executive-level visibility for performance and risk posture.',
        'client' => 'Global business services enterprise',
        'timeline' => '10 weeks',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80',
        'results' => [
            ['value' => '52%', 'label' => 'Reduction in duplicated tooling'],
            ['value' => '3x', 'label' => 'Faster project approvals'],
            ['value' => '24%', 'label' => 'Program cost optimization'],
        ],
        'deliverables' => ['Enterprise policy framework', 'Vendor quality scoring', 'Leadership KPI cockpit'],
        'link' => 'contact.php',
        'cta' => 'Request this case briefing',
        'accent' => 'violet',
    ],
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

        .case-card {
            position: relative;
            overflow: hidden;
        }

        .case-card::before {
            content: '';
            position: absolute;
            inset: -1px;
            z-index: 0;
            border-radius: 1rem;
            opacity: 0;
            transition: opacity 280ms ease;
            background: linear-gradient(130deg, rgba(34, 211, 238, 0.38), rgba(139, 92, 246, 0.3), rgba(34, 211, 238, 0.14));
        }

        .case-card:hover::before {
            opacity: 1;
        }

        .case-card > .card-inner {
            position: relative;
            z-index: 1;
            border-radius: calc(1rem - 1px);
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">
    <nav class="fixed inset-x-0 top-0 z-[60] py-4">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <div class="panel rounded-2xl h-16 px-5 lg:px-7 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-chart-line text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Case Studies</p>
                    </div>
                </a>
                <div class="hidden xl:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="services.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Services</a>
                    <a href="vendor_list.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Vendors</a>
                    <a href="about.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">About</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Client Impact Reports / Version <?= escapeHtml($pageVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Real Enterprise Outcomes. Proven Across Regions and Regulated Environments.
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                Explore how organizations partner with BlockAI Solution to move from fragmented pilots to governed, production-grade AI operations with measurable business results.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 max-w-6xl">
                <?php foreach ($impactHighlights as $highlight): ?>
                    <div class="panel rounded-xl p-4">
                        <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1"><?= escapeHtml($highlight['label']) ?></p>
                        <p class="text-2xl font-bold text-white mb-1"><?= escapeHtml($highlight['value']) ?></p>
                        <p class="text-xs text-slate-300"><?= escapeHtml($highlight['detail']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14 space-y-10">
        <section class="grid md:grid-cols-3 gap-4">
            <div class="panel rounded-xl p-5">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Outcome Focus</p>
                <p class="text-slate-300 text-sm leading-relaxed">Every case study is anchored to outcome KPIs, delivery governance, and executive accountability metrics.</p>
            </div>
            <div class="panel rounded-xl p-5">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Cross-Functional Delivery</p>
                <p class="text-slate-300 text-sm leading-relaxed">Programs combine architecture, compliance, partner execution, and operating model design in one coordinated stream.</p>
            </div>
            <div class="panel rounded-xl p-5">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Governed Scale</p>
                <p class="text-slate-300 text-sm leading-relaxed">Use cases are deployed with documented controls so teams can scale with confidence across markets.</p>
            </div>
        </section>

        <section class="space-y-5">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Featured case studies</p>
                    <h2 class="heading-font text-3xl font-bold text-white">Eye-catching stories with real business impact</h2>
                </div>
                <a href="contact.php" class="text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">Request custom case study package</a>
            </div>

            <div class="grid xl:grid-cols-3 gap-5">
                <?php foreach ($caseStudies as $study): ?>
                    <?php
                    $accentClasses = 'bg-cyan-400/15 text-cyan-200 border-cyan-300/30';
                    $metricColor = 'text-cyan-300';

                    if ($study['accent'] === 'emerald') {
                        $accentClasses = 'bg-emerald-400/15 text-emerald-200 border-emerald-300/30';
                        $metricColor = 'text-emerald-300';
                    } elseif ($study['accent'] === 'violet') {
                        $accentClasses = 'bg-violet-400/15 text-violet-200 border-violet-300/30';
                        $metricColor = 'text-violet-300';
                    }
                    ?>
                    <article class="case-card">
                        <div class="card-inner panel">
                            <div class="relative h-56 overflow-hidden rounded-t-2xl">
                                <img src="<?= escapeHtml($study['image']) ?>" alt="<?= escapeHtml($study['sector']) ?>" class="w-full h-full object-cover scale-105 hover:scale-110 transition duration-700" loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/15 to-transparent"></div>
                                <span class="absolute left-4 top-4 px-3 py-1 rounded-full border text-[10px] uppercase tracking-[0.18em] font-semibold <?= escapeHtml($accentClasses) ?>"><?= escapeHtml($study['sector']) ?></span>
                                <div class="absolute left-4 bottom-4 right-4">
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-slate-200/90 mb-1">Client Profile</p>
                                    <p class="text-sm text-white font-semibold"><?= escapeHtml($study['client']) ?></p>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="heading-font text-2xl font-bold text-white leading-tight mb-3"><?= escapeHtml($study['title']) ?></h3>
                                <p class="text-sm text-slate-300 leading-relaxed mb-4"><?= escapeHtml($study['summary']) ?></p>

                                <div class="mb-4">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-2">Delivery timeline</p>
                                    <p class="text-sm text-white font-semibold"><?= escapeHtml($study['timeline']) ?></p>
                                </div>

                                <div class="grid grid-cols-3 gap-2 mb-4">
                                    <?php foreach ($study['results'] as $result): ?>
                                        <div class="rounded-lg border border-white/10 bg-white/5 p-3">
                                            <p class="text-lg font-bold <?= escapeHtml($metricColor) ?> leading-tight"><?= escapeHtml($result['value']) ?></p>
                                            <p class="text-[10px] uppercase tracking-[0.12em] text-slate-400 mt-1"><?= escapeHtml($result['label']) ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="mb-5">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-2">Key deliverables</p>
                                    <ul class="space-y-2 text-sm text-slate-300">
                                        <?php foreach ($study['deliverables'] as $item): ?>
                                            <li class="flex gap-2">
                                                <i class="fa-solid fa-check text-cyan-300 mt-1 text-xs"></i>
                                                <span><?= escapeHtml($item) ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <a href="<?= escapeHtml($study['link']) ?>" class="inline-flex items-center text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                                    <?= escapeHtml($study['cta']) ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="grid lg:grid-cols-[1.1fr_1fr] gap-6 items-center">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Client perspective</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">"BlockAI did not just deliver a vendor match. They delivered an operating model."</h2>
                    <p class="text-slate-300 leading-relaxed">
                        "We reduced execution risk and accelerated expansion because governance, delivery ownership, and performance controls were all integrated from the start. That changed our board-level confidence in AI investments."
                    </p>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                    <div class="flex items-center gap-4">
                        <img src="https://i.pravatar.cc/160?u=enterprise-client" alt="Client executive" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="text-white font-semibold">Marcus Thorne</p>
                            <p class="text-sm text-slate-400">Chief Technology Officer, Global Dynamics Group</p>
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-3">
                        <div class="rounded-lg border border-white/10 bg-black/20 p-3">
                            <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400 mb-1">Program Type</p>
                            <p class="text-sm text-white font-semibold">Multi-region transformation</p>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-black/20 p-3">
                            <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400 mb-1">Engagement Length</p>
                            <p class="text-sm text-white font-semibold">9 months</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Next step</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Want a case study relevant to your sector?</h2>
                    <p class="text-slate-300 max-w-3xl">We can share a tailored briefing that maps delivery architecture, governance controls, and measured outcomes aligned to your business model and regulatory context.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="contact.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_26px_rgba(34,211,238,0.35)] transition">Request Briefing</a>
                    <a href="whitepaper.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Read Whitepaper</a>
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
                <a href="about.php" class="hover:text-white transition">About</a>
                <a href="contact.php" class="hover:text-white transition">Contact</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
            </div>
        </div>
    </footer>
</body>
</html>
