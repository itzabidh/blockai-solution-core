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

    <nav class="fixed inset-x-0 top-0 z-[100] transition-all duration-300 py-5" id="mainNav">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8">
            <div id="mainNavShell" class="glass-morphism border border-white/10 rounded-2xl h-20 px-6 lg:px-8 flex justify-between items-center">
                <a href="#home" class="flex items-center gap-3">
                    <div class="w-11 h-11 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-xl flex items-center justify-center shadow-[0_0_25px_rgba(0,212,255,0.35)]">
                        <i class="fa-solid fa-brain text-white text-lg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="heading-font text-xl font-black tracking-tight leading-none">BLOCKAI</span>
                        <span class="text-[10px] font-semibold text-cyan-300 tracking-[0.25em] uppercase">Enterprise Cloud</span>
                    </div>
                </a>

                <div class="hidden xl:flex items-center gap-9 text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-300">
                    <a href="#home" class="hover:text-white transition-colors">Home</a>
                    <a href="#about" class="hover:text-white transition-colors">Platform</a>
                    <a href="#ecosystem" class="hover:text-white transition-colors">Solutions</a>
                    <a href="#market" class="hover:text-white transition-colors">Marketplace</a>
                    <a href="#pricing" class="hover:text-white transition-colors">Pricing</a>
                    <a href="#contact" class="hover:text-white transition-colors">Contact</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="auth.php" class="hidden md:inline-flex items-center px-5 py-2.5 rounded-xl border border-white/15 text-xs font-semibold uppercase tracking-[0.14em] text-slate-200 hover:border-cyan-400/60 hover:text-white transition">
                        Client Login
                    </a>
                    <a href="#contact" class="inline-flex items-center px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-xs font-semibold uppercase tracking-[0.14em] text-white hover:shadow-[0_0_28px_rgba(0,212,255,0.35)] transition">
                        Request Demo
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="blob w-[600px] h-[600px] bg-cyan-600 top-[-200px] left-[-200px]"></div>
    <div class="blob w-[500px] h-[500px] bg-purple-600 bottom-[-100px] right-[-100px]"></div>

    <section id="home" class="relative min-h-screen pt-36 lg:pt-40 pb-24 flex items-center">
        <div class="grid-overlay"></div>
        <div class="max-w-[1280px] mx-auto px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="reveal-content lg:col-span-7">
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cyan-400/20 bg-cyan-400/5 mb-8">
                        <span class="h-2 w-2 rounded-full bg-emerald-300"></span>
                        <span class="text-[10px] font-semibold uppercase tracking-[0.28em] text-cyan-300">Enterprise-ready AI infrastructure</span>
                    </div>
                    <h1 class="heading-font text-5xl md:text-7xl lg:text-[84px] font-black leading-[0.95] mb-7 text-white max-w-4xl">
                        AI Infrastructure Built for <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-cyan-400 to-purple-500">Enterprise Teams</span>
                    </h1>
                    <p class="text-slate-300 text-lg md:text-xl font-light mb-10 max-w-2xl leading-relaxed">
                        Deploy, scale, and govern high-performance AI workloads on decentralized compute with predictable costs, built-in privacy, and 24/7 reliability.
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#contact" class="group inline-flex items-center gap-3 px-7 py-4 bg-white text-black font-semibold rounded-xl hover:bg-cyan-300 transition-all">
                            Schedule Consultation
                            <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="whitepaper.php" class="inline-flex items-center px-7 py-4 rounded-xl border border-white/20 bg-white/5 text-sm font-semibold tracking-wide hover:bg-white/10 transition">
                            View Technical Brief
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-12 max-w-3xl">
                        <div class="glass-morphism rounded-2xl p-4 border border-white/10">
                            <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-2">Inference latency</p>
                            <p class="text-2xl font-black text-white">&lt; 120ms</p>
                        </div>
                        <div class="glass-morphism rounded-2xl p-4 border border-white/10">
                            <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-2">Global regions</p>
                            <p class="text-2xl font-black text-white">47</p>
                        </div>
                        <div class="glass-morphism rounded-2xl p-4 border border-white/10">
                            <p class="text-[10px] uppercase tracking-[0.22em] text-slate-400 mb-2">Uptime SLA</p>
                            <p class="text-2xl font-black text-white">99.99%</p>
                        </div>
                    </div>
                </div>

                <div class="reveal-content lg:col-span-5">
                    <div class="glass-morphism rounded-[36px] p-8 border border-white/10 shadow-[0_25px_60px_rgba(0,0,0,0.45)]">
                        <div class="flex items-start justify-between mb-7">
                            <div>
                                <p class="text-[10px] uppercase tracking-[0.26em] text-cyan-300">Platform Status</p>
                                <h3 class="heading-font text-3xl font-bold mt-2 text-white">Control Center</h3>
                            </div>
                            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-400/10 border border-emerald-300/25 text-emerald-200 text-xs font-semibold">
                                <span class="h-2 w-2 rounded-full bg-emerald-300"></span>
                                Live
                            </span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="rounded-2xl bg-black/35 border border-white/10 p-4">
                                <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-2">Compute in use</p>
                                <p class="text-xl font-bold text-white">68.4%</p>
                            </div>
                            <div class="rounded-2xl bg-black/35 border border-white/10 p-4">
                                <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 mb-2">Queued jobs</p>
                                <p class="text-xl font-bold text-white">214</p>
                            </div>
                        </div>
                        <div class="rounded-2xl bg-black/45 border border-white/10 p-5 font-mono text-xs leading-7 text-slate-300">
                            <p><span class="text-purple-300">POST</span> /v1/inference/jobs</p>
                            <p>model: <span class="text-cyan-300">"secure-llm-pro"</span></p>
                            <p>region: <span class="text-cyan-300">"multi-region"</span></p>
                            <p>encryption: <span class="text-cyan-300">"zkp-enabled"</span></p>
                        </div>
                        <div class="mt-6 flex flex-wrap items-center gap-3 text-xs text-slate-400">
                            <span class="px-3 py-1 rounded-full border border-white/10 bg-white/5">ISO 27001 Aligned</span>
                            <span class="px-3 py-1 rounded-full border border-white/10 bg-white/5">SOC 2 Type II</span>
                            <span class="px-3 py-1 rounded-full border border-white/10 bg-white/5">24/7 Support</span>
                        </div>
                    </div>
                </div>
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
        const mainNavShell = document.getElementById("mainNavShell");

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
                mainNav.classList.remove("py-5");
                mainNav.classList.add("py-3");
                if (mainNavShell) {
                    mainNavShell.classList.add("border-cyan-400/30", "shadow-[0_20px_55px_rgba(0,0,0,0.55)]");
                }
                return;
            }

            mainNav.classList.remove("py-3");
            mainNav.classList.add("py-5");
            if (mainNavShell) {
                mainNavShell.classList.remove("border-cyan-400/30", "shadow-[0_20px_55px_rgba(0,0,0,0.55)]");
            }
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
