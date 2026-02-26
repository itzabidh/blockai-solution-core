<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solution | Advanced Decentralized AI & Crypto Ecosystem</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        :root { 
            --main-bg: #0C0C14; 
            --primary-blue: #00d4ff; 
            --primary-purple: #7000ff; 
            --accent-light: #5effc4; 
        }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--main-bg); 
            color: #e6edf3; 
            margin: 0; 
            padding: 0; 
            overflow-x: hidden;
        }
        .heading-font { font-family: 'Space Grotesk', sans-serif; }
        
        .ocean-glass { 
            background: rgba(255, 255, 255, 0.02); 
            backdrop-filter: blur(25px); 
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.08); 
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.6);
        }

        .gradient-bg-hero {
            background: radial-gradient(circle at 50% 50%, rgba(112, 0, 255, 0.15) 0%, rgba(0, 0, 0, 0.6) 80%), 
                        linear-gradient(180deg, var(--main-bg) 0%, #06060c 100%);
        }
        
        .neon-gradient-text {
            background: linear-gradient(90deg, var(--primary-blue), var(--primary-purple));
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
            pointer-events: none;
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
            100% { transform: translateX(-50%); } 
        }
        .crypto-ticker-container { overflow: hidden; white-space: nowrap; width: 100%; }
        .crypto-ticker-item { display: inline-block; animation: scroll-left 40s linear infinite; }
    </style>
</head>
<body class="relative">

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
                <a href="#how-it-works" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">How it Works</a>
                <a href="services.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Marketplace</a>
                <a href="#roadmap" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Roadmap</a>
                <a href="contact.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Contact</a>
                <a href="login.php" class="px-5 py-2 rounded-full border border-cyan-400 text-cyan-400 text-sm font-bold hover:bg-cyan-400 hover:text-black transition">Join BlockAI</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center pt-24 pb-16 gradient-bg-hero">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <div class="inline-block px-4 py-1.5 mb-6 border border-cyan-400/30 rounded-full bg-cyan-400/5">
                <span class="text-cyan-400 text-xs font-bold tracking-widest uppercase">The Future of AI is Decentralized</span>
            </div>
            <h1 class="heading-font text-5xl md:text-8xl font-extrabold text-white mb-6 leading-tight">
                Pioneering <span class="neon-gradient-text">Decentralized Intelligence</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light">
                Empowering the next generation of AI through blockchain. Secure, transparent, and autonomous ecosystem for global intelligence.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="login.php" class="bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:scale-105 transition">Explore Solutions</a>
                <a href="contact.php" class="ocean-glass px-10 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 transition">Whitepaper</a>
            </div>
        </div>
    </header>

    <section class="bg-gray-900/50 py-4 border-y border-white/5 relative z-20 overflow-hidden">
        <div class="crypto-ticker-container">
            <div class="crypto-ticker-item text-sm font-medium">
                <span class="text-slate-400">BTC <span class="text-green-400">$68,500 ▲</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">ETH <span class="text-red-400">$3,800 ▼</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">BLOCKAI <span class="text-cyan-400">$2.45 ▲</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">AGIX <span class="text-green-400">$0.75 ▲</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">OCEAN <span class="text-green-400">$0.92 ▲</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">BTC <span class="text-green-400">$68,500 ▲</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">ETH <span class="text-red-400">$3,800 ▼</span></span><span class="mx-10 text-slate-700">|</span>
                <span class="text-slate-400">BLOCKAI <span class="text-cyan-400">$2.45 ▲</span></span><span class="mx-10 text-slate-700">|</span>
            </div>
        </div>
    </section>

    <section class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">500+</h2>
                    <p class="text-slate-500 uppercase text-xs tracking-widest font-bold">Active Nodes</p>
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">1.2M</h2>
                    <p class="text-slate-500 uppercase text-xs tracking-widest font-bold">Data Assets</p>
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">150+</h2>
                    <p class="text-slate-500 uppercase text-xs tracking-widest font-bold">AI Models</p>
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-2">24/7</h2>
                    <p class="text-slate-500 uppercase text-xs tracking-widest font-bold">Uptime Rate</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 relative z-10" id="services">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="heading-font text-4xl md:text-5xl font-bold text-white mb-4">Core Ecosystem</h2>
                <p class="text-slate-400 max-w-xl mx-auto">Everything you need to build, deploy, and monetize AI in a decentralized world.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-cyan-400/10 rounded-full flex items-center justify-center mb-6 text-cyan-400 text-2xl group-hover:bg-cyan-400 group-hover:text-black transition-all">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <h3 class="heading-font text-2xl font-bold text-white mb-3">AI Research & Dev</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Access bleeding-edge AI models and collaborative research environments with decentralized computing power.</p>
                    <a href="#" class="text-cyan-400 text-xs font-bold uppercase tracking-wider flex items-center">Explore <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i></a>
                </div>
                <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-purple-400/10 rounded-full flex items-center justify-center mb-6 text-purple-400 text-2xl group-hover:bg-purple-400 group-hover:text-black transition-all">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h3 class="heading-font text-2xl font-bold text-white mb-3">Data Monetization</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Securely tokenize and trade your valuable datasets on our marketplace while maintaining 100% privacy.</p>
                    <a href="#" class="text-purple-400 text-xs font-bold uppercase tracking-wider flex items-center">Marketplace <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i></a>
                </div>
                <div class="ocean-glass p-8 rounded-[30px] transition-all hover:-translate-y-2 group">
                    <div class="w-16 h-16 bg-accent-light/10 rounded-full flex items-center justify-center mb-6 text-accent-light text-2xl group-hover:bg-accent-light group-hover:text-black transition-all">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3 class="heading-font text-2xl font-bold text-white mb-3">Autonomous Agents</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Deploy self-executing AI agents for decentralized task automation across multiple chain networks.</p>
                    <a href="#" class="text-accent-light text-xs font-bold uppercase tracking-wider flex items-center">Deploy <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" id="roadmap">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="heading-font text-4xl font-bold text-center text-white mb-16">2026 Roadmap</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="p-8 border-l-2 border-cyan-400 bg-white/5">
                    <p class="text-cyan-400 font-bold mb-2">Q1 2026</p>
                    <h4 class="text-white font-bold mb-3">Foundation</h4>
                    <p class="text-slate-500 text-xs">Mainnet Launch & Node Provider onboarding.</p>
                </div>
                <div class="p-8 border-l-2 border-purple-400 bg-white/5">
                    <p class="text-purple-400 font-bold mb-2">Q2 2026</p>
                    <h4 class="text-white font-bold mb-3">Expansion</h4>
                    <p class="text-slate-500 text-xs">Decentralized GPU Cluster integration.</p>
                </div>
                <div class="p-8 border-l-2 border-accent-light bg-white/5">
                    <p class="text-accent-light font-bold mb-2">Q3 2026</p>
                    <h4 class="text-white font-bold mb-3">Ecosystem</h4>
                    <p class="text-slate-500 text-xs">Public AI Marketplace Beta release.</p>
                </div>
                <div class="p-8 border-l-2 border-slate-700 bg-white/5 opacity-50">
                    <p class="text-slate-700 font-bold mb-2">Q4 2026</p>
                    <h4 class="text-white font-bold mb-3">Governance</h4>
                    <p class="text-slate-500 text-xs">Full DAO implementation & Token burn.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#06060c] pt-20 pb-10 border-t border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-slate-500 text-xs font-bold tracking-widest uppercase mb-4">
                &copy; <?php echo date("Y"); ?> BLOCKAI SOLUTION | ALL RIGHTS RESERVED.
            </p>
            <div class="flex items-center justify-center space-x-2 text-[10px] text-slate-500 uppercase">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span>System Status: Online</span>
            </div>
        </div>
    </footer>
</body>
</html>
