<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('governance.php', 'governance');

$currentYear = (int) date('Y');
$pageVersion = '2.0.0';

$governanceMetrics = [
    ['label' => 'Total Staked Voting Power', 'value' => '4.25M VP', 'detail' => 'Eligible governance participation'],
    ['label' => 'Live Proposals', 'value' => '12', 'detail' => 'Currently open for voting'],
    ['label' => 'Average Voter Participation', 'value' => '68%', 'detail' => 'Rolling 90-day participation rate'],
    ['label' => 'Treasury Under Governance', 'value' => '$48M', 'detail' => 'Community-controlled allocations'],
];

$governancePrinciples = [
    [
        'icon' => 'fa-scale-balanced',
        'title' => 'Transparent Decision Rights',
        'description' => 'Proposal rules, voting thresholds, and execution status are visible to all stakeholders with full auditability.',
    ],
    [
        'icon' => 'fa-shield-halved',
        'title' => 'Risk-Aware Policy Controls',
        'description' => 'Critical upgrades pass staged review gates with legal, security, and operational control checkpoints.',
    ],
    [
        'icon' => 'fa-people-group',
        'title' => 'Community and Enterprise Alignment',
        'description' => 'Governance decisions balance ecosystem innovation with predictable enterprise service reliability.',
    ],
];

$activeProposals = [
    [
        'id' => 'BAI-2026-14',
        'status' => 'Active',
        'title' => 'Regional Data Residency Control Framework v2',
        'summary' => 'Introduce region-bound policy routing and residency controls for enterprise AI workloads in EMEA and APAC deployments.',
        'proposer' => 'Policy Council',
        'closesIn' => '2 days',
        'quorum' => '1.8M VP required',
        'yesPercent' => 78,
        'noPercent' => 22,
        'yesVotes' => '1.34M VP',
        'noVotes' => '0.38M VP',
        'link' => 'whitepaper.php',
    ],
    [
        'id' => 'BAI-2026-15',
        'status' => 'Active',
        'title' => 'Treasury Allocation for Partner Security Audits',
        'summary' => 'Allocate a dedicated governance budget for quarterly partner infrastructure audits and remediation governance support.',
        'proposer' => 'Treasury Committee',
        'closesIn' => '5 days',
        'quorum' => '2.0M VP required',
        'yesPercent' => 64,
        'noPercent' => 36,
        'yesVotes' => '1.12M VP',
        'noVotes' => '0.63M VP',
        'link' => 'contact.php',
    ],
];

$recentDecisions = [
    [
        'id' => 'BAI-2026-11',
        'title' => 'Grant Program for AI Safety Tooling',
        'outcome' => 'Approved',
        'impact' => 'Funding release initiated for five open-source safety projects.',
        'date' => 'Closed 12 days ago',
    ],
    [
        'id' => 'BAI-2026-09',
        'title' => 'Validator Performance SLA Update',
        'outcome' => 'Approved',
        'impact' => 'Node operator SLA policy updated with stricter uptime requirements.',
        'date' => 'Closed 21 days ago',
    ],
    [
        'id' => 'BAI-2026-08',
        'title' => 'Community Incentive Emissions Adjustment',
        'outcome' => 'Rejected',
        'impact' => 'Existing emissions schedule retained pending revised economic analysis.',
        'date' => 'Closed 27 days ago',
    ],
];

$participationSteps = [
    ['title' => 'Review governance framework', 'description' => 'Read policy scope, quorum rules, and execution checkpoints before voting.'],
    ['title' => 'Evaluate proposal evidence', 'description' => 'Assess technical rationale, risk impact, and expected business outcomes.'],
    ['title' => 'Vote before close window', 'description' => 'Submit your vote within the active period and monitor tally progression.'],
    ['title' => 'Track implementation status', 'description' => 'Follow approved proposals through execution milestones and post-implementation reporting.'],
];

