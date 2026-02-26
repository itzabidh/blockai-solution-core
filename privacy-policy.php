<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('privacy-policy.php', 'privacy-policy');

$currentYear = (int) date('Y');
$lastUpdated = 'February 26, 2026';
$policyVersion = '2.0.0';

$contents = [
    ['id' => 'scope', 'title' => '1. Scope and applicability'],
    ['id' => 'data-we-collect', 'title' => '2. Information we collect'],
    ['id' => 'legal-bases', 'title' => '3. Purposes and legal bases'],
    ['id' => 'cookies', 'title' => '4. Cookies and tracking technologies'],
    ['id' => 'sharing', 'title' => '5. Data sharing and disclosures'],
    ['id' => 'international-transfers', 'title' => '6. International data transfers'],
    ['id' => 'retention', 'title' => '7. Data retention'],
    ['id' => 'security', 'title' => '8. Security controls'],
    ['id' => 'rights', 'title' => '9. Your privacy rights'],
    ['id' => 'blockchain', 'title' => '10. Blockchain transparency notice'],
    ['id' => 'children', 'title' => '11. Children and minors'],
    ['id' => 'changes', 'title' => '12. Changes to this policy'],
    ['id' => 'contact', 'title' => '13. Contact details'],
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
    <title>Privacy Policy | BlockAI Solution</title>
    <meta name="description" content="Business-standard privacy policy for BlockAI Solution, covering data collection, legal bases, retention, security, and user rights.">
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

        .policy-section {
            scroll-margin-top: 100px;
        }

        .policy-section:not(:last-child) {
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
                        <i class="fa-solid fa-shield-halved text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Privacy and Compliance</p>
                    </div>
                </a>
                <div class="hidden sm:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.15em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="terms.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Terms</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Privacy Policy / Version <?= escapeHtml($policyVersion) ?></p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-4xl text-white mb-5">
                Privacy Policy for Enterprise and Platform Users
            </h1>
            <p class="text-slate-300 text-lg max-w-3xl leading-relaxed">
                This policy describes how BlockAI Solution collects, uses, protects, and discloses personal information in connection with our website, services, business operations, and decentralized infrastructure.
            </p>
            <div class="grid sm:grid-cols-3 gap-4 mt-8 max-w-4xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Last Updated</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($lastUpdated) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Document Version</p>
                    <p class="text-xl font-bold text-white"><?= escapeHtml($policyVersion) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Contact</p>
                    <p class="text-xl font-bold text-cyan-300">support@blockaisolution.com</p>
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
                <section id="scope" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">1. Scope and applicability</h2>
                    <p class="text-slate-300 leading-relaxed">This Privacy Policy applies to personal information processed by BlockAI Solution in relation to our website, platform services, communications, and business operations. It applies to users, prospective customers, vendor partners, and other business contacts interacting with us through digital channels.</p>
                </section>

                <section id="data-we-collect" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">2. Information we collect</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">Depending on your interaction with our services, we may collect:</p>
                    <ul class="space-y-3 text-slate-300 list-disc ml-5">
                        <li><strong class="text-white">Identity and contact information:</strong> such as name, business email, organization, and role when you submit forms or request demos.</li>
                        <li><strong class="text-white">Technical information:</strong> such as IP address, browser type, log timestamps, and device metadata for reliability and security.</li>
                        <li><strong class="text-white">Usage information:</strong> such as page interactions, feature activity, and session data to improve product quality and user experience.</li>
                        <li><strong class="text-white">Blockchain-related public data:</strong> such as wallet addresses and transaction references when interacting with decentralized components.</li>
                    </ul>
                </section>

                <section id="legal-bases" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">3. Purposes and legal bases</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">Where applicable law requires a legal basis, we process data under one or more of the following:</p>
                    <ul class="space-y-3 text-slate-300 list-disc ml-5">
                        <li><strong class="text-white">Contract performance:</strong> to provide requested services and support.</li>
                        <li><strong class="text-white">Legitimate interests:</strong> to secure systems, prevent abuse, and improve platform operations.</li>
                        <li><strong class="text-white">Consent:</strong> for optional communications and non-essential tracking where required.</li>
                        <li><strong class="text-white">Legal obligations:</strong> to comply with applicable regulatory, audit, and law-enforcement requirements.</li>
                    </ul>
                </section>

                <section id="cookies" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">4. Cookies and tracking technologies</h2>
                    <p class="text-slate-300 leading-relaxed">We use cookies and similar technologies for session continuity, security, and performance analytics. You can control cookie preferences via browser settings, but disabling essential cookies may affect core functionality.</p>
                </section>

                <section id="sharing" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">5. Data sharing and disclosures</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">We do not sell personal data. We may disclose information to:</p>
                    <ul class="space-y-3 text-slate-300 list-disc ml-5">
                        <li>Service providers operating on our behalf under contractual confidentiality obligations.</li>
                        <li>Professional advisors, auditors, and compliance partners where reasonably necessary.</li>
                        <li>Authorities where required to comply with law, valid legal process, or security obligations.</li>
                    </ul>
                </section>

                <section id="international-transfers" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">6. International data transfers</h2>
                    <p class="text-slate-300 leading-relaxed">Your information may be transferred to and processed in countries outside your jurisdiction. Where required, we apply appropriate safeguards such as contractual protections and security controls designed to maintain lawful data protection standards.</p>
                </section>

                <section id="retention" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">7. Data retention</h2>
                    <p class="text-slate-300 leading-relaxed">We retain personal information only for as long as necessary to fulfill operational purposes, contractual obligations, and legal requirements. Retention periods are based on business necessity, account activity, and compliance obligations.</p>
                </section>

                <section id="security" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">8. Security controls</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">We implement technical and organizational safeguards aligned with enterprise security practices, including:</p>
                    <ul class="space-y-3 text-slate-300 list-disc ml-5">
                        <li>Encrypted transport and controlled access to production systems.</li>
                        <li>Monitoring, logging, and incident response procedures.</li>
                        <li>Role-based access restrictions and regular security assessments.</li>
                    </ul>
                </section>

                <section id="rights" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">9. Your privacy rights</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">Subject to local law, you may have rights to:</p>
                    <ul class="space-y-3 text-slate-300 list-disc ml-5">
                        <li>Access, correct, or request deletion of certain personal information.</li>
                        <li>Object to or restrict specific processing activities.</li>
                        <li>Withdraw consent where processing is based on consent.</li>
                        <li>Receive a copy of your data in a portable format where applicable.</li>
                    </ul>
                </section>

                <section id="blockchain" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">10. Blockchain transparency notice</h2>
                    <p class="text-slate-300 leading-relaxed">Certain interactions may involve public blockchain networks. Public on-chain data is generally immutable and may remain visible permanently. Please consider this characteristic before submitting data that could be linked to your identity.</p>
                </section>

                <section id="children" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">11. Children and minors</h2>
                    <p class="text-slate-300 leading-relaxed">Our services are not directed to children under the age threshold defined by applicable law. If you believe a minor has provided personal information, contact us and we will take appropriate steps to review and address the issue.</p>
                </section>

                <section id="changes" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">12. Changes to this policy</h2>
                    <p class="text-slate-300 leading-relaxed">We may update this policy periodically to reflect legal, technical, or operational changes. Material updates will be published on this page with a revised "Last Updated" date.</p>
                </section>

                <section id="contact" class="policy-section">
                    <h2 class="heading-font text-3xl font-bold text-white mb-4">13. Contact details</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">For privacy questions, rights requests, or data protection concerns, contact:</p>
                    <div class="rounded-xl border border-cyan-400/20 bg-cyan-400/5 p-5">
                        <div class="grid sm:grid-cols-2 gap-3">
                            <a href="mailto:support@blockaisolution.com" class="rounded-lg border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                                <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400 mb-2">Privacy Team</p>
                                <p class="text-cyan-300 font-semibold break-all">support@blockaisolution.com</p>
                            </a>
                            <a href="mailto:legal@blockaisolution.com" class="rounded-lg border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                                <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400 mb-2">Legal</p>
                                <p class="text-cyan-300 font-semibold break-all">legal@blockaisolution.com</p>
                            </a>
                        </div>
                        <div class="mt-3 rounded-lg border border-white/10 bg-white/5 p-4">
                            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400 mb-2">Website</p>
                            <a href="https://blockaisolution.com" class="text-cyan-300 font-semibold hover:text-cyan-200 transition">https://blockaisolution.com</a>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="terms.php" class="hover:text-white transition">Terms of Service</a>
                <a href="contact.php" class="hover:text-white transition">Contact</a>
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
            </div>
        </div>
    </footer>
</body>
</html>
