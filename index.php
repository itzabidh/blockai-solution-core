<?php
declare(strict_types=1);
require_once __DIR__ . '/route_helpers.php';
redirectPhpToCleanRoute('index.php', '');

/**
 * BlockAI Solution Core - Enterprise Portal v2.0
 * Fully Scalable & High-End Performance UI
 */
$marketplaceItems = range(1, 8);
$currentYear = (int) date('Y');
$globalAiNodes = [
    ['city' => 'New York', 'region' => 'North America', 'lat' => 40.7128, 'lng' => -74.0060, 'status' => 'Active', 'compute' => '132K infer/min'],
    ['city' => 'London', 'region' => 'Europe', 'lat' => 51.5074, 'lng' => -0.1278, 'status' => 'Active', 'compute' => '118K infer/min'],
    ['city' => 'Tokyo', 'region' => 'Asia Pacific', 'lat' => 35.6762, 'lng' => 139.6503, 'status' => 'Active', 'compute' => '147K infer/min'],
    ['city' => 'Dubai', 'region' => 'Middle East', 'lat' => 25.2048, 'lng' => 55.2708, 'status' => 'Active', 'compute' => '104K infer/min'],
    ['city' => 'Singapore', 'region' => 'Asia Pacific', 'lat' => 1.3521, 'lng' => 103.8198, 'status' => 'Active', 'compute' => '111K infer/min'],
    ['city' => 'Frankfurt', 'region' => 'Europe', 'lat' => 50.1109, 'lng' => 8.6821, 'status' => 'Active', 'compute' => '109K infer/min'],
];
$gpuRates = [
    'A100' => 14,
    'H100' => 25,
    'RTX 4090' => 9,
];
$latestInsights = [
    [
        'tag' => '#Blockchain',
        'title' => 'Neural Settlement Layers for Trustless AI Execution',
        'description' => 'How decentralized settlement rails are reducing latency for multi-region AI transaction orchestration.',
        'image' => 'https://images.unsplash.com/photo-1639762681057-408e52192e55?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'tag' => '#AI',
        'title' => 'Model Routing Strategies for Enterprise Agent Workloads',
        'description' => 'A practical blueprint for routing requests between private and public models without sacrificing governance.',
        'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=80',
    ],
    [
        'tag' => '#Web3',
        'title' => 'Tokenized Compute Markets and the Next Growth Cycle',
        'description' => 'Why compute tokenization is becoming the operating backbone for AI-native Web3 products.',
        'image' => 'https://images.unsplash.com/photo-1639322537228-f710d846310a?auto=format&fit=crop&w=1200&q=80',
    ],
];

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
    <base href="/">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <title>BlockAI Solution | Decentralized AI & Blockchain Neural Nodes</title>
    <meta name="description" content="BlockAI Solution provides high-performance decentralized AI compute and neural blockchain nodes for the future of Web3.">
    <meta name="keywords" content="BlockAI, AI nodes, Blockchain, Decentralized AI, blockaisolution.">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        :root {
            --bg-deep: #030014;
            --accent-cyan: #00d4ff;
            --accent-purple: #7000ff;
            --accent-pink: #ff00c8;
            --accent-neon: #56ff89;
            --bg-dark-blue: #071335;
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

        /* New high-end platform sections */
        .section-shell {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.01));
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(16px);
        }

        #globalNodeMap {
            height: 440px;
            border-radius: 28px;
            overflow: hidden;
            border: 1px solid rgba(86, 255, 137, 0.2);
            background: var(--bg-dark-blue);
        }

        .node-core {
            filter: drop-shadow(0 0 8px rgba(86, 255, 137, 0.9));
        }

        .node-pulse {
            filter: drop-shadow(0 0 10px rgba(86, 255, 137, 0.45));
        }

        .estimator-output {
            background: linear-gradient(140deg, rgba(0, 212, 255, 0.12), rgba(86, 255, 137, 0.12));
            border: 1px solid rgba(86, 255, 137, 0.25);
        }

        .insight-card img {
            transform: scale(1.02);
            transition: transform 0.5s ease;
        }

        .insight-card:hover img {
            transform: scale(1.08);
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
                    <a href="services.php" class="hover:text-white transition-colors">Services</a>
                    <a href="about.php" class="hover:text-white transition-colors">Strategy</a>
                    <a href="case-studies.php" class="hover:text-white transition-colors">Case Studies</a>
                    <a href="whitepaper.php" class="hover:text-white transition-colors">Whitepaper</a>
                    <a href="governance.php" class="hover:text-white transition-colors">Governance</a>
                    <a href="contact.php" class="hover:text-white transition-colors">Contact</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="auth.php" class="hidden md:inline-flex items-center px-5 py-2.5 rounded-xl border border-white/15 text-xs font-semibold uppercase tracking-[0.14em] text-slate-200 hover:border-cyan-400/60 hover:text-white transition">
                        Client Login
                    </a>
                    <a href="contact.php" class="inline-flex items-center px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-xs font-semibold uppercase tracking-[0.14em] text-white hover:shadow-[0_0_28px_rgba(0,212,255,0.35)] transition">
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

    <section id="global-neural-network" class="py-32">
        <div class="max-w-7xl mx-auto px-8 reveal-section">
            <div class="text-center mb-12">
                <p class="text-xs uppercase tracking-[0.26em] text-green-300 font-bold mb-3">Live Infrastructure</p>
                <h2 class="heading-font text-5xl md:text-6xl font-black mb-4">Global Neural Network</h2>
                <p class="text-slate-400 max-w-3xl mx-auto">Real-time visibility into active AI node clusters powering decentralized compute orchestration for global workloads.</p>
            </div>
            <div class="grid lg:grid-cols-12 gap-8 items-stretch">
                <div class="lg:col-span-8 section-shell rounded-[32px] p-4">
                    <div id="globalNodeMap" aria-label="Global neural network map"></div>
                </div>
                <aside class="lg:col-span-4 section-shell rounded-[32px] p-6 flex flex-col">
                    <h3 class="heading-font text-2xl font-bold mb-4">Active Node Hubs</h3>
                    <div class="space-y-3">
                        <?php foreach ($globalAiNodes as $node): ?>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <div class="flex items-center justify-between gap-3 mb-2">
                                    <p class="font-bold text-white"><?= escapeHtml($node['city']) ?></p>
                                    <span class="text-[10px] uppercase tracking-[0.16em] px-2 py-1 rounded-full border border-green-300/30 bg-green-400/10 text-green-300"><?= escapeHtml($node['status']) ?></span>
                                </div>
                                <p class="text-xs text-slate-400 mb-2"><?= escapeHtml($node['region']) ?></p>
                                <p class="text-xs text-cyan-300 uppercase tracking-[0.12em] font-bold"><?= escapeHtml($node['compute']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-4 rounded-2xl border border-white/10 bg-black/25 p-4 text-sm text-slate-300">
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-400 mb-2">Network Status</p>
                        <p><span class="text-green-300 font-bold">99.99%</span> service availability across all active regions.</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section id="compute-estimator" class="py-20 bg-white/[0.015]">
        <div class="max-w-7xl mx-auto px-8 reveal-section">
            <div class="grid lg:grid-cols-2 gap-8">
                <article class="section-shell rounded-[32px] p-7">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-300 font-bold mb-3">Cost Intelligence</p>
                    <h3 class="heading-font text-4xl font-black mb-4">Compute Estimator</h3>
                    <p class="text-slate-400 mb-7">Select model and workload duration to estimate usage cost in BAI Tokens.</p>

                    <div class="space-y-5">
                        <label class="block">
                            <span class="text-xs uppercase tracking-[0.14em] text-slate-400 font-bold">GPU Model</span>
                            <select id="gpuModelSelect" class="mt-2 w-full rounded-xl border border-white/15 bg-black/30 px-4 py-3 text-white focus:outline-none focus:border-cyan-300">
                                <?php foreach ($gpuRates as $model => $rate): ?>
                                    <option value="<?= escapeHtml($model) ?>"><?= escapeHtml($model) ?> (<?= escapeHtml($rate) ?> BAI/hour)</option>
                                <?php endforeach; ?>
                            </select>
                        </label>

                        <label class="block">
                            <span class="text-xs uppercase tracking-[0.14em] text-slate-400 font-bold">Duration</span>
                            <input id="durationSlider" type="range" min="1" max="30" value="7" class="mt-3 w-full accent-cyan-400">
                            <div class="mt-2 flex items-center justify-between text-sm">
                                <span id="durationValue" class="font-bold text-white">7</span>
                                <select id="durationUnit" class="rounded-lg border border-white/15 bg-black/30 px-3 py-1.5 text-slate-200">
                                    <option value="hours">Hours</option>
                                    <option value="days" selected>Days</option>
                                </select>
                            </div>
                        </label>
                    </div>

                    <div class="estimator-output rounded-2xl mt-7 p-5">
                        <p class="text-xs uppercase tracking-[0.18em] text-slate-300 mb-2">Estimated Cost</p>
                        <p class="text-5xl font-black leading-none text-white mb-2"><span id="tokenEstimate">0</span> <span class="text-xl text-green-300">BAI</span></p>
                        <p class="text-xs text-slate-300">Projected compute throughput: <span id="throughputEstimate" class="text-cyan-300 font-bold">0</span></p>
                    </div>
                </article>

                <article class="section-shell rounded-[32px] p-7">
                    <p class="text-xs uppercase tracking-[0.24em] text-purple-300 font-bold mb-3">Performance Analytics</p>
                    <h3 class="heading-font text-4xl font-black mb-4">Network Compute Power</h3>
                    <p class="text-slate-400 mb-6">Rolling 30-day compute growth across the decentralized inference network.</p>
                    <div class="rounded-2xl border border-white/10 bg-black/30 p-4">
                        <canvas id="networkComputeChart" height="230"></canvas>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="latest-insights" class="py-28">
        <div class="max-w-7xl mx-auto px-8 reveal-section">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 mb-10">
                <div>
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-300 font-bold mb-3">AI Blog and News</p>
                    <h2 class="heading-font text-5xl font-black">Latest Insights</h2>
                </div>
                <a href="whitepaper.php" class="inline-flex items-center gap-2 text-sm font-bold text-cyan-300 hover:text-white transition">
                    View all research <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($latestInsights as $insight): ?>
                    <article class="insight-card section-shell rounded-[28px] overflow-hidden">
                        <div class="h-44 overflow-hidden">
                            <img src="<?= escapeHtml($insight['image']) ?>" alt="<?= escapeHtml($insight['title']) ?>" class="w-full h-full object-cover" loading="lazy" decoding="async">
                        </div>
                        <div class="p-5">
                            <p class="text-[10px] uppercase tracking-[0.2em] text-cyan-300 font-bold mb-3"><?= escapeHtml($insight['tag']) ?></p>
                            <h3 class="text-xl font-black text-white mb-3 leading-tight"><?= escapeHtml($insight['title']) ?></h3>
                            <p class="text-sm text-slate-400 leading-relaxed"><?= escapeHtml($insight['description']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-24 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <h2 class="heading-font text-4xl md:text-6xl font-black mb-5">EXPLORE THE <span class="text-cyan-400">BLOCKAI PLATFORM</span></h2>
                <p class="text-slate-400 max-w-3xl mx-auto">Navigate every business page from one place for a structured enterprise browsing experience.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="services.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Services</p>
                    <h3 class="text-2xl font-bold text-white mb-2">AI Service Marketplace</h3>
                    <p class="text-slate-400 text-sm">Discover verified categories, search vendors, and compare capabilities.</p>
                </a>
                <a href="registration.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Partners</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Vendor Registration</h3>
                    <p class="text-slate-400 text-sm">Apply as a certified partner and join the global provider network.</p>
                </a>
                <a href="vendor_list.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Directory</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Vendor Directory</h3>
                    <p class="text-slate-400 text-sm">Browse partner companies by specialization, region, and certifications.</p>
                </a>
                <a href="about.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Corporate</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Strategy and Infrastructure</h3>
                    <p class="text-slate-400 text-sm">Understand the operating model behind global BlockAI expansion.</p>
                </a>
                <a href="case-studies.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Outcomes</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Case Studies</h3>
                    <p class="text-slate-400 text-sm">Review measurable client outcomes across industries and regions.</p>
                </a>
                <a href="whitepaper.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Documentation</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Technical Whitepaper</h3>
                    <p class="text-slate-400 text-sm">Read architecture, governance, security, and roadmap details.</p>
                </a>
                <a href="governance.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">DAO</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Governance Portal</h3>
                    <p class="text-slate-400 text-sm">Follow active proposals and protocol decisions from tokenholders.</p>
                </a>
                <a href="careers.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Talent</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Careers</h3>
                    <p class="text-slate-400 text-sm">Join product, infrastructure, and ecosystem teams around the world.</p>
                </a>
                <a href="contact.php" class="glass-morphism rounded-3xl p-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <p class="text-xs uppercase tracking-widest text-cyan-300 mb-3">Support</p>
                    <h3 class="text-2xl font-bold text-white mb-2">Contact and Sales</h3>
                    <p class="text-slate-400 text-sm">Reach architecture, partnership, and support teams directly.</p>
                </a>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-black pt-40 pb-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-14 mb-32">
                <div class="col-span-2">
                    <h2 class="heading-font text-5xl font-black mb-8 leading-none">JOIN THE <br> <span class="text-cyan-400">REVOLUTION.</span></h2>
                    <div class="max-w-md">
                        <p class="text-slate-500 mb-8">Subscribe to our technical newsletter and stay updated on decentralized AI trends.</p>
                        <form class="flex gap-4">
                            <input type="email" placeholder="Your work email" class="flex-1 bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-cyan-500 text-white">
                            <button class="px-8 bg-white text-black font-black rounded-2xl hover:bg-cyan-400 transition">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
                <div>
                    <h5 class="font-black text-xs uppercase tracking-[0.3em] mb-8 text-cyan-400">Navigation</h5>
                    <ul class="space-y-4 text-sm font-bold text-slate-500">
                        <li><a href="services.php" class="hover:text-white transition">AI Marketplace</a></li>
                        <li><a href="vendor_list.php" class="hover:text-white transition">Vendor Directory</a></li>
                        <li><a href="whitepaper.php" class="hover:text-white transition">Whitepaper</a></li>
                        <li><a href="case-studies.php" class="hover:text-white transition">Case Studies</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-black text-xs uppercase tracking-[0.3em] mb-8 text-emerald-300">Platform</h5>
                    <ul class="space-y-4 text-sm font-bold text-slate-500">
                        <li><a href="#global-neural-network" class="hover:text-white transition">Global Neural Network</a></li>
                        <li><a href="#compute-estimator" class="hover:text-white transition">Compute Estimator</a></li>
                        <li><a href="#latest-insights" class="hover:text-white transition">Latest Insights</a></li>
                        <li><a href="contact.php" class="hover:text-white transition">Enterprise Support</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-black text-xs uppercase tracking-[0.3em] mb-8 text-purple-400">Governance</h5>
                    <ul class="space-y-4 text-sm font-bold text-slate-500">
                        <li><a href="governance.php" class="hover:text-white transition">DAO Governance</a></li>
                        <li><a href="about.php" class="hover:text-white transition">Foundation Strategy</a></li>
                        <li><a href="privacy-policy.php" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="terms.php" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-12 border-t border-white/5 flex flex-col lg:flex-row justify-between items-center gap-8">
                <div class="flex items-center gap-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-slate-600">© <?= escapeHtml($currentYear) ?> BLOCKAI SOLUTION CORE</span>
                    <div class="flex gap-3 text-lg">
                        <a href="https://discord.com" aria-label="Discord" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl border border-white/10 bg-white/5 flex items-center justify-center text-slate-400 hover:text-white hover:border-cyan-400/40 transition">
                            <i class="fa-brands fa-discord"></i>
                        </a>
                        <a href="https://x.com" aria-label="X" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl border border-white/10 bg-white/5 flex items-center justify-center text-slate-400 hover:text-white hover:border-cyan-400/40 transition">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://github.com" aria-label="GitHub" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl border border-white/10 bg-white/5 flex items-center justify-center text-slate-400 hover:text-white hover:border-cyan-400/40 transition">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>
                <div class="flex gap-8 text-[10px] font-black uppercase tracking-widest text-slate-700">
                    <a href="privacy-policy.php">Privacy Policy</a>
                    <a href="terms.php">Terms of Use</a>
                    <a href="contact.php">Contact</a>
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

        const nodeMapPayload = <?= json_encode($globalAiNodes, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
        const gpuPricingTable = <?= json_encode($gpuRates, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;

        const initGlobalNeuralMap = () => {
            const mapEl = document.getElementById("globalNodeMap");
            if (!mapEl || typeof L === "undefined") {
                return;
            }

            const map = L.map(mapEl, {
                zoomControl: false,
                attributionControl: false,
                scrollWheelZoom: false
            }).setView([25, 15], 2);

            L.tileLayer("https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png", {
                subdomains: "abcd",
                maxZoom: 19
            }).addTo(map);

            const pulseMarkers = [];
            nodeMapPayload.forEach((node) => {
                const latLng = [Number(node.lat), Number(node.lng)];
                L.circleMarker(latLng, {
                    radius: 6,
                    color: "#56ff89",
                    fillColor: "#56ff89",
                    fillOpacity: 0.95,
                    weight: 1.5,
                    className: "node-core"
                })
                .bindPopup(
                    `<div style="font-family: Inter, sans-serif; min-width: 170px;">
                        <strong style="display:block; margin-bottom:4px;">${node.city}</strong>
                        <span style="font-size:12px; color:#94a3b8;">${node.region}</span><br>
                        <span style="font-size:11px; color:#22d3ee; text-transform:uppercase; letter-spacing:0.08em;">${node.compute}</span>
                    </div>`
                )
                .addTo(map);

                const pulse = L.circleMarker(latLng, {
                    radius: 12,
                    color: "#56ff89",
                    fillColor: "#56ff89",
                    fillOpacity: 0.05,
                    opacity: 0.24,
                    weight: 2,
                    className: "node-pulse"
                }).addTo(map);
                pulseMarkers.push(pulse);
            });

            let phase = 0;
            setInterval(() => {
                phase += 0.16;
                pulseMarkers.forEach((pulse, index) => {
                    const wave = Math.sin(phase + index);
                    pulse.setRadius(10 + ((wave + 1) * 3.5));
                    pulse.setStyle({
                        opacity: 0.12 + (((wave + 1) / 2) * 0.22)
                    });
                });
            }, 120);

            setTimeout(() => map.invalidateSize(), 200);
        };

        const initComputeEstimator = () => {
            const modelSelect = document.getElementById("gpuModelSelect");
            const durationSlider = document.getElementById("durationSlider");
            const durationUnit = document.getElementById("durationUnit");
            const durationValue = document.getElementById("durationValue");
            const tokenEstimate = document.getElementById("tokenEstimate");
            const throughputEstimate = document.getElementById("throughputEstimate");

            if (!modelSelect || !durationSlider || !durationUnit || !durationValue || !tokenEstimate || !throughputEstimate) {
                return;
            }

            const updateEstimator = () => {
                const selectedModel = modelSelect.value;
                const quantity = Number(durationSlider.value);
                const unit = durationUnit.value;
                const multiplier = unit === "days" ? 24 : 1;
                const totalHours = quantity * multiplier;
                const rate = Number(gpuPricingTable[selectedModel] ?? 0);
                const estimate = Math.round(totalHours * rate);
                const throughput = Math.round(estimate * 13.6);

                durationValue.textContent = `${quantity} ${unit}`;
                tokenEstimate.textContent = estimate.toLocaleString("en-US");
                throughputEstimate.textContent = `${throughput.toLocaleString("en-US")} req/day`;
            };

            modelSelect.addEventListener("change", updateEstimator);
            durationSlider.addEventListener("input", updateEstimator);
            durationUnit.addEventListener("change", updateEstimator);
            updateEstimator();
        };

        const initNetworkComputeChart = () => {
            const chartCanvas = document.getElementById("networkComputeChart");
            if (!chartCanvas || typeof Chart === "undefined") {
                return;
            }

            let base = 860;
            const growthSeries = Array.from({ length: 30 }, () => {
                base += 8 + Math.random() * 12;
                return Math.round(base);
            });
            const labels = growthSeries.map((_, i) => `D${i + 1}`);

            const ctx = chartCanvas.getContext("2d");
            const gradient = ctx.createLinearGradient(0, 0, 0, chartCanvas.height);
            gradient.addColorStop(0, "rgba(0, 212, 255, 0.45)");
            gradient.addColorStop(1, "rgba(86, 255, 137, 0.04)");

            new Chart(ctx, {
                type: "line",
                data: {
                    labels,
                    datasets: [{
                        label: "Network Compute Power",
                        data: growthSeries,
                        borderColor: "#00d4ff",
                        backgroundColor: gradient,
                        fill: true,
                        pointRadius: 0,
                        tension: 0.35,
                        borderWidth: 2.4
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        x: {
                            grid: { color: "rgba(255,255,255,0.05)" },
                            ticks: { color: "rgba(203,213,225,0.7)", maxTicksLimit: 8 }
                        },
                        y: {
                            grid: { color: "rgba(255,255,255,0.05)" },
                            ticks: {
                                color: "rgba(203,213,225,0.7)",
                                callback: (value) => `${value} TF`
                            }
                        }
                    }
                }
            });
        };

        // Scroll Reveal Animations
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".reveal-content", {
            duration: 1.5,
            y: 50,
            opacity: 0,
            ease: "power4.out",
            stagger: 0.2
        });

        gsap.utils.toArray(".reveal-section").forEach((section) => {
            gsap.from(section, {
                y: 56,
                opacity: 0,
                duration: 1.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 82%",
                    toggleActions: "play none none none"
                }
            });
        });

        initGlobalNeuralMap();
        initComputeEstimator();
        initNetworkComputeChart();
    </script>
</body>
</html>
