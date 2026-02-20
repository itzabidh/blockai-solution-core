<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solution | Next-Gen AI Governance</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .hero-gradient { background: radial-gradient(circle at 50% 50%, #4f46e5 0%, #000000 100%); }
        .card-hover:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(79, 70, 229, 0.1); }
    </style>
</head>
<body class="bg-black text-slate-200 overflow-x-hidden">

    <nav class="fixed w-full z-50 glass top-0">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="window.location.href='index.php'">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center rotate-12 group hover:rotate-0 transition-all">
                    <i class="fa-solid fa-cube text-white"></i>
                </div>
                <span class="text-xl font-extrabold tracking-tighter text-white">BLOCK<span class="text-indigo-500">AI</span></span>
            </div>
            
            <div class="hidden md:flex space-x-10 items-center">
                <a href="index.php" class="text-sm font-semibold hover:text-indigo-400 transition text-indigo-400">Home</a>
                <a href="services.php" class="text-sm font-semibold hover:text-indigo-400 transition">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-semibold hover:text-indigo-400 transition">Strategy</a>
                <a href="contact.php" class="text-sm font-semibold hover:text-indigo-400 transition">Contact</a>
                <a href="registration.php" class="bg-white text-black px-6 py-2.5 rounded-full text-sm font-extrabold hover:bg-indigo-500 hover:text-white transition transform active:scale-95">Deploy Now</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center hero-gradient pt-20 overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-indigo-600 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-600 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center space-x-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full mb-8 animate-bounce">
                <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-300">v2.0 Advanced Engine Live</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-8 tracking-tighter leading-none">
                Mastering the <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-purple-400">Frontier of AI</span>
            </h1>
            <p class="text-slate-400 text-xl md:text-2xl mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                Securely deploy, verify, and scale enterprise-grade AI solutions across global infrastructures.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="services.php" class="bg-indigo-600 px-10 py-5 rounded-2xl font-bold text-white hover:bg-indigo-700 transition-all shadow-2xl shadow-indigo-600/20 text-lg">Browse Solutions</a>
                <a href="contact.php" class="glass px-10 py-5 rounded-2xl font-bold text-white hover:bg-white/10 transition-all border border-white/20 text-lg">Partner with Us</a>
            </div>
        </div>
    </header>

    <section class="py-32 px-6 bg-[#050505]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="glass p-10 rounded-[40px] card-hover transition-all duration-500 group">
                    <div class="w-16 h-16 bg-indigo-500/10 rounded-2xl flex items-center justify-center mb-8 border border-indigo-500/20 group-hover:bg-indigo-500 transition-all">
                        <i class="fa-solid fa-microchip text-2xl text-indigo-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 tracking-tight">AI Infrastructure</h3>
                    <p class="text-slate-500 leading-relaxed">High-performance computational frameworks tailored for scalable enterprise integration and neural deployment.</p>
                </div>

                <div class="glass p-10 rounded-[40px] card-hover transition-all duration-500 group">
                    <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-8 border border-purple-500/20 group-hover:bg-purple-500 transition-all">
                        <i class="fa-solid fa-fingerprint text-2xl text-purple-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 tracking-tight">Verified Trust</h3>
                    <p class="text-slate-500 leading-relaxed">Advanced biometric and blockchain-based verification for ensuring vendor reliability and data integrity.</p>
                </div>

                <div class="glass p-10 rounded-[40px] card-hover transition-all duration-500 group">
                    <div class="w-16 h-16 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-8 border border-emerald-500/20 group-hover:bg-emerald-500 transition-all">
                        <i class="fa-solid fa-chart-pie text-2xl text-emerald-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 tracking-tight">Global Governance</h3>
                    <p class="text-slate-500 leading-relaxed">Seamlessly navigate the EU AI Act and international regulatory standards with automated compliance tools.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 border-y border-white/5 bg-black">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <h4 class="text-4xl font-extrabold text-white mb-2">99.9%</h4>
                <p class="text-indigo-500 text-xs font-bold uppercase tracking-widest">Uptime Reliabilty</p>
            </div>
            <div>
                <h4 class="text-4xl font-extrabold text-white mb-2">500+</h4>
                <p class="text-indigo-500 text-xs font-bold uppercase tracking-widest">Verified Nodes</p>
            </div>
            <div>
                <h4 class="text-4xl font-extrabold text-white mb-2">24/7</h4>
                <p class="text-indigo-500 text-xs font-bold uppercase tracking-widest">AI Monitoring</p>
            </div>
            <div>
                <h4 class="text-4xl font-extrabold text-white mb-2">Zero</h4>
                <p class="text-indigo-500 text-xs font-bold uppercase tracking-widest">Compliance Risks</p>
            </div>
        </div>
    </section>

    <footer class="bg-black py-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="mb-12">
                <span class="text-3xl font-black text-white italic tracking-tighter uppercase">BlockAI</span>
                <p class="text-slate-500 mt-4 max-w-md mx-auto">Providing the strategic backbone for the next generation of artificial intelligence.</p>
            </div>
            <div class="flex justify-center space-x-6 mb-12">
                <a href="#" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-indigo-600 transition"><i class="fa-brands fa-linkedin-in text-white"></i></a>
                <a href="#" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-indigo-600 transition"><i class="fa-brands fa-twitter text-white"></i></a>
                <a href="#" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-indigo-600 transition"><i class="fa-brands fa-github text-white"></i></a>
            </div>
            <p class="text-xs text-slate-600 font-bold tracking-widest uppercase">
                &copy; <?php echo date("Y"); ?> BlockAI Solution | Pioneering Digital Frontiers.
            </p>
        </div>
    </footer>

</body>
</html>
