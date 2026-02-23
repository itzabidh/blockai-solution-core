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
        :root { --main-bg: #0C0C14; --primary-blue: #00d4ff; --primary-purple: #7000ff; --accent-light: #5effc4; }
        body { font-family: 'Inter', sans-serif; background-color: var(--main-bg); color: #e6edf3; margin: 0; padding: 0; }
        .heading-font { font-family: 'Space Grotesk', sans-serif; }
        
        .ocean-glass { 
            background: rgba(255, 255, 255, 0.02); 
            backdrop-filter: blur(25px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.6);
        }

        .gradient-bg-hero {
            background: radial-gradient(circle at 50% 50%, rgba(112, 0, 255, 0.15) 0%, rgba(0, 0, 0, 0.6) 80%), 
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

        @keyframes scroll-left { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .crypto-ticker-container { overflow: hidden; white-space: nowrap; width: 100%; }
        .crypto-ticker-item { display: inline-block; animation: scroll-left 40s linear infinite; }
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

    <section class="py-24 bg-black/30" id="how-it-works">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="heading-font text-4xl md:text-5xl font-bold text-white mb-8">How BlockAI <br><span class="text-cyan-400">Transforms</span> Industries</h2>
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="flex-none w-12 h-12 rounded-full border border-cyan-400 flex items-center justify-center text-cyan-400 font-bold">1</div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Connect Your Wallet</h4>
                                <p class="text-slate-400 text-sm">Integrate your Web3 identity to access our decentralized AI nodes and global compute network.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-none w-12 h-12 rounded-full border border-purple-400 flex items-center justify-center text-purple-400 font-bold">2</div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Select AI Model</h4>
                                <p class="text-slate-400 text-sm">Choose from thousands of pre-trained models or upload your own dataset for secure training.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-none w-12 h-12 rounded-full border border-accent-light flex items-center justify-center text-accent-light font-bold">3</div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Execution & Reward</h4>
                                <p class="text-slate-400 text-sm">Smart contracts handle the execution and ensure you get paid in BLOCKAI tokens instantly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="ocean-glass p-2 rounded-[40px] rotate-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=800" alt="AI Visualization" class="rounded-[35px] opacity-80 group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="absolute -bottom-10 -left-10 ocean-glass p-6 rounded-2xl hidden md:block animate-bounce">
                        <p class="text-xs font-bold text-cyan-400 mb-1">Live Deployment</p>
                        <p class="text-white text-lg font-bold">Model #429 Active</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" id="roadmap">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="heading-font text-4xl font-bold text-center text-white mb-16">2026 Roadmap</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
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
                <div class="p-8 border-l-2 border-accent-light bg-white/5 opacity-50">
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

    <section class="py-24 bg-black/20">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="heading-font text-4xl font-bold text-center text-white mb-16">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <details class="ocean-glass p-6 rounded-2xl group cursor-pointer" open>
                    <summary class="text-white font-bold flex justify-between items-center list-none">
                        Is my data secure with BlockAI?
                        <i class="fa-solid fa-plus group-open:rotate-45 transition"></i>
                    </summary>
                    <p class="text-slate-400 text-sm mt-4 leading-relaxed">Yes, we use Fully Homomorphic Encryption (FHE) to ensure that your data is never decrypted during the AI training process on our nodes.</p>
                </details>
                <details class="ocean-glass p-6 rounded-2xl group cursor-pointer">
                    <summary class="text-white font-bold flex justify-between items-center list-none">
                        How can I earn rewards?
                        <i class="fa-solid fa-plus group-open:rotate-45 transition"></i>
                    </summary>
                    <p class="text-slate-400 text-sm mt-4 leading-relaxed">You can earn BLOCKAI tokens by providing computing power (Node), contributing high-quality datasets, or developing AI models for the marketplace.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="bg-gradient-to-r from-cyan-600/20 to-purple-600/20 rounded-[40px] p-12 md:p-20 border border-white/10 text-center">
                <h2 class="heading-font text-4xl md:text-6xl font-bold text-white mb-8">Ready to join the AI <br>Revolution?</h2>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <button class="bg-white text-black px-12 py-4 rounded-full font-bold hover:bg-cyan-400 transition">Get Started Now</button>
                    <button class="border border-white/20 text-white px-12 py-4 rounded-full font-bold hover:bg-white/10 transition">Read Docs</button>
                </div>
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
                    <p class="text-slate-400 text-sm leading-relaxed">The world's first decentralized ecosystem for AI models, datasets, and compute power.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-discord"></i></a>
                        <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Ecosystem</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="services.php" class="hover:text-cyan-400 transition">Marketplace</a></li>
                        <li><a href="governance.php" class="hover:text-cyan-400 transition">Governance</a></li>
                        <li><a href="whitepaper.php" class="hover:text-cyan-400 transition">Whitepaper</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Node Setup</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Company</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="case-studies.php" class="hover:text-cyan-400 transition">Insights</a></li>
                        <li><a href="contact.php" class="hover:text-cyan-400 transition">Contact</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Careers</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Newsletter</h4>
                    <form class="space-y-3">
                        <input type="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white outline-none focus:border-cyan-400 transition">
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
