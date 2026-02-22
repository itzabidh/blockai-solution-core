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
        body { font-family: 'Inter', sans-serif; background-color: var(--main-bg); color: #e6edf3; }
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
            text-shadow: 0 0 8px rgba(0, 212, 255, 0.3), 0 0 15px rgba(112, 0, 255, 0.3);
        }

        .bg-element {
            position: absolute;
            background: var(--primary-blue);
            border-radius: 50%;
            opacity: 0.1;
            animation: pulse 15s infinite ease-in-out alternate;
        }
        .bg-element-1 { top: 10%; left: 5%; width: 300px; height: 300px; animation-delay: 0s; }
        .bg-element-2 { bottom: 15%; right: 10%; width: 400px; height: 400px; animation-delay: 5s; background: var(--primary-purple); }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.1; }
            50% { transform: scale(1.2); opacity: 0.2; }
            100% { transform: scale(1); opacity: 0.1; }
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        .crypto-ticker-container { overflow: hidden; width: 100%; white-space: nowrap; }
        .crypto-ticker-item { display: inline-block; padding-right: 2rem; animation: scroll-left 30s linear infinite; }
    </style>
</head>
<body class="overflow-x-hidden">

    <div class="bg-element bg-element-1"></div>
    <div class="bg-element bg-element-2"></div>

    <nav class="fixed w-full z-50 bg-transparent backdrop-blur-md transition-colors duration-300 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                    <i class="fa-solid fa-brain text-white text-lg"></i>
                </div>
                <span class="heading-font text-2xl font-extrabold tracking-tight text-white">BLOCK<span class="text-cyan-400">AI</span></span>
            </div>
            
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="text-sm font-bold uppercase tracking-wide text-cyan-400">Network</a>
                <a href="services.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Insights</a>
                <a href="contact.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Contact</a>
                <a href="registration.php" class="px-5 py-2 rounded-full border border-cyan-400 text-cyan-400 text-sm font-bold hover:bg-cyan-400 hover:text-black transition shadow-md">Join BlockAI</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center pt-24 pb-16 gradient-bg-hero">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <h1 class="heading-font text-5xl md:text-8xl font-extrabold text-white mb-6 leading-none">
                Pioneering <span class="neon-gradient-text">Decentralized Intelligence</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                A secure, transparent, and autonomous ecosystem for AI algorithms, data assets, and intelligent agents.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="services.php" class="bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold shadow-lg transform hover:scale-105 transition-all">Explore Solutions</a>
                <a href="contact.php" class="ocean-glass px-10 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 transition">Get in Touch</a>
            </div>
        </div>
    </header>

    <section class="bg-gray-900 py-4 border-y border-white/5 relative z-20">
        <div class="crypto-ticker-container">
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400 uppercase">BTC</span> <span class="text-green-400 font-bold ml-1">$68,500 <i class="fa-solid fa-caret-up"></i></span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-xs font-semibold text-slate-400 uppercase">ETH</span> <span class="text-red-400 font-bold ml-1">$3,800 <i class="fa-solid fa-caret-down"></i></span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-xs font-semibold text-slate-400 uppercase">AGIX</span> <span class="text-green-400 font-bold ml-1">$0.75 <i class="fa-solid fa-caret-up"></i></span>
                <span class="mx-8 text-slate-700">|</span>
                <span class="text-xs font-semibold text-slate-400 uppercase">OCEAN</span> <span class="text-green-400 font-bold ml-1">$0.92 <i class="fa-solid fa-caret-up"></i></span>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[--main-bg]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:border-cyan-400/20">
                <div class="w-16 h-16 bg-cyan-400/10 rounded-full flex items-center justify-center mb-6">
                    <i class="fa-solid fa-flask text-2xl text-cyan-400"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">AI Research & Dev</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Access bleeding-edge AI models and collaborative research environments.</p>
            </div>
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:border-purple-400/20">
                <div class="w-16 h-16 bg-purple-400/10 rounded-full flex items-center justify-center mb-6">
                    <i class="fa-solid fa-database text-2xl text-purple-400"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Data Monetization</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Securely tokenize and trade your valuable datasets on our marketplace.</p>
            </div>
            <div class="ocean-glass p-8 rounded-[30px] transition-all hover:border-accent-light/20">
                <div class="w-16 h-16 bg-accent-light/10 rounded-full flex items-center justify-center mb-6">
                    <i class="fa-solid fa-robot text-2xl text-accent-light"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Autonomous Agents</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Deploy self-executing AI agents for decentralized task automation.</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[--main-bg]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="heading-font text-4xl md:text-5xl font-extrabold text-white mb-12">
                The <span class="neon-gradient-text">Future of Intelligence</span>, Decoded.
            </h2>
            <div class="ocean-glass p-10 rounded-[40px] border border-cyan-400/20 shadow-2xl relative">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-cyan-400 to-purple-500 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-head-side-brain text-white text-2xl"></i>
                </div>
                <p class="text-white text-xl md:text-2xl font-light leading-relaxed mt-8 italic">
                    "Humanity's next leap lies in collaborative intelligence. BlockAI empowers this evolution by making AI and data accessible and truly decentralized."
                </p>
                <div class="mt-8 text-cyan-400 text-sm font-bold tracking-widest uppercase">BlockAI Core Engine v3.0</div>
            </div>
        </div>
    </section>

    <footer class="bg-[#06060c] pt-20 pb-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                            <i class="fa-solid fa-brain text-white"></i>
                        </div>
                        <span class="heading-font text-2xl font-extrabold text-white uppercase">BlockAI</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        The world's first decentralized ecosystem for high-fidelity AI models and data liquidity. Empowering the next era of intelligence.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:bg-cyan-400 hover:text-black transition">
                            <i class="fa-brands fa-discord"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:bg-cyan-400 hover:text-black transition">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:bg-cyan-400 hover:text-black transition">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="heading-font text-white font-bold mb-6 uppercase tracking-widest text-sm">Ecosystem</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="services.php" class="hover:text-cyan-400 transition">Marketplace</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Governance</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Developers</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Whitepaper</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Staking (Coming Soon)</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="heading-font text-white font-bold mb-6 uppercase tracking-widest text-sm">Company</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="case-studies.php" class="hover:text-cyan-400 transition">Insights</a></li>
                        <li><a href="contact.php" class="hover:text-cyan-400 transition">About Us</a></li>
                        <li><a href="contact.php" class="hover:text-cyan-400 transition">Contact</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-cyan-400 transition">Terms of Service</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="heading-font text-white font-bold mb-6 uppercase tracking-widest text-sm">Stay Updated</h4>
                    <p class="text-slate-400 text-sm mb-4">Join our newsletter to receive the latest AI research updates.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-400 transition">
                        <button class="w-full bg-cyan-400 text-black font-bold py-3 rounded-xl hover:bg-cyan-300 transition text-sm">Subscribe</button>
                    </form>
                </div>

            </div>

            <div class="pt-8 border-t border-white/5 flex flex-col md:row justify-between items-center gap-6">
                <p class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em]">
                    &copy; <?php echo date("Y"); ?> BLOCKAI SOLUTION | ALL RIGHTS RESERVED.
                </p>
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-slate-500 text-[10px] font-bold uppercase tracking-widest">Global Network Status: Operational</span>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
