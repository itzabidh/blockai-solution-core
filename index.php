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
        
        /* Neon text effect */
        .neon-gradient-text {
            background-image: linear-gradient(90deg, var(--primary-blue), var(--primary-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 8px rgba(0, 212, 255, 0.3), 0 0 15px rgba(112, 0, 255, 0.3);
        }

        /* Animated background elements */
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

        /* Crypto ticker animation */
        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        .crypto-ticker-container { overflow: hidden; width: 100%; white-space: nowrap; }
        .crypto-ticker-item { display: inline-block; padding-right: 2rem; animation: scroll-left 30s linear infinite; }
        .crypto-ticker-item:nth-child(even) { animation-delay: -15s; } /* stagger animation for continuous loop */
    </style>
</head>
<body class="overflow-x-hidden">

    <div class="bg-element bg-element-1"></div>
    <div class="bg-element bg-element-2"></div>

    <nav class="fixed w-full z-50 bg-transparent backdrop-blur-md transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12 group-hover:rotate-0 transition-all">
                    <i class="fa-solid fa-brain text-white text-lg"></i>
                </div>
                <span class="heading-font text-2xl font-extrabold tracking-tight text-white">BLOCK<span class="text-cyan-400">AI</span></span>
            </div>
            
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="text-sm font-bold uppercase tracking-wide text-cyan-400 hover:text-white transition">Network</a>
                <a href="services.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Insights</a>
                <a href="contact.php" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Contact</a>
                <a href="registration.php" class="px-5 py-2 rounded-full border border-cyan-400 text-cyan-400 text-sm font-bold hover:bg-cyan-400 hover:text-black transition shadow-md">Join BlockAI</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center pt-24 pb-16 gradient-bg-hero overflow-hidden">
        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <h1 class="heading-font text-5xl md:text-8xl font-extrabold text-white mb-6 leading-none">
                Pioneering <span class="neon-gradient-text">Decentralized Intelligence</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                A secure, transparent, and autonomous ecosystem for AI algorithms, data assets, and intelligent agents.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="services.php" class="bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold hover:from-cyan-400 hover:to-purple-500 transition-all shadow-lg text-lg transform hover:scale-105">Explore Solutions</a>
                <a href="contact.php" class="ocean-glass px-10 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 transition text-lg">Get in Touch</a>
            </div>
        </div>
    </header>

    <section class="bg-gray-900 py-4 border-y border-white/5 relative z-20">
        <div class="crypto-ticker-container">
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">BTC</span> <span class="text-green-400 font-bold ml-1">$68,500 <i class="fa-solid fa-caret-up"></i> (+2.1%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">ETH</span> <span class="text-red-400 font-bold ml-1">$3,800 <i class="fa-solid fa-caret-down"></i> (-1.5%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">AGIX</span> <span class="text-green-400 font-bold ml-1">$0.75 <i class="fa-solid fa-caret-up"></i> (+5.2%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">OCEAN</span> <span class="text-green-400 font-bold ml-1">$0.92 <i class="fa-solid fa-caret-up"></i> (+3.8%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">FET</span> <span class="text-red-400 font-bold ml-1">$2.10 <i class="fa-solid fa-caret-down"></i> (-0.8%)</span>
            </div>
             <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">ADA</span> <span class="text-green-400 font-bold ml-1">$0.45 <i class="fa-solid fa-caret-up"></i> (+1.1%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">BTC</span> <span class="text-green-400 font-bold ml-1">$68,500 <i class="fa-solid fa-caret-up"></i> (+2.1%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">ETH</span> <span class="text-red-400 font-bold ml-1">$3,800 <i class="fa-solid fa-caret-down"></i> (-1.5%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">AGIX</span> <span class="text-green-400 font-bold ml-1">$0.75 <i class="fa-solid fa-caret-up"></i> (+5.2%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">OCEAN</span> <span class="text-green-400 font-bold ml-1">$0.92 <i class="fa-solid fa-caret-up"></i> (+3.8%)</span>
            </div>
            <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">FET</span> <span class="text-red-400 font-bold ml-1">$2.10 <i class="fa-solid fa-caret-down"></i> (-0.8%)</span>
            </div>
             <div class="crypto-ticker-item">
                <span class="text-xs font-semibold text-slate-400">ADA</span> <span class="text-green-400 font-bold ml-1">$0.45 <i class="fa-solid fa-caret-up"></i> (+1.1%)</span>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[--main-bg]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            
            <div class="ocean-glass p-8 rounded-[30px] transition-all duration-300 hover:shadow-xl hover:border-cyan-400/20">
                <div class="w-16 h-16 bg-cyan-400/10 rounded-full flex items-center justify-center mb-6 border border-cyan-400/20">
                    <i class="fa-solid fa-flask text-2xl text-cyan-400"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">AI Research & Dev</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Access bleeding-edge AI models and collaborative research environments. Build the future, today.</p>
            </div>

            <div class="ocean-glass p-8 rounded-[30px] transition-all duration-300 hover:shadow-xl hover:border-purple-400/20">
                <div class="w-16 h-16 bg-purple-400/10 rounded-full flex items-center justify-center mb-6 border border-purple-400/20">
                    <i class="fa-solid fa-database text-2xl text-purple-400"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Data Monetization</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Securely tokenize and trade your valuable datasets. Own your data, power the next AI revolution.</p>
            </div>

            <div class="ocean-glass p-8 rounded-[30px] transition-all duration-300 hover:shadow-xl hover:border-accent-light/20">
                <div class="w-16 h-16 bg-accent-light/10 rounded-full flex items-center justify-center mb-6 border border-accent-light/20">
                    <i class="fa-solid fa-robot text-2xl text-accent-light"></i>
                </div>
                <h3 class="heading-font text-2xl font-bold text-white mb-3">Autonomous Agents</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Deploy self-executing AI agents for decentralized task automation and smart contract interaction.</p>
            </div>

        </div>
    </section>

    <section class="py-24 bg-[--main-bg]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="heading-font text-4xl md:text-5xl font-extrabold text-white mb-12">
                The <span class="neon-gradient-text">Future of Intelligence</span>, Decoded.
            </h2>
            <div class="ocean-glass p-10 rounded-[40px] border border-cyan-400/20 shadow-2xl relative">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-20 h-20 bg-gradient-to-br from-cyan-400 to-purple-500 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                    <i class="fa-solid fa-head-side-brain text-white text-3xl"></i>
                </div>
                <p class="text-white text-xl md:text-2xl font-light leading-relaxed mt-8">
                    "Humanity's next leap lies in collaborative intelligence. BlockAI empowers this evolution by making AI and data accessible, verifiable, and truly decentralized. Join us."
                </p>
                <div class="mt-8 text-slate-400 text-sm italic">- BlockAI Core Intelligence Engine v3.0</div>
            </div>
        </div>
    </section>


    <footer class="py-16 bg-[--main-bg] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <span class="heading-font text-2xl font-bold text-white tracking-tight">BLOCK<span class="text-cyan-400">AI</span></span>
                <p class="text-slate-600 text-xs mt-2 italic">Building the decentralized future of AI.</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-discord text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-x-twitter text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-medium text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition"><i class="fa-brands fa-github text-xl"></i></a>
            </div>
            <p class="text-slate-700 text-[10px] font-bold uppercase tracking-widest text-center md:text-right">
                &copy; <?php echo date("Y"); ?> BlockAI Solution | Global Decentralized Ecosystem
            </p>
        </div>
    </footer>

</body>
</html>
