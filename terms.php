<?php
declare(strict_types=1);

$currentYear = (int) date('Y');
$lastUpdated = 'February 26, 2026';
$effectiveDate = 'February 26, 2026';
$documentVersion = '2.0.0';

$contents = [
    ['id' => 'acceptance', 'title' => '1. Acceptance and scope'],
    ['id' => 'definitions', 'title' => '2. Definitions'],
    ['id' => 'eligibility', 'title' => '3. Eligibility and accounts'],
    ['id' => 'acceptable-use', 'title' => '4. Acceptable use'],
    ['id' => 'customer-assets', 'title' => '5. Customer content and AI assets'],
    ['id' => 'fees', 'title' => '6. Fees, billing, and taxes'],
    ['id' => 'ip', 'title' => '7. Intellectual property and license'],
    ['id' => 'security', 'title' => '8. Security, privacy, and confidentiality'],
    ['id' => 'third-party', 'title' => '9. Third-party services and blockchain networks'],
    ['id' => 'warranties', 'title' => '10. Warranties and disclaimers'],
    ['id' => 'liability', 'title' => '11. Limitation of liability'],
    ['id' => 'termination', 'title' => '12. Suspension and termination'],
    ['id' => 'legal', 'title' => '13. Governing law, updates, and contact'],
];

