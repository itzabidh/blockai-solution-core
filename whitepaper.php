<?php
declare(strict_types=1);

$currentYear = (int) date('Y');

$documentMeta = [
    'version' => '2.4.0',
    'lastUpdated' => 'February 2026',
    'classification' => 'Public Release',
    'status' => 'Production',
];

$tableOfContents = [
    ['id' => 'executive-summary', 'label' => '01 Executive Summary'],
    ['id' => 'market-failures', 'label' => '02 Market Challenges'],
    ['id' => 'protocol-architecture', 'label' => '03 Protocol Architecture'],
    ['id' => 'token-economics', 'label' => '04 Token Economics'],
    ['id' => 'security-compliance', 'label' => '05 Security and Compliance'],
    ['id' => 'governance-model', 'label' => '06 Governance Model'],
    ['id' => 'implementation-roadmap', 'label' => '07 Implementation Roadmap'],
    ['id' => 'adoption-strategy', 'label' => '08 Adoption Strategy'],
    ['id' => 'risk-management', 'label' => '09 Risk Management'],
    ['id' => 'faq', 'label' => '10 Frequently Asked Questions'],
    ['id' => 'conclusion', 'label' => '11 Conclusion'],
];

$architectureLayers = [
    [
        'title' => 'Access and API Layer',
        'description' => 'Developer-first APIs, SDKs, and policy gateways for secure workload onboarding across all supported environments.',
    ],
    [
        'title' => 'Scheduling and Orchestration Layer',
        'description' => 'Dynamic workload routing based on cost, geography, security profile, and node performance benchmarks.',
    ],
    [
        'title' => 'Confidential Compute Layer',
        'description' => 'Hardware-backed enclaves plus cryptographic verification to guarantee model and data confidentiality end-to-end.',
    ],
    [
        'title' => 'Settlement and Governance Layer',
        'description' => 'On-chain metering, transparent incentives, staking, and protocol governance with auditable decision history.',
    ],
];

$tokenAllocation = [
    ['bucket' => 'Ecosystem incentives', 'allocation' => '40%', 'vesting' => 'Linear release across 60 months'],
    ['bucket' => 'Node provider rewards', 'allocation' => '22%', 'vesting' => 'Usage-based emission schedule'],
    ['bucket' => 'Foundation treasury', 'allocation' => '15%', 'vesting' => 'Governance controlled, milestone unlocked'],
    ['bucket' => 'Core contributors', 'allocation' => '13%', 'vesting' => '12-month cliff, 36-month vesting'],
    ['bucket' => 'Strategic partnerships', 'allocation' => '7%', 'vesting' => '18-month vesting with KPI gates'],
    ['bucket' => 'Liquidity and market making', 'allocation' => '3%', 'vesting' => 'Programmatic and transparent deployment'],
];

$governanceStages = [
    [
        'title' => 'Proposal Draft',
        'description' => 'Community members submit a formal BlockAI Improvement Proposal (BIP) with impact analysis and rollout strategy.',
    ],
    [
        'title' => 'Technical Review',
        'description' => 'Security council and ecosystem reviewers evaluate implementation risks, compatibility, and migration impact.',
    ],
    [
        'title' => 'Tokenholder Vote',
        'description' => 'Delegated tokenholders vote on-chain with quorum and supermajority thresholds based on proposal type.',
    ],
    [
        'title' => 'Execution and Audit',
        'description' => 'Approved changes execute via timelock contracts and post-deployment observability checkpoints.',
    ],
];

$roadmapPhases = [
    [
        'window' => 'Q2 2026',
        'title' => 'Foundation and Core Services',
        'milestones' => [
            'General availability for API gateway and node onboarding',
            'SLA dashboards with live utilization telemetry',
            'First-party SDKs for Python, TypeScript, and Rust',
        ],
    ],
    [
        'window' => 'Q3 2026',
        'title' => 'Confidential AI Execution',
        'milestones' => [
            'Confidential inference pipelines with hardware enclave attestation',
            'Enterprise identity federation and role-based workload policies',
            'Automated failover across independent node pools',
        ],
    ],
    [
        'window' => 'Q4 2026',
        'title' => 'Enterprise Governance and Billing',
        'milestones' => [
            'Department-level chargeback and metered cost centers',
            'Policy engine for region and compliance aware scheduling',
            'Governance portal with formal proposal workflows',
        ],
    ],
    [
        'window' => 'H1 2027',
        'title' => 'Global Expansion and Marketplace',
        'milestones' => [
            'Model marketplace with signed provenance metadata',
            'Cross-chain settlement support for enterprise treasuries',
            'Partner-operated regional data hubs in 12 additional markets',
        ],
    ],
];