function escapeHtml(string|int|float $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function clampPercent(int|float $value): int
{
    $rounded = (int) round($value);
    return max(0, min(100, $rounded));
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <title>Governance | BlockAI Solution</title>
    <meta name="description" content="Explore BlockAI Solution governance framework, live proposals, voting outcomes, and participation model.">
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

        .vote-track {
            height: 9px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.1);
            overflow: hidden;
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">
    <nav class="fixed inset-x-0 top-0 z-[60] py-4">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <div class="panel rounded-2xl h-16 px-5 lg:px-7 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-landmark text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Governance</p>
                    </div>
                </a>
                <div class="hidden xl:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="whitepaper.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Whitepaper</a>
                    <a href="case-studies.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Case Studies</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Governance Portal / Version <?= escapeHtml($pageVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Transparent Governance for Responsible AI Ecosystem Growth
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                Our governance model combines community participation with enterprise-grade control standards. Proposals, voting outcomes, and execution status remain visible so stakeholders can track accountability from decision to delivery.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 max-w-6xl">
                <?php foreach ($governanceMetrics as $metric): ?>
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
        <section class="grid lg:grid-cols-5 gap-6">
            <article class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Governance principles</p>
                <h2 class="heading-font text-3xl font-bold text-white mb-5">How decisions are made and executed</h2>
                <div class="space-y-4">
                    <?php foreach ($governancePrinciples as $principle): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg border border-cyan-300/20 bg-cyan-400/10 text-cyan-300 flex items-center justify-center shrink-0">
                                    <i class="fa-solid <?= escapeHtml($principle['icon']) ?>"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-white mb-1"><?= escapeHtml($principle['title']) ?></h3>
                                    <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($principle['description']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>

            <aside class="lg:col-span-2 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Participation model</p>
                <h2 class="heading-font text-2xl font-bold text-white mb-4">How to participate effectively</h2>
                <ul class="space-y-4">
                    <?php foreach ($participationSteps as $index => $step): ?>
                        <li class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-1">Step <?= escapeHtml($index + 1) ?></p>
                            <h3 class="text-white font-semibold mb-1"><?= escapeHtml($step['title']) ?></h3>
                            <p class="text-sm text-slate-300"><?= escapeHtml($step['description']) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Live proposals</p>
                    <h2 class="heading-font text-3xl font-bold text-white">Current voting opportunities</h2>
                </div>
                <a href="contact.php" class="text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">Request proposal support</a>
            </div>

            <div class="space-y-4">
                <?php foreach ($activeProposals as $proposal): ?>
                    <?php
                    $yesPercent = clampPercent((int) $proposal['yesPercent']);
                    $noPercent = clampPercent((int) $proposal['noPercent']);
                    ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-5">
                            <div class="lg:max-w-3xl">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="px-3 py-1 rounded-full border border-emerald-300/30 bg-emerald-400/15 text-emerald-200 text-[10px] uppercase tracking-[0.18em] font-semibold"><?= escapeHtml($proposal['status']) ?></span>
                                    <span class="px-3 py-1 rounded-full border border-white/15 bg-white/5 text-slate-300 text-[10px] uppercase tracking-[0.18em] font-semibold"><?= escapeHtml($proposal['id']) ?></span>
                                    <span class="px-3 py-1 rounded-full border border-white/15 bg-white/5 text-slate-300 text-[10px] uppercase tracking-[0.18em] font-semibold"><?= escapeHtml($proposal['quorum']) ?></span>
                                </div>
                                <h3 class="heading-font text-2xl font-bold text-white mb-3"><?= escapeHtml($proposal['title']) ?></h3>
                                <p class="text-sm text-slate-300 leading-relaxed mb-4"><?= escapeHtml($proposal['summary']) ?></p>
                                <div class="flex flex-wrap items-center gap-4 text-[11px] uppercase tracking-[0.14em] text-slate-400">
                                    <span><i class="fa-solid fa-user mr-1"></i> <?= escapeHtml($proposal['proposer']) ?></span>
                                    <span><i class="fa-solid fa-clock mr-1"></i> Closes in <?= escapeHtml($proposal['closesIn']) ?></span>
                                </div>
                            </div>

                            <div class="w-full lg:w-[340px] space-y-4">
                                <div>
                                    <div class="flex justify-between text-[11px] font-semibold uppercase tracking-[0.12em] mb-2">
                                        <span class="text-cyan-300">Yes <?= escapeHtml($yesPercent) ?>%</span>
                                        <span class="text-slate-300"><?= escapeHtml($proposal['yesVotes']) ?></span>
                                    </div>
                                    <div class="vote-track">
                                        <div class="h-full bg-gradient-to-r from-cyan-400 to-emerald-400" style="width: <?= escapeHtml($yesPercent) ?>%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-[11px] font-semibold uppercase tracking-[0.12em] mb-2">
                                        <span class="text-rose-300">No <?= escapeHtml($noPercent) ?>%</span>
                                        <span class="text-slate-300"><?= escapeHtml($proposal['noVotes']) ?></span>
                                    </div>
                                    <div class="vote-track">
                                        <div class="h-full bg-gradient-to-r from-rose-400 to-orange-300" style="width: <?= escapeHtml($noPercent) ?>%"></div>
                                    </div>
                                </div>
                                <a href="<?= escapeHtml($proposal['link']) ?>" class="inline-flex items-center text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                                    Review proposal context <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Recent outcomes</p>
            <h2 class="heading-font text-3xl font-bold text-white mb-6">Recently closed governance decisions</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <?php foreach ($recentDecisions as $decision): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <p class="text-[10px] uppercase tracking-[0.18em] text-slate-400"><?= escapeHtml($decision['id']) ?></p>
                            <span class="px-2.5 py-1 rounded-full text-[10px] uppercase tracking-[0.14em] font-semibold <?= $decision['outcome'] === 'Approved' ? 'bg-emerald-400/15 text-emerald-200 border border-emerald-300/30' : 'bg-rose-400/15 text-rose-200 border border-rose-300/30' ?>">
                                <?= escapeHtml($decision['outcome']) ?>
                            </span>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2"><?= escapeHtml($decision['title']) ?></h3>
                        <p class="text-sm text-slate-300 leading-relaxed mb-3"><?= escapeHtml($decision['impact']) ?></p>
                        <p class="text-[11px] uppercase tracking-[0.12em] text-slate-500"><?= escapeHtml($decision['date']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Next step</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Need governance support for enterprise participation?</h2>
                    <p class="text-slate-300 max-w-3xl">Our team helps organizations understand voting mechanics, proposal framing, and risk implications so governance participation supports long-term business and ecosystem outcomes.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="contact.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_26px_rgba(34,211,238,0.35)] transition">Talk to Governance Team</a>
                    <a href="whitepaper.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">Read Governance Model</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
                <a href="services.php" class="hover:text-white transition">Services</a>
                <a href="case-studies.php" class="hover:text-white transition">Case Studies</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
