<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('registration.php', 'registration');

$submitted = false;
$companyName = '';
$contactName = '';
$email = '';
$region = '';
$serviceCategory = '';
$teamSize = '';
$notes = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $companyName = trim((string) ($_POST['company_name'] ?? ''));
    $contactName = trim((string) ($_POST['contact_name'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $region = trim((string) ($_POST['region'] ?? ''));
    $serviceCategory = trim((string) ($_POST['service_category'] ?? ''));
    $teamSize = trim((string) ($_POST['team_size'] ?? ''));
    $notes = trim((string) ($_POST['notes'] ?? ''));

    $submitted = $companyName !== '' && $contactName !== '' && $email !== '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Vendor Registration | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-black text-indigo-600">BlockAI <span class="text-slate-400 font-light">Solution</span></a>
            <div class="hidden md:flex items-center gap-6 text-sm font-bold">
                <a href="index.php" class="text-slate-600 hover:text-indigo-600">Home</a>
                <a href="services.php" class="text-slate-600 hover:text-indigo-600">Services</a>
                <a href="vendor_list.php" class="text-slate-600 hover:text-indigo-600">Vendor Directory</a>
                <a href="contact.php" class="text-slate-600 hover:text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <header class="bg-gradient-to-r from-indigo-900 to-slate-900 text-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <p class="text-xs uppercase tracking-[0.2em] text-indigo-200 mb-3 font-bold">Partner Program</p>
            <h1 class="text-4xl md:text-5xl font-black mb-4">Apply to Join the BlockAI Vendor Network</h1>
            <p class="text-indigo-100 max-w-3xl">Become a verified provider for enterprise AI initiatives and connect with clients that need compliant, high-performance delivery teams.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto py-14 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-200 shadow-sm p-8">
                <h2 class="text-2xl font-black mb-6">Vendor Intake Form</h2>

                <?php if ($submitted): ?>
                    <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 p-4">
                        <p class="font-bold text-emerald-800 mb-1">Application received</p>
                        <p class="text-sm text-emerald-700">Thank you, <?= htmlspecialchars($contactName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>. Our partnerships team will review <?= htmlspecialchars($companyName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> and contact you at <?= htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>.</p>
                    </div>
                <?php endif; ?>

                <form method="POST" action="registration.php" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Company Name *</label>
                        <input type="text" name="company_name" value="<?= htmlspecialchars($companyName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Primary Contact *</label>
                        <input type="text" name="contact_name" value="<?= htmlspecialchars($contactName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Business Email *</label>
                        <input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Headquarters Region</label>
                        <select name="region" class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">Select region</option>
                            <option value="Europe" <?= $region === 'Europe' ? 'selected' : '' ?>>Europe</option>
                            <option value="North America" <?= $region === 'North America' ? 'selected' : '' ?>>North America</option>
                            <option value="Asia Pacific" <?= $region === 'Asia Pacific' ? 'selected' : '' ?>>Asia Pacific</option>
                            <option value="Middle East and Africa" <?= $region === 'Middle East and Africa' ? 'selected' : '' ?>>Middle East and Africa</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Primary Service Category</label>
                        <select name="service_category" class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">Select category</option>
                            <option value="ML Models" <?= $serviceCategory === 'ML Models' ? 'selected' : '' ?>>ML Models</option>
                            <option value="Conversational AI" <?= $serviceCategory === 'Conversational AI' ? 'selected' : '' ?>>Conversational AI</option>
                            <option value="AI Compliance" <?= $serviceCategory === 'AI Compliance' ? 'selected' : '' ?>>AI Compliance</option>
                            <option value="Data Insights" <?= $serviceCategory === 'Data Insights' ? 'selected' : '' ?>>Data Insights</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Team Size</label>
                        <select name="team_size" class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">Select team size</option>
                            <option value="1-10" <?= $teamSize === '1-10' ? 'selected' : '' ?>>1-10</option>
                            <option value="11-50" <?= $teamSize === '11-50' ? 'selected' : '' ?>>11-50</option>
                            <option value="51-200" <?= $teamSize === '51-200' ? 'selected' : '' ?>>51-200</option>
                            <option value="200+" <?= $teamSize === '200+' ? 'selected' : '' ?>>200+</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500">Capabilities and Certifications</label>
                        <textarea name="notes" rows="4" class="mt-2 w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"><?= htmlspecialchars($notes, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl transition">Submit Vendor Application</button>
                    </div>
                </form>
            </div>

            <aside class="space-y-5">
                <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
                    <h3 class="font-black text-lg mb-4">What happens next?</h3>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Application review within 3 business days</span></li>
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Compliance and delivery capability screening</span></li>
                        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-indigo-600 mt-1"></i><span>Onboarding call with partnerships manager</span></li>
                    </ul>
                </div>
                <div class="bg-slate-900 text-white rounded-3xl p-6">
                    <p class="text-xs uppercase tracking-[0.2em] text-indigo-300 mb-2 font-bold">Need help first?</p>
                    <h3 class="text-2xl font-black mb-3">Talk to Partnerships</h3>
                    <p class="text-slate-300 text-sm mb-5">If you have questions about eligibility or technical requirements, our team can guide you before submission.</p>
                    <a href="contact.php" class="inline-flex items-center text-sm font-bold text-indigo-300 hover:text-white">Contact partnerships team <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                </div>
            </aside>
        </div>
    </main>

    <footer class="py-8 text-center text-xs uppercase tracking-widest text-slate-500 border-t border-slate-200 bg-white">
        &copy; <?= date('Y') ?> BlockAI Solution | Partner Operations
    </footer>
</body>
</html>
