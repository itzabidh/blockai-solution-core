<?php
declare(strict_types=1);

/**
 * BlockAI Solution Core - Enterprise Portal v2.0
 * Fully Scalable & High-End Performance UI
 */
$marketplaceItems = range(1, 8);
$currentYear = (int) date('Y');

/**
 * Escape dynamic content for safe HTML output.
 */
function escapeHtml(string|int|float $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solution | Decentralized Super-Intelligence Ecosystem</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        :root {
            --bg-deep: #030014;
            --accent-cyan: #00d4ff;
            --accent-purple: #7000ff;
            --accent-pink: #ff00c8;
            --text-main: #e6edf3;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-deep);
            color: var(--text-main);
            overflow-x: hidden;
        }

        .heading-font { font-family: 'Space Grotesk', sans-serif; }

        /* Custom UI Elements */
        .glass-morphism {
            background: rgba(255, 255, 255, 0.01);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .neon-glow {
            text-shadow: 0 0 15px rgba(0, 212, 255, 0.8);
        }

        /* Hero Background Grid */
        .grid-overlay {
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            mask-image: radial-gradient(circle at center, black, transparent 80%);
            z-index: -1;
        }

        /* Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-cyan), var(--accent-purple));
            z-index: 999;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }
        .float-anim { animation: float 8s ease-in-out infinite; }

        .blob {
            position: absolute;
            filter: blur(80px);
            border-radius: 50%;
            z-index: -2;
            opacity: 0.3;
        }

        /* 3D Transform on Cards */
        .card-3d {
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
        }
        .card-3d:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
        }
    </style>
</head>
<body class="antialiased">

    <div class="scroll-progress" id="scrollBar"></div>

    <nav class="fixed w-full z-[100] transition-all duration-300 glass-morphism border-none" id="mainNav">
        <div class="max-w-[1400px] mx-auto px-8 h-24 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-2xl flex items-center justify-center rotate-12 shadow-[0_0_20px_rgba(0,212,255,0.4)]">
                    <i class="fa-solid fa-bolt-lightning text-white text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="heading-font text-2xl font-black tracking-tighter leading-none">BLOCKAI</span>
                    <span class="text-[9px] font-bold text-cyan-400 tracking-[0.3em] uppercase">Solution Core</span>
                </div>
            </div>

            <div class="hidden xl:flex items-center space-x-12 text-xs font-black uppercase tracking-[0.2em]">
                <a href="#home" class="hover:text-cyan-400 transition-colors">Origins</a>
                <a href="#about" class="hover:text-cyan-400 transition-colors">Technology</a>
                <a href="#ecosystem" class="hover:text-cyan-400 transition-colors">Ecosystem</a>
                <a href="#market" class="hover:text-cyan-400 transition-colors">Marketplace</a>
                <a href="#nodes" class="hover:text-cyan-400 transition-colors">Global Nodes</a>
                <a href="#roadmap" class="hover:text-cyan-400 transition-colors">Timeline</a>
                <a href="#contact" class="hover:text-cyan-400 transition-colors">Support</a>
            </div>

            <div class="flex items-center gap-6">
                <a href="login.php" class="hidden md:block text-xs font-black uppercase tracking-widest border-b-2 border-cyan-400 pb-1">Portal Login</a>
                <button class="px-8 py-3.5 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-full font-black text-xs uppercase tracking-widest hover:shadow-[0_0_30px_rgba(0,212,255,0.5)] transition duration-500">
                    Connect Node
                </button>
            </div>
        </div>
    </nav>

    <div class="blob w-[600px] h-[600px] bg-cyan-600 top-[-200px] left-[-200px]"></div>
    <div class="blob w-[500px] h-[500px] bg-purple-600 bottom-[-100px] right-[-100px]"></div>

    <section id="home" class="relative min-h-screen flex items-center justify-center pt-24">
        <div class="grid-overlay"></div>
        <div class="max-w-[1400px] mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-content">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-cyan-400/20 bg-cyan-400/5 mb-8">
                    <span class="flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-400"></span>
                    </span>
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-cyan-400">Mainnet v3.0 Is Now Operational</span>
                </div>
                <h1 class="heading-font text-7xl md:text-[110px] font-black leading-[0.9] mb-8 text-white">
                    BUILD THE <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500">NEXT GEN</span> <br> INTELLIGENCE
                </h1>
                <p class="text-slate-400 text-xl md:text-2xl font-light mb-12 max-w-xl leading-relaxed">
                    The ultimate decentralized substrate for AI/ML development. Harness world-class GPU power without the enterprise cost.
                </p>
                <div class="flex flex-wrap gap-6">
                    <button class="group px-10 py-5 bg-white text-black font-black rounded-2xl hover:bg-cyan-400 transition-all flex items-center gap-3">
                        EXPLORE BLOCKAI <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </button>
                    <button class="px-10 py-5 glass-morphism rounded-2xl font-black text-xs uppercase tracking-widest border border-white/10 hover:bg-white/5 transition-all">
                        Technical Paper
                    </button>
                </div>
            </div>

            <div class="relative hidden lg:block float-anim">
                <div class="absolute -inset-10 bg-gradient-to-tr from-cyan-500/20 to-purple-500/20 blur-[100px] rounded-full"></div>
                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800" class="rounded-[60px] border border-white/10 shadow-2xl relative z-10">
            </div>
        </div>
    </section>

    <section id="about" class="py-32 relative z-10">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="heading-font text-5xl md:text-7xl font-black mb-6">WHY BLOCKCHAIN <span class="text-cyan-400">AI?</span></h2>
                <div class="w-32 h-2 bg-cyan-500 mx-auto rounded-full mb-8"></div>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Traditional AI is centralized, opaque, and expensive. BlockAI breaks the monopoly by distributing compute power across the globe.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="glass-morphism p-12 rounded-[50px] card-3d">
                    <div class="w-16 h-16 bg-cyan-400/10 rounded-2xl flex items-center justify-center text-cyan-400 text-3xl mb-8">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4">Decentralized GPU</h3>
                    <p class="text-slate-500 font-light leading-relaxed">Rent high-end NVIDIA H100s and A100s from node providers globally at 70% lower costs than AWS or Azure.</p>
                </div>
                <div class="glass-morphism p-12 rounded-[50px] card-3d">
                    <div class="w-16 h-16 bg-purple-400/10 rounded-2xl flex items-center justify-center text-purple-400 text-3xl mb-8">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4">ZKP Privacy</h3>
                    <p class="text-slate-500 font-light leading-relaxed">Train your models on private data without ever exposing it. Our Zero-Knowledge Proof protocol ensures 100% data sovereignty.</p>
                </div>
                <div class="glass-morphism p-12 rounded-[50px] card-3d">
                    <div class="w-16 h-16 bg-pink-400/10 rounded-2xl flex items-center justify-center text-pink-400 text-3xl mb-8">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4">Model Tokenization</h3>
                    <p class="text-slate-500 font-light leading-relaxed">Turn your trained AI models into tradeable NFTs. Earn royalties every time your model is used or fine-tuned.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 glass-morphism mx-8 rounded-[60px] relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/5 to-purple-500/5"></div>
        <div class="max-w-7xl mx-auto px-8 relative z-10 grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
            <div>
                <p class="text-cyan-400 font-black text-xs uppercase tracking-widest mb-4">Total Value Locked</p>
                <h4 class="text-5xl font-black font-mono tracking-tighter">$142,502,910</h4>
            </div>
            <div>
                <p class="text-purple-400 font-black text-xs uppercase tracking-widest mb-4">Nodes Active</p>
                <h4 class="text-5xl font-black font-mono tracking-tighter">8,421</h4>
            </div>
            <div>
                <p class="text-pink-400 font-black text-xs uppercase tracking-widest mb-4">AI Inferences/sec</p>
                <h4 class="text-5xl font-black font-mono tracking-tighter">1.2M</h4>
            </div>
            <div>
                <p class="text-green-400 font-black text-xs uppercase tracking-widest mb-4">Carbon Offset</p>
                <h4 class="text-5xl font-black font-mono tracking-tighter">98%</h4>
            </div>
        </div>
    </section>

    <section id="ecosystem" class="py-40">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col lg:flex-row gap-24 items-center mb-32">
                <div class="lg:w-1/2">
                    <h2 class="heading-font text-6xl font-black mb-8 leading-tight">THE LAYER-1 <br> FOR <span class="text-cyan-400">AI AGENTS.</span></h2>
                    <p class="text-slate-400 text-xl font-light mb-10 leading-relaxed">
                        BlockAI isn't just a platform; it's a foundational protocol. We provide the tools for developers to launch autonomous agents that can pay for their own compute.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="p-6 border-l-4 border-cyan-500 bg-white/5">
                            <h5 class="font-bold mb-2">Scalable API</h5>
                            <p class="text-xs text-slate-500">Integrate our decentralized API with 3 lines of code.</p>
                        </div>
                        <div class="p-6 border-l-4 border-purple-500 bg-white/5">
                            <h5 class="font-bold mb-2">DAO Governance</h5>
                            <p class="text-xs text-slate-500">The community decides the protocol's future.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 glass-morphism p-8 rounded-[60px] border-cyan-500/30">
                    <div class="space-y-4">
                        <div class="bg-black/50 p-6 rounded-3xl font-mono text-sm text-cyan-300">
                            <p><span class="text-purple-400">import</span> blockai</p>
                            <p class="mt-2">client = blockai.<span class="text-yellow-400">Connect</span>(apiKey)</p>
                            <p>model = client.<span class="text-yellow-400">LoadModel</span>(<span class="text-green-400">'llama-3-dcentral'</span>)</p>
                            <p class="mt-2 text-slate-500"># Decentralized inference start</p>
                            <p>response = model.<span class="text-yellow-400">Ask</span>(<span class="text-green-400">'Analyze Global Markets'</span>)</p>
                            <p class="mt-2 text-purple-400">print(response)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="market" class="py-32 bg-white/[0.02]">
        <div class="max-w-7xl mx-auto px-8">
             <div class="text-center mb-20">
                <h2 class="heading-font text-5xl font-black uppercase tracking-tighter">Marketplace <span class="text-purple-500">Top Sellers</span></h2>
             </div>
             <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($marketplaceItems as $itemIndex): ?>
                <div class="glass-morphism p-6 rounded-3xl hover:-translate-y-3 transition duration-500 border border-white/5">
                    <div class="h-48 bg-gray-800 rounded-2xl mb-6 overflow-hidden relative group">
                        <img src="https://picsum.photos/seed/<?= escapeHtml($itemIndex) ?>/400/300" alt="Preview of Neural Predictor v<?= escapeHtml($itemIndex) ?>.0" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                            <button class="bg-white text-black px-6 py-2 rounded-full font-bold text-xs">BUY MODEL</button>
                        </div>
                    </div>
                    <h5 class="text-lg font-black mb-1">Neural Predictor v<?= escapeHtml($itemIndex) ?>.0</h5>
                    <p class="text-[10px] text-cyan-400 font-bold uppercase mb-4">By CyberDev_<?= escapeHtml($itemIndex) ?></p>
                    <div class="flex justify-between items-center pt-4 border-t border-white/5">
                        <span class="text-sm font-bold">2.5 ETH</span>
                        <span class="text-[10px] text-slate-500 uppercase">12 Sales</span>
                    </div>
                </div>
                <?php endforeach; ?>
             </div>
        </div>
    </section>

    <section id="pricing" class="py-40">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h2 class="heading-font text-6xl font-black mb-20">ENTERPRISE <span class="text-cyan-400">PLANS.</span></h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                <div class="glass-morphism p-12 rounded-[50px] border-white/5 opacity-80 hover:opacity-100 transition">
                    <h4 class="text-xl font-bold mb-2">Developer</h4>
                    <div class="text-6xl font-black mb-8">$0</div>
                    <ul class="space-y-4 text-slate-500 mb-10 text-sm">
                        <li>100 Free Inferences / Day</li>
                        <li>Community Support</li>
                        <li>Public Models Only</li>
                        <li>Standard Node Priority</li>
                    </ul>
                    <button class="w-full py-4 border border-white/20 rounded-2xl font-black hover:bg-white/5 transition">START BUILDING</button>
                </div>
                <div class="glass-morphism p-16 rounded-[60px] border-2 border-cyan-500 shadow-[0_0_50px_rgba(0,212,255,0.2)] relative scale-110 z-20">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-cyan-500 text-black font-black px-8 py-2 rounded-full text-xs">MOST POPULAR</div>
                    <h4 class="text-xl font-bold mb-2">Node Master</h4>
                    <div class="text-6xl font-black mb-8">$499</div>
                    <ul class="space-y-4 text-slate-300 mb-10 text-sm">
                        <li>Unlimited Private Inferences</li>
                        <li>Priority GPU Access (H100)</li>
                        <li>Custom API Endpoints</li>
                        <li>DAO Voting Rights (x2)</li>
                        <li>Dedicated Slack Channel</li>
                    </ul>
                    <button class="w-full py-5 bg-cyan-500 text-black font-black rounded-2xl hover:bg-white transition">UPGRADE NOW</button>
                </div>
                <div class="glass-morphism p-12 rounded-[50px] border-white/5 opacity-80 hover:opacity-100 transition">
                    <h4 class="text-xl font-bold mb-2">Foundation</h4>
                    <div class="text-6xl font-black mb-8">Custom</div>
                    <ul class="space-y-4 text-slate-500 mb-10 text-sm">
                        <li>Full Layer-1 Integration</li>
                        <li>Private Node Cluster</li>
                        <li>White-label Marketplace</li>
                        <li>On-premise Deployment</li>
                    </ul>
                    <button class="w-full py-4 border border-white/20 rounded-2xl font-black hover:bg-white/5 transition">CONTACT SALES</button>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-black pt-40 pb-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-20 mb-32">
                <div class="col-span-2">
                    <h2 class="heading-font text-5xl font-black mb-8 leading-none">JOIN THE <br> <span class="text-cyan-400">REVOLUTION.</span></h2>
                    <div class="max-w-md">
                        <p class="text-slate-500 mb-8">Subscribe to our technical newsletter and stay updated on decentralized AI trends.</p>
                        <form class="flex gap-4">
                            <input type="email" placeholder="Your work email" class="flex-1 bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-cyan-500 text-white">
                            <button class="px-8 bg-white text-black font-black rounded-2xl hover:bg-cyan-400 transition">JOIN</button>
                        </form>
                    </div>
                </div>
                <div>
                    <h5 class="font-black text-xs uppercase tracking-[0.3em] mb-8 text-cyan-400">Navigation</h5>
                    <ul class="space-y-4 text-sm font-bold text-slate-500">
                        <li><a href="#" class="hover:text-white transition">Research Lab</a></li>
                        <li><a href="#" class="hover:text-white transition">GPU Marketplace</a></li>
                        <li><a href="#" class="hover:text-white transition">Whitepaper 2.0</a></li>
                        <li><a href="#" class="hover:text-white transition">Tokenomics</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-black text-xs uppercase tracking-[0.3em] mb-8 text-purple-400">Governance</h5>
                    <ul class="space-y-4 text-sm font-bold text-slate-500">
                        <li><a href="#" class="hover:text-white transition">Snapshot Vote</a></li>
                        <li><a href="#" class="hover:text-white transition">Foundation</a></li>
                        <li><a href="#" class="hover:text-white transition">Legal Archive</a></li>
                        <li><a href="#" class="hover:text-white transition">Audit Reports</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-12 border-t border-white/5 flex flex-col lg:flex-row justify-between items-center gap-8">
                <div class="flex items-center gap-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-slate-600">© <?= escapeHtml($currentYear) ?> BLOCKAI SOLUTION CORE</span>
                    <div class="flex gap-6 text-slate-600 text-lg">
                        <i class="fa-brands fa-discord hover:text-white cursor-pointer"></i>
                        <i class="fa-brands fa-x-twitter hover:text-white cursor-pointer"></i>
                        <i class="fa-brands fa-github hover:text-white cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex gap-8 text-[10px] font-black uppercase tracking-widest text-slate-700">
                    <a href="#">Privacy Protocol</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const scrollBar = document.getElementById("scrollBar");
        const mainNav = document.getElementById("mainNav");

        const handleScroll = () => {
            const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;

            if (scrollBar) {
                scrollBar.style.width = `${scrolled}%`;
            }

            if (!mainNav) {
                return;
            }

            if (winScroll > 100) {
                mainNav.classList.add("py-2", "bg-black/90");
                mainNav.classList.remove("py-0");
                return;
            }

            mainNav.classList.remove("py-2", "bg-black/90");
        };

        window.addEventListener("scroll", handleScroll, { passive: true });
        handleScroll();

        // Scroll Reveal Animation
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".reveal-content", {
            duration: 1.5,
            y: 50,
            opacity: 0,
            ease: "power4.out",
            stagger: 0.2
        });
    </script>
</body>
</html>
