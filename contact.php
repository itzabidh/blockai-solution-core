<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('contact.php', 'contact');

$currentYear = (int) date('Y');
$isSubmitted = false;
$isSuccess = false;
$errors = [];
$validInquiryTypes = [
    'general' => 'General Inquiry',
    'vendor' => 'Vendor Registration',
    'partnership' => 'Enterprise Partnership',
    'security' => 'Security and Compliance',
    'media' => 'Media and PR',
];

$formData = [
    'full_name' => '',
    'email' => '',
    'company' => '',
    'inquiry_type' => 'general',
    'message' => '',
    'website' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isSubmitted = true;
    $formData['full_name'] = trim((string) ($_POST['full_name'] ?? ''));
    $formData['email'] = trim((string) ($_POST['email'] ?? ''));
    $formData['company'] = trim((string) ($_POST['company'] ?? ''));
    $formData['inquiry_type'] = trim((string) ($_POST['inquiry_type'] ?? 'general'));
    $formData['message'] = trim((string) ($_POST['message'] ?? ''));
    $formData['website'] = trim((string) ($_POST['website'] ?? '')); // Honeypot field

    if ($formData['website'] !== '') {
        $errors[] = 'Unable to process your request at this time.';
    }
    if ($formData['full_name'] === '' || strlen($formData['full_name']) < 2) {
        $errors[] = 'Please enter your full name.';
    }
    if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid business email address.';
    }
    if (!array_key_exists($formData['inquiry_type'], $validInquiryTypes)) {
        $errors[] = 'Please select a valid inquiry type.';
    }
    if ($formData['message'] === '' || strlen($formData['message']) < 20) {
        $errors[] = 'Please provide a short message (at least 20 characters).';
    }

    if ($errors === []) {
        $isSuccess = true;
        error_log('[BlockAI Contact] New inquiry submitted: ' . json_encode([
            'full_name' => $formData['full_name'],
            'email' => $formData['email'],
            'company' => $formData['company'],
            'inquiry_type' => $formData['inquiry_type'],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }
}

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
                        <i class="fa-solid fa-envelope text-white text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="leading-tight">
                        <p class="heading-font text-lg font-bold text-white">BlockAI Solution</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-200">Enterprise Contact</p>
                    </div>
                </a>
                <div class="hidden md:flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.14em]">
                    <a href="index.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Home</a>
                    <a href="services.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Services</a>
                    <a href="whitepaper.php" class="px-3 py-2 rounded-lg border border-white/15 text-slate-300 hover:text-white hover:border-white/30 transition">Whitepaper</a>
                    <a href="/auth/" class="px-3 py-2 rounded-lg bg-gradient-to-r from-cyan-500 to-purple-600 text-white">Client Login</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-28 pb-12 border-b border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <p class="text-[11px] uppercase tracking-[0.25em] text-cyan-300 font-semibold mb-4">Contact and Support</p>
            <h1 class="heading-font text-4xl md:text-6xl font-bold leading-[1.06] max-w-4xl text-white mb-5">
                Connect with the BlockAI Business and Platform Teams
            </h1>
            <p class="text-slate-300 text-lg max-w-3xl leading-relaxed">
                Reach us for enterprise deployments, vendor onboarding, governance inquiries, and technical support. We route every request to the right team quickly.
            </p>
            <div class="grid sm:grid-cols-3 gap-4 mt-8 max-w-5xl">
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Response SLA</p>
                    <p class="text-xl font-bold text-white">1 Business Day</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Coverage</p>
                    <p class="text-xl font-bold text-white">Global Team</p>
                </div>
                <div class="panel rounded-xl p-4">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-1">Primary Email</p>
                    <p class="text-xl font-bold text-cyan-300">support@blockaisolution.com</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1280px] mx-auto px-6 lg:px-8 py-12 lg:py-14">
        <div class="grid lg:grid-cols-5 gap-8">
            <section class="lg:col-span-2 space-y-5">
                <div class="panel rounded-2xl p-6">
                    <h2 class="heading-font text-2xl font-bold text-white mb-4">Direct channels</h2>
                    <div class="space-y-3">
                        <a href="mailto:support@blockaisolution.com" class="block rounded-xl border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Support Team</p>
                            <p class="text-cyan-300 font-semibold break-all">support@blockaisolution.com</p>
                        </a>
                        <a href="mailto:legal@blockaisolution.com" class="block rounded-xl border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Legal and Compliance</p>
                            <p class="text-cyan-300 font-semibold break-all">legal@blockaisolution.com</p>
                        </a>
                        <a href="mailto:careers@blockaisolution.com" class="block rounded-xl border border-white/10 bg-white/5 p-4 hover:border-cyan-300/40 transition">
                            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-400 mb-2">Careers</p>
                            <p class="text-cyan-300 font-semibold break-all">careers@blockaisolution.com</p>
                        </a>
                    </div>
                </div>
                <div class="panel rounded-2xl p-6">
                    <h3 class="heading-font text-xl font-bold text-white mb-3">How we handle inquiries</h3>
                    <ul class="space-y-3 text-sm text-slate-300">
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Request triage by topic and urgency.</span></li>
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Routing to technical, partnerships, or legal specialists.</span></li>
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-300 mt-0.5"></i><span>Structured follow-up with recommended next steps.</span></li>
                    </ul>
                </div>
            </section>

            <section class="lg:col-span-3 panel rounded-2xl p-6 md:p-8">
                <h2 class="heading-font text-3xl font-bold text-white mb-2">Send an inquiry</h2>
                <p class="text-slate-400 mb-6">Tell us about your goals and we will connect you with the right team.</p>

                <?php if ($isSubmitted && !$isSuccess): ?>
                    <div class="mb-5 rounded-xl border border-rose-400/30 bg-rose-400/10 p-4">
                        <p class="text-sm font-semibold text-rose-200 mb-2">Please review the form before submitting:</p>
                        <ul class="list-disc ml-5 text-sm text-rose-100 space-y-1">
                            <?php foreach ($errors as $error): ?>
                                <li><?= escapeHtml($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ($isSuccess): ?>
                    <div class="mb-5 rounded-xl border border-emerald-400/30 bg-emerald-400/10 p-4">
                        <p class="text-sm font-semibold text-emerald-200">Thank you, <?= escapeHtml($formData['full_name']) ?>. Your request has been received and our team will contact you shortly.</p>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-xs font-semibold uppercase tracking-[0.14em] text-slate-400 mb-2">Full Name *</label>
                        <input id="full_name" name="full_name" type="text" required value="<?= escapeHtml($formData['full_name']) ?>" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-cyan-300/60">
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-[0.14em] text-slate-400 mb-2">Business Email *</label>
                        <input id="email" name="email" type="email" required value="<?= escapeHtml($formData['email']) ?>" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-cyan-300/60">
                    </div>
                    <div>
                        <label for="company" class="block text-xs font-semibold uppercase tracking-[0.14em] text-slate-400 mb-2">Company</label>
                        <input id="company" name="company" type="text" value="<?= escapeHtml($formData['company']) ?>" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-cyan-300/60">
                    </div>
                    <div>
                        <label for="inquiry_type" class="block text-xs font-semibold uppercase tracking-[0.14em] text-slate-400 mb-2">Inquiry Type *</label>
                        <select id="inquiry_type" name="inquiry_type" required class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-white focus:outline-none focus:border-cyan-300/60">
                            <?php foreach ($validInquiryTypes as $value => $label): ?>
                                <option value="<?= escapeHtml($value) ?>" <?= $formData['inquiry_type'] === $value ? 'selected' : '' ?>><?= escapeHtml($label) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="hidden">
                        <label for="website">Website</label>
                        <input id="website" type="text" name="website" value="">
                    </div>
                    <div class="md:col-span-2">
                        <label for="message" class="block text-xs font-semibold uppercase tracking-[0.14em] text-slate-400 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-cyan-300/60"><?= escapeHtml($formData['message']) ?></textarea>
                    </div>
                    <div class="md:col-span-2 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-1">
                        <p class="text-xs text-slate-400">By submitting this form, you agree to our <a href="privacy-policy.php" class="text-cyan-300 hover:text-cyan-200">Privacy Policy</a> and <a href="terms.php" class="text-cyan-300 hover:text-cyan-200">Terms</a>.</p>
                        <button type="submit" class="inline-flex items-center px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-sm font-semibold uppercase tracking-[0.12em] text-white hover:shadow-[0_0_24px_rgba(34,211,238,0.35)] transition">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer class="py-10 border-t border-white/10">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="text-[11px] uppercase tracking-[0.2em] text-slate-500">&copy; <?= escapeHtml($currentYear) ?> BlockAI Solution Core</p>
            <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400">
                <a href="services.php" class="hover:text-white transition">Services</a>
                <a href="registration.php" class="hover:text-white transition">Vendor Registration</a>
                <a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a>
                <a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>
</body>
</html>
