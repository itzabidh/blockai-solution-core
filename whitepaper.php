<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whitepaper | BlockAI Solution</title>
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
        .sidebar-link:hover { color: var(--primary-blue); border-left: 2px solid var(--primary-blue); padding-left: 15px; }
        .content-section { border-bottom: 1px solid rgba(255, 255, 255, 0.05); padding-bottom: 4rem; margin-bottom: 4rem; }
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
            <div class="flex items-center gap-4">
                <a href="index.php" class="text-xs font-bold uppercase tracking-widest text-slate-400 hover:text-white transition">Exit Docs</a>
                <button class="px-5 py-2 rounded-lg bg-white/5 border border-white/10 text-cyan-400 text-xs font-bold uppercase hover:bg-white/10 transition">Download PDF</button>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 pt-32 flex flex-col lg:flex-row gap-12">
        
        <aside class="lg:w-64 h-fit lg:sticky lg:top-32 space-y-4 hidden lg:block">
            <h4 class="text-xs font-bold text-slate-500 uppercase tracking-[0.2em] mb-6">Documentation</h4>
            <ul class="space-y-4 text-sm text-slate-400 font-medium">
                <li><a href="#abstract" class="sidebar-link transition-all block py-1">01. Abstract</a></li>
                <li><a href="#problem" class="sidebar-link transition-all block py-1">02. Problem Statement</a></li>
                <li><a href="#solution" class="sidebar-link transition-all block py-1">03. The BlockAI Solution</a></li>
                <li><a href="#tokenomics" class="sidebar-link transition-all block py-1">04. Tokenomics</a></li>
                <li><a href="#security" class="sidebar-link transition-all block py-1">05. Network Security</a></li>
                <li><a href="#roadmap" class="sidebar-link transition-all block py-1">06. Implementation Roadmap</a></li>
            </ul>
        </aside>

        <main class="flex-1 max-w-3xl">
            
            <section id="abstract" class="content-section">
                <h2 class="heading-font text-4xl font-bold text-white mb-6">01. Abstract</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    BlockAI Solution is a decentralized infrastructure layer designed to democratize access to high-performance AI models and compute power. By leveraging blockchain technology, we remove the centralized bottlenecks of Big Tech, allowing researchers, developers, and data providers to collaborate in a trustless environment.
                </p>
                <div class="ocean-glass p-6 rounded-2xl border-l-4 border-cyan-400">
                    <p class="text-sm italic text-slate-300">"Our mission is to ensure that the future of Artificial General Intelligence (AGI) is owned by the collective, not the few."</p>
                </div>
            </section>

            <section id="problem" class="content-section">
                <h2 class="heading-font text-4xl font-bold text-white mb-6">02. Problem Statement</h2>
                <p class="text-slate-400 leading-relaxed mb-4">
                    The current AI landscape faces three critical challenges:
                </p>
                <ul class="space-y-4 text-slate-400">
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i> <strong>Centralization:</strong> 90% of AI compute is controlled by 4 major corporations.</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i> <strong>Data Privacy:</strong> User data is often used for training without consent or compensation.</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i> <strong>High Barriers:</strong> Small developers cannot afford the GPU costs required for LLM training.</li>
                </ul>
            </section>

            <section id="tokenomics" class="content-section">
                <h2 class="heading-font text-4xl font-bold text-white mb-6">04. Tokenomics</h2>
                <p class="text-slate-400 leading-relaxed mb-8">
                    The $BLOCKAI token is the native utility asset of the ecosystem, used for governance, staking, and service payments.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white/5 p-6 rounded-2xl border border-white/5 text-center">
                        <h4 class="text-slate-500 text-xs font-bold uppercase mb-2">Total Supply</h4>
                        <p class="text-2xl font-bold text-white">1,000,000,000</p>
                    </div>
                    <div class="bg-white/5 p-6 rounded-2xl border border-white/5 text-center">
                        <h4 class="text-slate-500 text-xs font-bold uppercase mb-2">Ecosystem Incentives</h4>
                        <p class="text-2xl font-bold text-cyan-400">45%</p>
                    </div>
                </div>
            </section>

            <section id="security" class="content-section">
                <h2 class="heading-font text-4xl font-bold text-white mb-6">05. Network Security</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    We utilize <strong>Fully Homomorphic Encryption (FHE)</strong> and <strong>Zero-Knowledge Proofs (ZKP)</strong> to ensure that data processed by AI nodes remains encrypted even during computation. This creates a "Black Box" environment where intelligence is generated without exposing sensitive raw data.
                </p>
            </section>

            <div class="py-10 text-center">
                <p class="text-slate-500 text-sm mb-6 font-medium text-white italic">"End of Documentation - Version 1.0.2"</p>
                <div class="flex justify-center gap-4">
                    <a href="mailto:contact@blockaisolution.com" class="text-cyan-400 font-bold hover:underline">Request Full Tech Paper</a>
                </div>
            </div>

        </main>
    </div>

    <footer class="py-10 border-t border-white/5 mt-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-[10px] text-slate-600 font-bold tracking-[0.3em] uppercase">
                &copy; 2026 BLOCKAI SOLUTION | DECENTRALIZED DOCUMENTATION
            </p>
        </div>
    </footer>

</body>
</html>
