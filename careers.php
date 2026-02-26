<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('careers.php', 'careers');

$currentYear = (int) date('Y');

$openRoles = [
    [
        'team' => 'Engineering',
        'title' => 'AI and ML Research Engineer',
        'location' => 'Remote',
        'type' => 'Full-Time',
        'level' => 'Senior',
        'summary' => 'Design and optimize production-grade model pipelines, evaluation frameworks, and inference reliability tooling.',
    ],
    [
        'team' => 'Protocol',
        'title' => 'Smart Contract Security Engineer',
        'location' => 'Remote',
        'type' => 'Full-Time',
        'level' => 'Mid-Senior',
        'summary' => 'Build and audit core governance and settlement contracts with an emphasis on safety and upgrade discipline.',
    ],
    [
        'team' => 'Enterprise Programs',
        'title' => 'Solutions Architect',
        'location' => 'London / Remote',
        'type' => 'Full-Time',
        'level' => 'Senior',
        'summary' => 'Lead customer solution design from discovery to rollout across compliance-sensitive enterprise environments.',
    ],
    [
        'team' => 'Growth',
        'title' => 'Developer Community Lead',
        'location' => 'Global',
        'type' => 'Part-Time',
        'level' => 'Mid-Level',
        'summary' => 'Scale technical community programs, partner education tracks, and ecosystem collaboration initiatives.',
    ],
];

$benefits = [
    ['title' => 'Remote-first operating model', 'description' => 'Work from where you perform best, supported by async-first collaboration and clear ownership.'],
    ['title' => 'Learning and conference support', 'description' => 'Dedicated annual budget for technical growth, certifications, and industry events.'],
    ['title' => 'High-impact ownership', 'description' => 'Contribute directly to platform direction, architecture decisions, and cross-functional execution.'],
    ['title' => 'Flexible compensation options', 'description' => 'Compensation packages include local payroll support and digital asset options where applicable.'],
];

$hiringProcess = [
    ['step' => 'Step 1', 'title' => 'Introductory Call', 'description' => 'Mutual fit conversation with talent team on mission, scope, and role expectations.'],
    ['step' => 'Step 2', 'title' => 'Technical and Functional Interview', 'description' => 'Role-specific deep dive focused on decision-making quality, collaboration, and execution capability.'],
    ['step' => 'Step 3', 'title' => 'Practical Assessment', 'description' => 'Small scoped case or technical exercise aligned to real business context.'],
    ['step' => 'Step 4', 'title' => 'Leadership Discussion', 'description' => 'Final conversation on long-term alignment, responsibilities, and growth path.'],
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
    <title>Careers | BlockAI Solution</title>
    <meta name="description" content="Join BlockAI Solution and help build enterprise-grade AI infrastructure, governance systems, and global delivery programs.">
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
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Careers</p>
                    </div>
                </a>
                <div class="hidden md:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="about.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">About</a>
                    <a href="contact.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Contact</a>
                    <a href="auth.php" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Client Login</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">People and Culture</p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-5xl text-white mb-5">
                Build the Future of Enterprise AI with a Team That Ships with Purpose
            </h1>
            <p class="text-slate-300 text-lg max-w-4xl leading-relaxed">
                We are building the operational layer for enterprise AI adoption across global markets. If you thrive in high-ownership environments where technical quality and business impact both matter, we would love to meet you.
            </p>
            <div class="grid sm:grid-cols-3 gap-4 mt-8 max-w-4xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Open Roles</p>
                    <p class="text-2xl font-bold text-white"><?= escapeHtml(count($openRoles)) ?></p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Operating Model</p>
                    <p class="text-2xl font-bold text-white">Remote-First</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Hiring Response</p>
                    <p class="text-2xl font-bold text-white">&lt; 7 Days</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14 space-y-10">
        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Current openings</p>
                    <h2 class="heading-font text-3xl font-bold text-white">Opportunities across engineering, protocol, and delivery</h2>
                </div>
                <a href="mailto:careers@blockaisolution.com" class="text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">careers@blockaisolution.com</a>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <?php foreach ($openRoles as $role): ?>
                    <article class="rounded-xl border border-white/10 bg-white/5 p-5">
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2"><?= escapeHtml($role['team']) ?></p>
                        <h3 class="text-xl font-bold text-white mb-3"><?= escapeHtml($role['title']) ?></h3>
                        <p class="text-sm text-slate-300 leading-relaxed mb-4"><?= escapeHtml($role['summary']) ?></p>
                        <div class="flex flex-wrap items-center gap-2 mb-4 text-[11px] uppercase tracking-[0.1em]">
                            <span class="px-3 py-1 rounded-full border border-white/15 text-slate-300"><?= escapeHtml($role['location']) ?></span>
                            <span class="px-3 py-1 rounded-full border border-white/15 text-slate-300"><?= escapeHtml($role['type']) ?></span>
                            <span class="px-3 py-1 rounded-full border border-white/15 text-slate-300"><?= escapeHtml($role['level']) ?></span>
                        </div>
                        <a href="mailto:careers@blockaisolution.com?subject=Application%20for%20<?= rawurlencode($role['title']) ?>" class="inline-flex items-center text-sm font-semibold text-cyan-300 hover:text-cyan-200 transition">
                            Apply for this role <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="grid lg:grid-cols-5 gap-6">
            <article class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Why join us</p>
                <h2 class="heading-font text-3xl font-bold text-white mb-5">Benefits designed for high-performance teams</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    <?php foreach ($benefits as $benefit): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <h3 class="text-lg font-semibold text-white mb-2"><?= escapeHtml($benefit['title']) ?></h3>
                            <p class="text-sm text-slate-300 leading-relaxed"><?= escapeHtml($benefit['description']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
            <aside class="lg:col-span-2 panel rounded-2xl p-6 md:p-8">
                <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-3">Hiring process</p>
                <div class="space-y-4">
                    <?php foreach ($hiringProcess as $stage): ?>
                        <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                            <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-1"><?= escapeHtml($stage['step']) ?></p>
                            <h3 class="text-white font-semibold mb-1"><?= escapeHtml($stage['title']) ?></h3>
                            <p class="text-sm text-slate-300"><?= escapeHtml($stage['description']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </aside>
        </section>

        <section class="panel rounded-2xl p-6 md:p-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.2em] text-cyan-300 font-semibold mb-2">Talent network</p>
                    <h2 class="heading-font text-3xl font-bold text-white mb-3">Do not see a perfect match yet?</h2>
                    <p class="text-slate-300 max-w-3xl">We are always open to exceptional people in AI engineering, security, developer relations, and enterprise delivery. Send your profile and areas of interest to join our future hiring pipeline.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="mailto:careers@blockaisolution.com?subject=General%20Application" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_26px_rgba(34,211,238,0.35)] transition">Send CV</a>
                    <a href="about.php" class="px-6 py-3 rounded-xl border border-white/20 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200 hover:bg-white/5 transition">About Us</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="services.php" class="hover:text-white transition">Services</a>
                <a href="about.php" class="hover:text-white transition">About</a>
                <a href="contact.php" class="hover:text-white transition">Contact</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