$sections = [
    [
        'id' => 'acceptance',
        'title' => '1. Acceptance and scope',
        'paragraphs' => [
            'These Terms of Service govern access to and use of BlockAI Solution websites, application interfaces, APIs, partner tools, and related services.',
            'By using our services, you agree to these Terms. If your organization has an executed Master Services Agreement, Order Form, or equivalent written contract with us, that agreement governs to the extent of any conflict.',
        ],
        'bullets' => [
            'Public website content and related communications',
            'Enterprise platform features, dashboards, and identity flows',
            'Partner onboarding and verified vendor ecosystem services',
        ],
    ],
    [
        'id' => 'definitions',
        'title' => '2. Definitions',
        'paragraphs' => [
            'For these Terms: "Services" means BlockAI Solution digital products and related support; "Customer Content" means data, prompts, files, and artifacts submitted by you; and "Authorized Users" means users you permit to access your account or workspace.',
        ],
        'bullets' => [
            '"Account" means your registered service profile and credentials.',
            '"Documentation" means policy, technical, and usage materials we publish.',
            '"Applicable Law" means laws and regulations binding on your use of the Services.',
        ],
    ],
    [
        'id' => 'eligibility',
        'title' => '3. Eligibility and accounts',
        'paragraphs' => [
            'You represent that you are authorized to accept these Terms for yourself or your organization and that you will ensure all Authorized Users comply with them.',
            'You are responsible for account security, credential management, and all activities performed through your account, including activities by subcontractors or team members.',
        ],
        'bullets' => [
            'Use accurate and current registration information',
            'Promptly notify us of unauthorized access or credential compromise',
            'Maintain internal access controls consistent with your risk profile',
        ],
    ],
    [
        'id' => 'acceptable-use',
        'title' => '4. Acceptable use',
        'paragraphs' => [
            'You must use the Services only for lawful and authorized business purposes. You may not use the Services in ways that violate law, infringe rights, or threaten security or service stability.',
        ],
        'bullets' => [
            'No malware, unauthorized intrusion, denial-of-service, or abuse testing without prior written approval',
            'No unlawful processing of personal data, regulated data, or export-controlled materials',
            'No attempts to bypass usage controls, billing logic, or security safeguards',
        ],
    ],
    [
        'id' => 'customer-assets',
        'title' => '5. Customer content and AI assets',
        'paragraphs' => [
            'You retain ownership of your Customer Content and remain responsible for obtaining all rights and permissions required to process that content through the Services.',
            'You grant BlockAI Solution a limited, non-exclusive license to host, process, and transmit Customer Content solely to deliver and secure the Services.',
        ],
        'bullets' => [
            'You are responsible for model outputs reviewed and used in your business decisions',
            'You must evaluate suitability of generated outputs before operational use',
            'You must not submit content you are not legally permitted to share',
        ],
    ],
    [
        'id' => 'fees',
        'title' => '6. Fees, billing, and taxes',
        'paragraphs' => [
            'Paid services require timely payment of all applicable fees stated in your order, subscription, or written agreement. Unless otherwise specified, fees are non-refundable.',
            'You are responsible for taxes, duties, levies, and similar charges associated with your purchase or use, excluding taxes based on our net income.',
        ],
        'bullets' => [
            'Invoices are payable according to contract terms',
            'Failure to pay may result in service suspension after notice',
            'Usage-based charges may vary by traffic, storage, and features enabled',
        ],
    ],
    [
        'id' => 'ip',
        'title' => '7. Intellectual property and license',
        'paragraphs' => [
            'BlockAI Solution and its licensors retain all rights, title, and interest in the Services, software, interfaces, and related intellectual property.',
            'Subject to these Terms and applicable fees, we grant you a limited, non-transferable, revocable license to access and use the Services for internal business operations.',
        ],
        'bullets' => [
            'No resale, reverse engineering, or derivative commercial replication without permission',
            'No use of our trademarks except as expressly authorized',
            'Feedback you provide may be used to improve products without compensation',
        ],
    ],
    [
        'id' => 'security',
        'title' => '8. Security, privacy, and confidentiality',
        'paragraphs' => [
            'We maintain technical and organizational controls designed for enterprise reliability, including access controls, monitoring, and incident response procedures.',
            'Personal data processing is described in our Privacy Policy and supplemental contractual terms where applicable.',
        ],
        'bullets' => [
            'Each party will protect the other party\'s confidential information',
            'Confidentiality obligations survive termination as required by law or contract',
            'You remain responsible for your own endpoint and identity security posture',
        ],
    ],
    [
        'id' => 'third-party',
        'title' => '9. Third-party services and blockchain networks',
        'paragraphs' => [
            'The Services may integrate with third-party systems, infrastructure, and public blockchain networks. Use of third-party components may be subject to separate third-party terms.',
            'Public blockchain interactions can be irreversible and may expose public metadata. You are responsible for wallet keys, transaction verification, and on-chain operational risk decisions.',
        ],
        'bullets' => [
            'Third-party downtime can impact dependent features',
            'Network fees and token volatility are outside our control',
            'You are responsible for confirming transaction details before submission',
        ],
    ],
    [
        'id' => 'warranties',
        'title' => '10. Warranties and disclaimers',
        'paragraphs' => [
            'Except as expressly stated in a written agreement, the Services are provided on an "as is" and "as available" basis. We do not warrant uninterrupted operation, error-free functionality, or results suitable for every specific use case.',
            'You acknowledge that AI outputs are probabilistic and may contain inaccuracies. Human review and independent validation remain your responsibility.',
        ],
        'bullets' => [
            'No implied warranties of merchantability, fitness, or non-infringement',
            'No guarantee of specific business outcomes or regulatory approvals',
        ],
    ],
    [
        'id' => 'liability',
        'title' => '11. Limitation of liability',
        'paragraphs' => [
            'To the maximum extent permitted by law, neither party is liable for indirect, incidental, special, consequential, or punitive damages, including lost profits, lost revenues, or business interruption.',
            'Our aggregate liability arising from or related to these Terms will not exceed the amount paid by you to us for the affected Services during the twelve months preceding the event giving rise to liability.',
        ],
        'bullets' => [
            'Limitations apply regardless of the legal theory asserted',
            'Nothing excludes liability that cannot be limited under applicable law',
        ],
    ],
    [
        'id' => 'termination',
        'title' => '12. Suspension and termination',
        'paragraphs' => [
            'We may suspend or restrict access to protect platform integrity, investigate suspected abuse, or respond to legal or regulatory requirements.',
            'Either party may terminate as allowed by contract, including for material breach not cured within a reasonable notice period.',
        ],
        'bullets' => [
            'Upon termination, access rights end except as required for legal retention',
            'Accrued payment obligations remain enforceable after termination',
            'Sections on liability, confidentiality, and legal rights survive termination',
        ],
    ],
    [
        'id' => 'legal',
        'title' => '13. Governing law, updates, and contact',
        'paragraphs' => [
            'These Terms are governed by the laws of the jurisdiction where the contracting BlockAI Solution entity is established, excluding conflict-of-law principles. Venue for disputes will be determined by the applicable contract or local law.',
            'We may update these Terms periodically to reflect operational, legal, or regulatory changes. Updated terms are effective when posted, unless otherwise stated.',
            'For legal notices or contract questions, contact our legal team using the channels below.',
        ],
        'bullets' => [
            'Legal: legal@blockaisolution.com',
            'General support: support@blockaisolution.com',
            'Website: https://blockaisolution.com',
        ],
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
    <title>Terms of Service | BlockAI Solution</title>
    <meta name="description" content="Business-standard Terms of Service for BlockAI Solution platform and enterprise services.">
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

        .terms-section {
            scroll-margin-top: 100px;
        }

        .terms-section:not(:last-child) {
            border-bottom: 1px solid var(--line-soft);
            padding-bottom: 2.75rem;
            margin-bottom: 2.75rem;
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">
    <nav class="fixed inset-x-0 top-0 z-[60] py-4">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <div class="panel rounded-2xl h-16 px-5 lg:px-7 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-scale-balanced text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Terms and Legal</p>
                    </div>
                </a>
                <div class="hidden sm:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.15em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="privacy-policy.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Privacy</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Terms of Service / Version <?= escapeHtml($documentVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-4xl text-white mb-5">
                Terms of Service for Platform, Partner, and Enterprise Users
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                These terms define the legal framework for using BlockAI Solution products and services. They are designed for enterprise, partner, and operational users who require clear contractual, risk, and compliance boundaries.
            </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 max-w-5xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Effective Date</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($effectiveDate) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Last Updated</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($lastUpdated) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Document Version</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($documentVersion) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Legal Contact</p>
                    <p class="text-xl font-bold text-cyan-300 break-all">legal@blockaisolution.com</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14">
        <div class="lg:grid lg:grid-cols-[300px_minmax(0,1fr)] lg:gap-10">
            <aside class="hidden lg:block">
                <div class="panel rounded-2xl p-5 sticky top-24">
                    <h2 class="text-[11px] uppercase tracking-[0.22em] text-slate-400 font-semibold mb-4">Contents</h2>
                    <ul class="space-y-2">
                        <?php foreach ($contents as $item): ?>
                            <li>
                                <a href="#<?= escapeHtml($item['id']) ?>" class="block px-3 py-2 rounded-lg text-[13px] text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <?= escapeHtml($item['title']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>

            <article class="panel rounded-2xl p-6 md:p-10">
                <?php foreach ($sections as $section): ?>
                    <section id="<?= escapeHtml($section['id']) ?>" class="terms-section">
                        <h2 class="heading-font text-3xl font-bold text-white mb-4"><?= escapeHtml($section['title']) ?></h2>
                        <?php foreach ($section['paragraphs'] as $paragraph): ?>
                            <p class="text-slate-300 leading-relaxed mb-4"><?= escapeHtml($paragraph) ?></p>
                        <?php endforeach; ?>
                        <?php if (!empty($section['bullets'])): ?>
                            <ul class="space-y-3 text-slate-300 list-disc ml-5">
                                <?php foreach ($section['bullets'] as $bullet): ?>
                                    <li><?= escapeHtml($bullet) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </section>
                <?php endforeach; ?>

                <section class="rounded-xl border border-cyan-400/20 bg-cyan-400/5 p-5">
                    <h3 class="heading-font text-2xl font-bold text-white mb-3">Legal and support channels</h3>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        For contract inquiries, legal notices, security concerns, or compliance-related requests, contact the appropriate team below. Standard response target is three to five business days.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-3">
                        <a href="mailto:legal@blockaisolution.com" class="rounded-lg border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400 mb-2">Legal Team</p>
                            <p class="text-cyan-300 font-semibold break-all">legal@blockaisolution.com</p>
                        </a>
                        <a href="mailto:support@blockaisolution.com" class="rounded-lg border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400 mb-2">Support Team</p>
                            <p class="text-cyan-300 font-semibold break-all">support@blockaisolution.com</p>
                        </a>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
                <a href="contact.php" class="hover:text-white transition">Contact</a>
                <a href="about.php" class="hover:text-white transition">About</a>
            </div>
        </div>
    </footer>
</body>
</html>