$riskRegister = [
    [
        'risk' => 'GPU supply concentration',
        'impact' => 'High',
        'mitigation' => 'Diversified regional onboarding, long-term provider agreements, and dynamic fallback pools.',
    ],
    [
        'risk' => 'Regulatory policy fragmentation',
        'impact' => 'High',
        'mitigation' => 'Jurisdiction-aware policy templates and legal advisory council per launch region.',
    ],
    [
        'risk' => 'Model misuse and abuse',
        'impact' => 'Medium',
        'mitigation' => 'Rate controls, abuse detection, signed model manifests, and response-level safety filters.',
    ],
    [
        'risk' => 'Smart contract vulnerabilities',
        'impact' => 'Medium',
        'mitigation' => 'Independent audits, staged rollouts, bug bounty program, and timelocked upgrades.',
    ],
];

$faqItems = [
    [
        'question' => 'How is BlockAI different from a traditional cloud provider?',
        'answer' => 'BlockAI combines decentralized infrastructure with enterprise governance controls. Teams can reduce concentration risk while maintaining policy enforcement, cost visibility, and auditability.',
    ],
    [
        'question' => 'Can regulated businesses use BlockAI?',
        'answer' => 'Yes. The platform is designed for regulated deployments through region pinning, identity federation, encrypted execution paths, and tamper-evident operational logs.',
    ],
    [
        'question' => 'What does the token enable?',
        'answer' => 'The token supports protocol fees, staking guarantees, governance participation, and ecosystem incentives that align long-term network quality with demand growth.',
    ],
    [
        'question' => 'How quickly can a team migrate workloads?',
        'answer' => 'Most teams can launch an initial production pilot in under four weeks using API compatibility adapters and deployment templates provided in the developer portal.',
    ],
];

