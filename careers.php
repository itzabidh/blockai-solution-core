<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | BlockAI Solution</title>
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
        .job-card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-5px);
            background: rgba(0, 212, 255, 0.05);
        }
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

    <header class="pt-40 pb-20 bg-gradient-to-b from-cyan-900/10 to-transparent">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="inline-block px-4 py-1 border border-cyan-400/30 rounded-full bg-cyan-400/5 mb-6">
                <span class="text-cyan-400 text-xs font-bold tracking-widest uppercase">We are hiring visionaries</span>
            </div>
            <h1 class="heading-font text-5xl md:text-7xl font-extrabold text-white mb-6">Build the <span class="text-cyan-400">Future</span> of AI</h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
                Join our decentralized mission. We're looking for individuals who want to redefine the boundaries of Artificial Intelligence and Blockchain technology.
            </p>
        </div>
    </header>

    <main class="pb-24">
        <div class="max-w-6xl mx-auto px-6">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <h2 class="heading-font text-3xl font-bold text-white">Open Opportunities</h2>
                <span class="text-slate-500 text-sm font-bold uppercase tracking-widest">3 Positions Available</span>
            </div>

            <div class="grid grid-cols-1 gap-6">
                
                <div class="ocean-glass p-8 rounded-3xl job-card transition-all duration-300 flex flex-col md:flex-row justify-between items-center border border-white/5">
                    <div class="mb-6 md:mb-0">
                        <span class="text-cyan-400 text-xs font-bold uppercase tracking-widest">Engineering</span>
                        <h3 class="text-2xl font-bold text-white mt-1">AI/ML Research Engineer</h3>
                        <p class="text-slate-400 text-sm mt-2 flex items-center gap-4">
                            <span><i class="fa-solid fa-location-dot mr-1"></i> Remote</span>
                            <span><i class="fa-solid fa-clock mr-1"></i> Full-Time</span>
                        </p>
                    </div>
                    <a href="mailto:careers@blockaisolution.com" class="px-8 py-3 bg-white/5 border border-white/10 rounded-full text-white font-bold hover:bg-cyan-400 hover:text-black transition">Apply Now</a>
                </div>

                <div class="ocean-glass p-8 rounded-3xl job-card transition-all duration-300 flex flex-col md:flex-row justify-between items-center border border-white/5">
                    <div class="mb-6 md:mb-0">
                        <span class="text-purple-400 text-xs font-bold uppercase tracking-widest">Blockchain</span>
                        <h3 class="text-2xl font-bold text-white mt-1">Smart Contract Developer</h3>
                        <p class="text-slate-400 text-sm mt-2 flex items-center gap-4">
                            <span><i class="fa-solid fa-location-dot mr-1"></i> Remote</span>
                            <span><i class="fa-solid fa-clock mr-1"></i> Contract</span>
                        </p>
                    </div>
                    <a href="mailto:careers@blockaisolution.com" class="px-8 py-3 bg-white/5 border border-white/10 rounded-full text-white font-bold hover:bg-purple-500 hover:text-white transition">Apply Now</a>
                </div>

                <div class="ocean-glass p-8 rounded-3xl job-card transition-all duration-300 flex flex-col md:flex-row justify-between items-center border border-white/5">
                    <div class="mb-6 md:mb-0">
                        <span class="text-green-400 text-xs font-bold uppercase tracking-widest">Growth</span>
                        <h3 class="text-2xl font-bold text-white mt-1">Community & Discord Lead</h3>
                        <p class="text-slate-400 text-sm mt-2 flex items-center gap-4">
                            <span><i class="fa-solid fa-location-dot mr-1"></i> Global</span>
                            <span><i class="fa-solid fa-clock mr-1"></i> Part-Time</span>
                        </p>
                    </div>
                    <a href="mailto:careers@blockaisolution.com" class="px-8 py-3 bg-white/5 border border-white/10 rounded-full text-white font-bold hover:bg-green-500 hover:text-black transition">Apply Now</a>
                </div>

            </div>

            <div class="mt-32">
                <h2 class="heading-font text-3xl font-bold text-center text-white mb-16">Why Work With Us?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-6 text-cyan-400 text-2xl border border-white/10">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-3">Remote First</h4>
                        <p class="text-slate-500 text-sm">Work from anywhere in the world. We value your output, not your office hours.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-6 text-purple-400 text-2xl border border-white/10">
                            <i class="fa-brands fa-bitcoin"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-3">Crypto Payments</h4>
                        <p class="text-slate-500 text-sm">Get paid in BLOCKAI tokens, BTC, or Stablecoins directly to your wallet.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-6 text-green-400 text-2xl border border-white/10">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-3">Rapid Growth</h4>
                        <p class="text-slate-500 text-sm">Be part of an early-stage ecosystem and scale your career with the AI revolution.</p>
                    </div>
                </div>
            </div>

            <div class="mt-32 bg-gradient-to-r from-cyan-600/20 to-purple-600/20 rounded-[40px] p-12 border border-white/10 text-center">
                <h3 class="heading-font text-3xl font-bold text-white mb-4">Don't see a fit?</h3>
                <p class="text-slate-400 mb-8">Send us your CV anyway. We're always looking for exceptional talent.</p>
                <a href="mailto:careers@blockaisolution.com" class="text-cyan-400 font-bold hover:underline">talent@blockaisolution.com</a>
            </div>
        </div>
    </main>

    <footer class="py-10 border-t border-white/5 text-center">
        <p class="text-[10px] text-slate-500 font-bold tracking-widest uppercase">
            &copy; 2026 BLOCKAI SOLUTION | HUMAN RESOURCES DEPT.
        </p>
    </footer>

</body>
</html>
