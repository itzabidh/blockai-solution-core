<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solution | Dynamic AI & Crypto Ecosystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --main-bg: #0C0C14; --primary-blue: #00d4ff; --primary-purple: #7000ff; --accent-light: #5effc4; }
        body { font-family: 'Inter', sans-serif; background-color: var(--main-bg); color: #e6edf3; margin: 0; padding: 0; }
        .heading-font { font-family: 'Space Grotesk', sans-serif; }
        
        .ocean-glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(25px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.6);
        }

        .gradient-bg-hero {
            background: radial-gradient(circle at 50% 50%, rgba(112, 0, 255, 0.2) 0%, rgba(0, 0, 0, 0.6) 80%), 
                        linear-gradient(180deg, var(--main-bg) 0%, #06060c 100%);
        }
        
        .neon-gradient-text {
            background-image: linear-gradient(90deg, var(--primary-blue), var(--primary-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-element {
            position: absolute;
            background: var(--primary-blue);
            border-radius: 50%;
            opacity: 0.1;
            animation: pulse 15s infinite ease-in-out alternate;
            z-index: 0;
        }
        .bg-element-1 { top: 10%; left: 5%; width: 300px; height: 300px; }
        .bg-element-2 { bottom: 15%; right: 10%; width: 400px; height: 400px; background: var(--primary-purple); }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.1; }
            50% { transform: scale(1.2); opacity: 0.2; }
            100% { transform: scale(1); opacity: 0.1; }
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        .crypto-ticker-container { overflow: hidden; white-space: nowrap; width: 100%; }
        .crypto-ticker-item { display: inline-block; animation: scroll-left 30s linear infinite; }
    </style>
</head>
<body class="overflow-x-hidden relative">

    <div class="bg-element bg-element-1"></div>
    <div class="bg-element bg-element-2"></div>

    <nav class="fixed w-full z-50 backdrop-blur-md border-b border-white/5 bg-black/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                    <i class="fa-solid fa-brain text-white text-lg"></i>
                </div>
                <span class="heading-font text-2xl font-extrabold tracking-tight text-white uppercase">BlockAI</span>
            </a>
            
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="text-sm font-bold uppercase tracking-wide text-cyan-400">Network</a>
                <a href="services.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Insights</a>
                <a href="contact.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Contact</a>
                <a href="registration.php" class="px-5 py-2 rounded-full border border-cyan-400 text-cyan-400 text-sm font-bold hover:bg-cyan-400 hover:text-black transition">Join BlockAI</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center pt-24 pb-16 gradient-bg-hero">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <h1 class="heading-font text-5xl md:text-8xl font-extrabold text-white mb-6 leading-tight">
                Pioneering <span class="neon-gradient-text">Decentralized Intelligence</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light">
                A secure, transparent, and autonomous ecosystem for AI algorithms, data assets, and intelligent agents.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="services.php" class="bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:scale-105 transition">Explore Solutions</a>
                <a href="contact.php" class="ocean-glass px-10 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 transition">Get in Touch</a>
            </div>
        </div>
    </header>

    <section class="bg-gray-900 py-4 border-y border-white/5 relative z-20 overflow-hidden">
        <div class="crypto-ticker-container">
            <div class="crypto-ticker-item text-sm font-medium">
                <span class="text-slate-400 uppercase">BTC</span> <span class="text-green-400 ml-1">$68,500 ▲</span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-slate-400 uppercase">ETH</span> <span class="text-red-400 ml-1">$3,800 ▼</span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-slate-400 uppercase">AGIX</span> <span class="text-green-400 ml-1">$0.75 ▲</span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-slate-400 uppercase">OCEAN</span> <span class="text-green-400 ml-1">$0.92 ▲</span>
                <span class="mx-16"></span>
                <span class="text-slate-400 uppercase">BTC</span> <span class="text-green-400 ml-1">$68,500 ▲</span>
            </div>
        </div>
    </section>

    <section class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-cyan-400/10 rounded-full flex items-center justify-center mb-6 text-cyan-400 text-2xl">
                    <i class="fa-solid fa-flask"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">AI Research & Dev</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Access bleeding-edge AI models and collaborative research environments.</p>
            </div>
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-purple-400/10 rounded-full flex items-center justify-center mb-6 text-purple-400 text-2xl">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Data Monetization</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Securely tokenize and trade your valuable datasets on our marketplace.</p>
            </div>
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-accent-light/10 rounded-full flex items-center justify-center mb-6 text-accent-light text-2xl">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Autonomous Agents</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Deploy self-executing AI agents for decentralized task automation.</p>
            </div>
        </div>
    </section>

    <footer class="bg-[#06060c] pt-20 pb-10 border-t border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="space-y-6">
                    <div class="flex items-center space-x-3 text-white uppercase font-extrabold text-2xl heading-font">
                        <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                            <i class="fa-solid fa-brain text-white text-xs"></i>
                        </div>
                        <span>BlockAI</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">The world's first decentralized ecosystem for AI models.</p>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Ecosystem</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="services.php" class="hover:text-cyan-400 transition">Marketplace</a></li>
                        <li><a href="governance.php" class="hover:text-cyan-400 transition">Governance</a></li>
                        <li><a href="whitepaper.php" class="hover:text-cyan-400 transition">Whitepaper</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Company</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="case-studies.php" class="hover:text-cyan-400 transition">Insights</a></li>
                        <li><a href="contact.php" class="hover:text-cyan-400 transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Newsletter</h4>
                    <form class="space-y-3">
                        <input type="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white outline-none focus:border-cyan-400">
                        <button type="button" class="w-full bg-cyan-400 text-black font-bold py-3 rounded-xl hover:bg-cyan-300 transition text-sm">Join Now</button>
                    </form>
                </div>
            </div>

            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-[10px] text-slate-500 font-bold tracking-widest uppercase">
                <p>&copy; <?php echo date("Y"); ?> BLOCKAI SOLUTION | ALL RIGHTS RESERVED.</p>
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span>System Status: Online</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
