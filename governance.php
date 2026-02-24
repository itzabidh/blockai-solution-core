<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governance DAO | BlockAI Solution</title>
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
        .vote-bar { height: 8px; border-radius: 4px; background: rgba(255,255,255,0.1); overflow: hidden; }
        .vote-progress-yes { height: 100%; background: linear-gradient(90deg, #00d4ff, #00ff88); }
        .vote-progress-no { height: 100%; background: linear-gradient(90deg, #ff4b2b, #ff416c); }
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
            <div class="flex items-center gap-6">
                <a href="index.php" class="hidden md:block text-sm font-bold uppercase tracking-wide text-slate-400 hover:text-white transition">Home</a>
                <button class="px-5 py-2 rounded-xl bg-gradient-to-r from-cyan-500 to-purple-600 text-white text-xs font-bold uppercase tracking-widest hover:scale-105 transition shadow-lg">Connect Wallet</button>
            </div>
        </div>
    </nav>

    <header class="pt-40 pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h1 class="heading-font text-5xl md:text-7xl font-extrabold text-white mb-6">DAO <span class="text-cyan-400">Governance</span></h1>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
                    Stake your BLOCKAI tokens to propose, vote, and shape the decentralized future of our AI ecosystem.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="ocean-glass p-8 rounded-3xl border border-white/10">
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-2">Total Staked</p>
                    <h3 class="text-3xl font-bold text-white">4,250,910 <span class="text-sm text-cyan-400">BLOCKAI</span></h3>
                </div>
                <div class="ocean-glass p-8 rounded-3xl border border-white/10">
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-2">Active Proposals</p>
                    <h3 class="text-3xl font-bold text-white">12 <span class="text-sm text-purple-400">Live Now</span></h3>
                </div>
                <div class="ocean-glass p-8 rounded-3xl border border-white/10">
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-2">Your Voting Power</p>
                    <h3 class="text-3xl font-bold text-white">0.00 <span class="text-sm text-slate-500">VP</span></h3>
                </div>
            </div>
        </div>
    </header>

    <main class="pb-24">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="flex items-center justify-between mb-10">
                <h2 class="heading-font text-3xl font-bold text-white">Live Proposals</h2>
                <button class="text-cyan-400 font-bold border border-cyan-400/30 px-6 py-2 rounded-xl hover:bg-cyan-400/10 transition">+ Create Proposal</button>
            </div>

            <div class="ocean-glass p-8 rounded-[40px] mb-8 border border-white/5 hover:border-cyan-400/30 transition-all group">
                <div class="flex flex-col lg:flex-row justify-between gap-10">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-green-500/10 text-green-400 text-[10px] font-bold uppercase rounded-full border border-green-500/20">Active</span>
                            <span class="text-slate-500 text-xs">ID: BAI-2026-04</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition">Integration of Homomorphic Encryption in V3 Nodes</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">This proposal aims to upgrade all Tier-1 nodes to support Fully Homomorphic Encryption (FHE) to enhance user data privacy during AI model training...</p>
                        
                        <div class="flex items-center gap-6 text-xs font-bold text-slate-500 uppercase tracking-widest">
                            <span><i class="fa-solid fa-user mr-2"></i> Proposer: 0x71C...4a2</span>
                            <span><i class="fa-solid fa-clock mr-2"></i> Ends in: 2 days</span>
                        </div>
                    </div>

                    <div class="w-full lg:w-80 space-y-6">
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-2">
                                <span class="text-cyan-400 uppercase">Yes (82%)</span>
                                <span class="text-slate-400">1.2M BLOCKAI</span>
                            </div>
                            <div class="vote-bar"><div class="vote-progress-yes" style="width: 82%"></div></div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-2">
                                <span class="text-pink-500 uppercase">No (18%)</span>
                                <span class="text-slate-400">260K BLOCKAI</span>
                            </div>
                            <div class="vote-bar"><div class="vote-progress-no" style="width: 18%"></div></div>
                        </div>
                        <button class="w-full py-4 bg-white text-black font-bold rounded-2xl hover:bg-cyan-400 transition">Cast Your Vote</button>
                    </div>
                </div>
            </div>

            <div class="ocean-glass p-8 rounded-[40px] border border-white/5 opacity-70">
                <div class="flex flex-col lg:flex-row justify-between gap-10">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-slate-500/10 text-slate-400 text-[10px] font-bold uppercase rounded-full border border-slate-500/20">Closed</span>
                            <span class="text-slate-500 text-xs text-green-500 font-bold">Passed ✅</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Allocation of 1M Tokens for Community Grant Program</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Funding for independent developers to build decentralised AI agents on top of BlockAI infrastructure.</p>
                    </div>
                    <div class="w-full lg:w-80 flex flex-col justify-center text-center">
                        <p class="text-slate-500 text-xs font-bold uppercase mb-2">Final Outcome</p>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-tighter">Approved</h4>
                        <p class="text-cyan-400 text-xs font-bold mt-1">Execution in Progress</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    

    <footer class="py-20 border-t border-white/5 bg-[#06060c]">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-8 text-slate-500">
                <a href="#" class="hover:text-cyan-400 transition text-2xl"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="hover:text-cyan-400 transition text-2xl"><i class="fa-brands fa-discord"></i></a>
                <a href="#" class="hover:text-cyan-400 transition text-2xl"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <p class="text-[10px] text-slate-600 font-bold tracking-[0.3em] uppercase">
                &copy; 2026 BLOCKAI SOLUTION | GOVERNANCE PORTAL v1.0.4
            </p>
        </div>
    </footer>

</body>
</html>
