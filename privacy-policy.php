<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --main-bg: #0C0C14; --primary-blue: #00d4ff; --primary-purple: #7000ff; }
        body { font-family: 'Inter', sans-serif; background-color: var(--main-bg); color: #e6edf3; }
        .heading-font { font-family: 'Space Grotesk', sans-serif; }
        .ocean-glass { 
            background: rgba(255, 255, 255, 0.02); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
        .policy-content h2 { color: #00d4ff; font-family: 'Space Grotesk', sans-serif; font-size: 1.5rem; font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; }
        .policy-content p { color: #94a3b8; line-height: 1.8; margin-bottom: 1.2rem; }
        .policy-content ul { list-style-type: disc; margin-left: 1.5rem; color: #94a3b8; margin-bottom: 1.2rem; }
    </style>
</head>
<body class="overflow-x-hidden">

    <nav class="fixed w-full z-50 backdrop-blur-md border-b border-white/5 bg-black/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                    <i class="fa-solid fa-brain text-white text-lg"></i>
                </div>
                <span class="heading-font text-2xl font-extrabold tracking-tight text-white uppercase">BlockAI</span>
            </a>
            <a href="index.php" class="text-sm font-bold uppercase tracking-wide text-cyan-400 hover:text-white transition">Back to Home</a>
        </div>
    </nav>

    <header class="pt-40 pb-20 bg-gradient-to-b from-purple-900/10 to-transparent">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="heading-font text-5xl md:text-6xl font-extrabold text-white mb-6">Privacy <span class="text-cyan-400">Policy</span></h1>
            <p class="text-slate-400">Last Updated: <?php echo date("F d, Y"); ?></p>
        </div>
    </header>

    <main class="pb-24">
        <div class="max-w-4xl mx-auto px-6">
            <div class="ocean-glass p-8 md:p-12 rounded-[40px] policy-content">
                
                <p>Welcome to <strong>BlockAI Solution</strong>. We are committed to protecting your privacy and ensuring that your personal and cryptographic data is handled securely and transparently. This Privacy Policy outlines how we collect, use, and safeguard your information when you interact with our decentralized AI ecosystem.</p>

                <h2>1. Information We Collect</h2>
                <p>To provide our services, we may collect the following types of information:</p>
                <ul>
                    <li><strong>Public Wallet Addresses:</strong> We collect your public blockchain address to facilitate transactions and smart contract interactions.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, and device information for security and optimization.</li>
                    <li><strong>Usage Data:</strong> Information on how you interact with our AI models and marketplace.</li>
                    <li><strong>Communications:</strong> If you contact us directly, we may receive your email address and the content of your message.</li>
                </ul>

                <h2>2. How We Use Your Information</h2>
                <p>We use the collected data for the following purposes:</p>
                <ul>
                    <li>To operate and maintain the BlockAI ecosystem.</li>
                    <li>To process transactions and reward distributions in BLOCKAI tokens.</li>
                    <li>To improve our AI algorithms and user experience.</li>
                    <li>To prevent fraudulent activities and ensure network security.</li>
                </ul>

                <h2>3. Data Protection & Decentralization</h2>
                <p>Unlike traditional platforms, <strong>BlockAI Solution</strong> leverages decentralized protocols. This means:</p>
                <ul>
                    <li>We do not store your private keys or seed phrases. You are solely responsible for your wallet security.</li>
                    <li>Where possible, we use Zero-Knowledge Proofs (ZKP) to verify data without exposing the underlying information.</li>
                    <li>Encryption is applied to all data assets traded on our marketplace.</li>
                </ul>

                <h2>4. Cookies and Tracking</h2>
                <p>We use essential cookies to maintain your session and analyze site traffic via privacy-focused analytics tools. You can disable cookies in your browser settings, but some features of the platform may not function correctly.</p>

                <h2>5. Third-Party Services</h2>
                <p>Our ecosystem may interact with third-party blockchains (e.g., Ethereum, Polygon). Please note that these networks are public, and transactions are visible to everyone. We are not responsible for the privacy practices of external blockchain networks or third-party wallets.</p>

                <h2>6. Your Rights (GDPR & CCPA)</h2>
                <p>Depending on your location, you may have the right to access, rectify, or delete your personal data. Since blockchain data is immutable, some information (like transaction history) cannot be altered or deleted once recorded on the chain.</p>

                <h2>7. Changes to This Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date.</p>

                <h2>8. Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                <div class="bg-white/5 p-6 rounded-2xl border border-white/10">
                    <p class="mb-0 text-white"><strong>Email:</strong> support@blockaisolution.com</p>
                    <p class="mb-0 text-white"><strong>Website:</strong> www.blockaisolution.com</p>
                </div>

            </div>
        </div>
    </main>

    <footer class="py-10 border-t border-white/5 text-center">
        <p class="text-[10px] text-slate-500 font-bold tracking-widest uppercase">
            &copy; <?php echo date("Y"); ?> BLOCKAI SOLUTION | ALL RIGHTS RESERVED.
        </p>
    </footer>

</body>
</html>