/**
 * Escape dynamic values for safe HTML output.
 */
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
    <title>Whitepaper | BlockAI Protocol</title>
    <meta name="description" content="BlockAI whitepaper covering architecture, token economics, governance, security, and enterprise adoption strategy.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #060713;
            --bg-elevated: rgba(255, 255, 255, 0.04);
            --line: rgba(255, 255, 255, 0.12);
            --line-soft: rgba(255, 255, 255, 0.08);
            --text-main: #e6edf3;
            --text-muted: #94a3b8;
            --brand-cyan: #22d3ee;
            --brand-purple: #8b5cf6;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            background-color: var(--bg-main);
            background-image:
                radial-gradient(circle at 10% 10%, rgba(34, 211, 238, 0.12), transparent 35%),
                radial-gradient(circle at 85% 0%, rgba(139, 92, 246, 0.14), transparent 40%);
        }

        .heading-font {
            font-family: 'Space Grotesk', sans-serif;
        }

        .panel {
            background: var(--bg-elevated);
            backdrop-filter: blur(16px);
            border: 1px solid var(--line-soft);
        }

        .doc-section {
            scroll-margin-top: 110px;
        }

        .doc-section:not(:last-child) {
            border-bottom: 1px solid var(--line-soft);
            padding-bottom: 3.5rem;
            margin-bottom: 3.5rem;
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">
    <div id="docProgress" class="fixed top-0 left-0 h-1 w-0 bg-gradient-to-r from-cyan-400 to-purple-500 z-[70]"></div>

    <nav id="docsNav" class="fixed inset-x-0 top-0 z-[60] py-4 transition-all duration-300">
        <div class="max-w-[1300px] mx-auto px-6 lg:px-8">
            <div id="docsNavShell" class="panel rounded-2xl h-16 px-5 lg:px-7 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-brain text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold tracking-tight text-white">BlockAI Protocol</p>
                        <p class="text-[10px] uppercase tracking-[0.22em] text-cyan-200">Official Whitepaper</p>
                    </div>
                </a>
                <div class="flex items-center gap-3">
                    <a href="index.php" class="hidden sm:inline-flex items-center px-4 py-2 rounded-lg border border-white/15 text-[11px] font-semibold uppercase tracking-[0.16em] text-slate-300 hover:text-white hover:border-white/30 transition">
                        Back to Site
                    </a>
                    <a href="contact.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-[11px] font-semibold uppercase tracking-[0.16em] text-white hover:shadow-[0_0_24px_rgba(34,211,238,0.35)] transition" aria-label="Request whitepaper PDF by email">
                        <i class="fa-solid fa-download text-[10px]" aria-hidden="true"></i>
                        Request PDF
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-14 border-b border-white/10">
        <div class="max-w-[1300px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.3em] text-cyan-300 font-semibold mb-4">Version <?= escapeHtml($documentMeta['version']) ?> / <?= escapeHtml($documentMeta['classification']) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl lg:text-7xl font-bold leading-[1.04] max-w-5xl text-white">
                Decentralized AI Infrastructure for Reliable, Secure, and Cost-Efficient Enterprise Workloads
            </h1>
            <p class="mt-7 text-slate-300 text-lg md:text-xl max-w-3xl leading-relaxed">
                This whitepaper presents the BlockAI protocol design, governance mechanics, and implementation strategy for teams building mission-critical AI products without centralized infrastructure risk.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-9 max-w-4xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-1">Document Version</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($documentMeta['version']) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-1">Last Updated</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($documentMeta['lastUpdated']) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-1">Classification</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($documentMeta['classification']) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-1">Network Status</p>
                    <p class="text-xl font-bold text-emerald-300"><?= escapeHtml($documentMeta['status']) ?></p>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-[1300px] mx-auto px-6 lg:px-8 py-12 lg:py-14">
        <div class="panel rounded-2xl p-5 lg:hidden mb-8">
            <h2 class="text-[11px] uppercase tracking-[0.22em] text-slate-400 font-semibold mb-3">Contents</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                <?php foreach ($tableOfContents as $entry): ?>
                    <a href="#<?= escapeHtml($entry['id']) ?>" class="text-sm text-slate-300 hover:text-white transition"><?= escapeHtml($entry['label']) ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="lg:grid lg:grid-cols-[280px_minmax(0,1fr)] lg:gap-10">
            <aside class="hidden lg:block">
                <div class="panel rounded-2xl p-5 sticky top-24">
                    <h2 class="text-[11px] uppercase tracking-[0.22em] text-slate-400 font-semibold mb-4">On This Page</h2>
                    <ul class="space-y-1.5">
                        <?php foreach ($tableOfContents as $entry): ?>
                            <li>
                                <a
                                    href="#<?= escapeHtml($entry['id']) ?>"
                                    data-doc-link
                                    class="toc-link flex items-center rounded-lg border border-transparent px-3 py-2 text-[13px] text-slate-400 hover:text-white hover:bg-white/5 transition"
                                >
                                    <?= escapeHtml($entry['label']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="mt-6 rounded-xl border border-cyan-400/20 bg-cyan-400/5 p-4">
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Need implementation support? Contact the BlockAI architecture team for deployment design workshops.
                        </p>
                        <a href="mailto:contact@blockaisolution.com" class="inline-flex mt-3 text-xs font-semibold text-cyan-300 hover:text-cyan-200 transition">
                            contact@blockaisolution.com
                        </a>
                    </div>
                </div>
            </aside>

            <main class="min-w-0">
                <section id="executive-summary" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">01 Executive Summary</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">A decentralized operating layer for enterprise AI</h2>
                    <div class="space-y-5 text-slate-300 leading-relaxed">
                        <p>
                            BlockAI is an enterprise-grade protocol that coordinates globally distributed compute providers, cryptographic trust controls, and transparent economic incentives to deliver AI services with lower concentration risk. The protocol is purpose-built for teams that need high throughput inference, deterministic billing, and verifiable governance.
                        </p>
                        <p>
                            This release formalizes a production architecture where policy-constrained scheduling, confidential execution, and on-chain settlement are integrated as first-class components rather than optional add-ons. The result is a platform where technical and compliance requirements are addressed at protocol level.
                        </p>
                    </div>
                    <div class="mt-7 grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Cost efficiency</p>
                            <p class="text-sm text-slate-200">Target 35 to 55 percent lower blended inference cost through dynamic node routing and pooled utilization.</p>
                        </div>
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Operational resilience</p>
                            <p class="text-sm text-slate-200">Multi-provider failover and deterministic workload migration to reduce regional downtime risk.</p>
                        </div>
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Governance transparency</p>
                            <p class="text-sm text-slate-200">Auditable upgrades, open voting records, and measured execution through timelocked contracts.</p>
                        </div>
                    </div>
                </section>

                <section id="market-failures" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">02 Market Challenges</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Why current AI infrastructure is not enough</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-3">Structural bottlenecks</h3>
                            <ul class="space-y-3 text-slate-300 text-sm">
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-exclamation text-cyan-300 mt-0.5" aria-hidden="true"></i>
                                    <span>Compute supply is heavily concentrated, exposing teams to vendor lock-in and pricing volatility.</span>
                                </li>
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-exclamation text-cyan-300 mt-0.5" aria-hidden="true"></i>
                                    <span>Most billing models are opaque, making it difficult to map model spend to business outcomes.</span>
                                </li>
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-exclamation text-cyan-300 mt-0.5" aria-hidden="true"></i>
                                    <span>Security and privacy controls are often retrofitted after deployment, increasing compliance risk.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-3">Why decentralization now</h3>
                            <ul class="space-y-3 text-slate-300 text-sm">
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-check text-emerald-300 mt-0.5" aria-hidden="true"></i>
                                    <span>Global GPU supply can be aggregated without central ownership using verifiable orchestration.</span>
                                </li>
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-check text-emerald-300 mt-0.5" aria-hidden="true"></i>
                                    <span>On-chain metering creates transparent settlement and auditable cost attribution.</span>
                                </li>
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-circle-check text-emerald-300 mt-0.5" aria-hidden="true"></i>
                                    <span>Policy-aware scheduling enables region and regulatory constraints at runtime.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="protocol-architecture" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">03 Protocol Architecture</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Modular layers for scale, trust, and control</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <?php foreach ($architectureLayers as $layer): ?>
                            <article class="panel rounded-xl p-5">
                                <h3 class="text-lg font-semibold text-white mb-2"><?= escapeHtml($layer['title']) ?></h3>
                                <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($layer['description']) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-7 panel rounded-xl p-5">
                        <h3 class="text-lg font-semibold text-white mb-4">Reference request flow</h3>
                        <ol class="space-y-3 text-slate-300 text-sm list-decimal ml-5">
                            <li>Client sends workload request and policy constraints to the Access Layer.</li>
                            <li>Scheduler computes candidate nodes based on performance, cost, and compliance requirements.</li>
                            <li>Confidential compute channel is established with attestation and encrypted payload delivery.</li>
                            <li>Inference response is returned to client and usage is settled on-chain for full auditability.</li>
                        </ol>
                    </div>
                </section>

                <section id="token-economics" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">04 Token Economics</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Economic alignment for long-term network quality</h2>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        The BLOCKAI token coordinates demand-side payments, supply-side rewards, and protocol governance. Emissions are structured to prioritize network reliability and sustained ecosystem growth rather than short-term extraction.
                    </p>
                    <div class="overflow-x-auto panel rounded-xl">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="border-b border-white/10 bg-white/[0.02]">
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Allocation bucket</th>
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Allocation</th>
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Vesting policy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tokenAllocation as $allocation): ?>
                                    <tr class="border-b border-white/5 last:border-0">
                                        <td class="px-4 py-3 text-slate-200"><?= escapeHtml($allocation['bucket']) ?></td>
                                        <td class="px-4 py-3 text-cyan-300 font-semibold"><?= escapeHtml($allocation['allocation']) ?></td>
                                        <td class="px-4 py-3 text-slate-400"><?= escapeHtml($allocation['vesting']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Payment utility</p>
                            <p class="text-sm text-slate-300">Used for protocol services such as inference jobs, model hosting, and data pipeline execution.</p>
                        </div>
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Staking utility</p>
                            <p class="text-sm text-slate-300">Node operators stake to access premium workloads and signal service-level reliability.</p>
                        </div>
                        <div class="panel rounded-xl p-4">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Governance utility</p>
                            <p class="text-sm text-slate-300">Tokenholders vote on protocol changes, treasury priorities, and governance parameter updates.</p>
                        </div>
                    </div>
                </section>

                <section id="security-compliance" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">05 Security and Compliance</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Built for trust in regulated environments</h2>
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-2">Confidential execution</h3>
                            <p class="text-sm text-slate-300">Hardware-backed enclaves and encrypted payload channels protect model parameters and sensitive data throughout processing.</p>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-2">Cryptographic accountability</h3>
                            <p class="text-sm text-slate-300">Attestation proofs and tamper-evident logs provide verifiable evidence for audit and incident response workflows.</p>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-2">Policy-driven operations</h3>
                            <p class="text-sm text-slate-300">Runtime controls enforce region pinning, identity boundaries, and workload class restrictions at orchestration layer.</p>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <h3 class="text-lg font-semibold text-white mb-2">Continuous assurance</h3>
                            <p class="text-sm text-slate-300">Independent audits, penetration testing, and public bounty programs are used for iterative security hardening.</p>
                        </div>
                    </div>
                    <div class="rounded-xl border border-emerald-300/20 bg-emerald-400/5 p-5">
                        <p class="text-sm text-slate-200">
                            Compliance-ready feature set includes structured access logs, policy templates, and role-based controls to support enterprise governance requirements.
                        </p>
                    </div>
                </section>

                <section id="governance-model" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">06 Governance Model</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Open participation with disciplined execution controls</h2>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Governance in BlockAI is designed to balance decentralization with delivery quality. Every protocol change follows a documented lifecycle that emphasizes technical review, community transparency, and observable execution.
                    </p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <?php foreach ($governanceStages as $stage): ?>
                            <article class="panel rounded-xl p-5">
                                <h3 class="text-lg font-semibold text-white mb-2"><?= escapeHtml($stage['title']) ?></h3>
                                <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($stage['description']) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="implementation-roadmap" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">07 Implementation Roadmap</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Phased delivery aligned to enterprise adoption</h2>
                    <div class="space-y-4">
                        <?php foreach ($roadmapPhases as $phase): ?>
                            <article class="panel rounded-xl p-5">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
                                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold"><?= escapeHtml($phase['window']) ?></p>
                                    <h3 class="text-lg font-semibold text-white"><?= escapeHtml($phase['title']) ?></h3>
                                </div>
                                <ul class="space-y-2 text-sm text-slate-300">
                                    <?php foreach ($phase['milestones'] as $milestone): ?>
                                        <li class="flex gap-3">
                                            <i class="fa-solid fa-arrow-right text-cyan-300 mt-1" aria-hidden="true"></i>
                                            <span><?= escapeHtml($milestone) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="adoption-strategy" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">08 Adoption Strategy</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">From pilot to global rollout</h2>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Adoption is designed around measurable outcomes. Teams start with constrained pilots, then expand to multi-region production using reference architectures and governance templates validated in real customer environments.
                    </p>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="panel rounded-xl p-5">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Phase 1</p>
                            <h3 class="text-lg font-semibold text-white mb-2">Pilot Launch</h3>
                            <p class="text-sm text-slate-300">Deploy one high-value inference workflow with baseline observability and cost benchmarking.</p>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Phase 2</p>
                            <h3 class="text-lg font-semibold text-white mb-2">Department Scale</h3>
                            <p class="text-sm text-slate-300">Integrate identity federation, approval workflows, and chargeback for internal business units.</p>
                        </div>
                        <div class="panel rounded-xl p-5">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Phase 3</p>
                            <h3 class="text-lg font-semibold text-white mb-2">Global Expansion</h3>
                            <p class="text-sm text-slate-300">Roll out multi-region workloads with policy-constrained routing and continuous resilience testing.</p>
                        </div>
                    </div>
                </section>

                <section id="risk-management" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">09 Risk Management</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Proactive controls for operational durability</h2>
                    <div class="overflow-x-auto panel rounded-xl">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="border-b border-white/10 bg-white/[0.02]">
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Risk</th>
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Impact</th>
                                    <th class="text-left px-4 py-3 font-semibold text-slate-200">Mitigation strategy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($riskRegister as $item): ?>
                                    <tr class="border-b border-white/5 last:border-0">
                                        <td class="px-4 py-3 text-slate-200"><?= escapeHtml($item['risk']) ?></td>
                                        <td class="px-4 py-3 <?= $item['impact'] === 'High' ? 'text-rose-300' : 'text-amber-300' ?> font-semibold"><?= escapeHtml($item['impact']) ?></td>
                                        <td class="px-4 py-3 text-slate-400"><?= escapeHtml($item['mitigation']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="faq" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">10 Frequently Asked Questions</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">Key questions from technical and business teams</h2>
                    <div class="space-y-3">
                        <?php foreach ($faqItems as $faq): ?>
                            <details class="panel rounded-xl p-5 group">
                                <summary class="cursor-pointer list-none flex items-center justify-between gap-4">
                                    <span class="font-semibold text-white"><?= escapeHtml($faq['question']) ?></span>
                                    <span class="text-cyan-300 group-open:rotate-45 transition-transform">
                                        <i class="fa-solid fa-plus" aria-hidden="true"></i>
                                    </span>
                                </summary>
                                <p class="text-sm text-slate-300 mt-3 leading-relaxed"><?= escapeHtml($faq['answer']) ?></p>
                            </details>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="conclusion" data-doc-section class="doc-section">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">11 Conclusion</p>
                    <h2 class="heading-font text-3xl md:text-4xl font-bold text-white mb-5">A practical path to resilient AI infrastructure</h2>
                    <p class="text-slate-300 leading-relaxed mb-5">
                        BlockAI combines cryptographic trust, decentralized execution, and policy-aware operations into a single production framework for enterprise AI. The protocol is engineered to support both rapid innovation and long-term reliability at global scale.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-7">
                        We invite developers, node operators, governance delegates, and enterprise teams to collaborate on the next phase of protocol growth and implementation. The most durable AI systems will be those built on open, verifiable infrastructure foundations.
                    </p>
                    <div class="panel rounded-xl p-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <p class="text-white font-semibold">Request the technical annex and deployment checklist</p>
                            <p class="text-sm text-slate-400 mt-1">Includes API migration notes, security baselines, and architecture templates.</p>
                        </div>
                        <a href="mailto:contact@blockaisolution.com" class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold text-white hover:shadow-[0_0_28px_rgba(34,211,238,0.35)] transition">
                            Contact Architecture Team
                        </a>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1300px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">
                &copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core
            </p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms of Service</a>
                <a href="mailto:contact@blockaisolution.com" class="hover:text-white transition">contact@blockaisolution.com</a>
            </div>
        </div>
    </footer>

    <script>
        const docsNav = document.getElementById('docsNav');
        const docsNavShell = document.getElementById('docsNavShell');
        const progressBar = document.getElementById('docProgress');
        const tocLinks = document.querySelectorAll('[data-doc-link]');
        const sections = document.querySelectorAll('section[data-doc-section]');

        const updateOnScroll = () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const progress = height > 0 ? (scrollTop / height) * 100 : 0;

            if (progressBar) {
                progressBar.style.width = `${progress}%`;
            }

            if (!docsNav || !docsNavShell) {
                return;
            }

            if (scrollTop > 48) {
                docsNav.classList.remove('py-4');
                docsNav.classList.add('py-2');
                docsNavShell.classList.add('border-cyan-400/30', 'shadow-[0_20px_45px_rgba(0,0,0,0.45)]');
                return;
            }

            docsNav.classList.remove('py-2');
            docsNav.classList.add('py-4');
            docsNavShell.classList.remove('border-cyan-400/30', 'shadow-[0_20px_45px_rgba(0,0,0,0.45)]');
        };

        const setActiveSection = (id) => {
            tocLinks.forEach((link) => {
                const isActive = link.getAttribute('href') === `#${id}`;
                link.classList.toggle('text-cyan-300', isActive);
                link.classList.toggle('border-cyan-400/40', isActive);
                link.classList.toggle('bg-cyan-400/10', isActive);
                link.classList.toggle('text-slate-400', !isActive);
            });
        };

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            setActiveSection(entry.target.id);
                        }
                    });
                },
                { rootMargin: '-32% 0px -58% 0px', threshold: 0.01 }
            );

            sections.forEach((section) => observer.observe(section));
        }

        tocLinks.forEach((link) => {
            link.addEventListener('click', () => {
                const target = link.getAttribute('href');
                if (target) {
                    setActiveSection(target.replace('#', ''));
                }
            });
        });

        window.addEventListener('scroll', updateOnScroll, { passive: true });
        updateOnScroll();

        if (sections.length > 0) {
            setActiveSection(sections[0].id);
        }
    </script>
</body>
</html>
