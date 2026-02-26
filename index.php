<?php
// 1. Database Connection Include
include('db_connect.php'); 
?>
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
        .ocean-glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(25px); border: 1px solid rgba(255, 255, 255, 0.08); box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.6); }
        .gradient-bg-hero { background: radial-gradient(circle at 50% 50%, rgba(112, 0, 255, 0.15) 0%, rgba(0, 0, 0, 0.6) 80%), linear-gradient(180deg, var(--main-bg) 0%, #06060c 100%); }
        .neon-gradient-text { background-image: linear-gradient(90deg, var(--primary-blue), var(--primary-purple)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        @keyframes scroll-left { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .crypto-ticker-container { overflow: hidden; white-space: nowrap; width: 100%; }
        .crypto-ticker-item { display: inline-block; animation: scroll-left 40s linear infinite; }
    </style>
</head>
<body class="overflow-x-hidden relative">

    <nav class="fixed w-full z-50 backdrop-blur-md border-b border-white/5 bg-black/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-tr from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center rotate-12">
                    <i class="fa-solid fa-brain text-white text-lg"></i>
                </div>
                <span class="heading-font text-2xl font-extrabold tracking-tight text-white uppercase">BlockAI</span>
            </a>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#marketplace" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Marketplace</a>
                <a href="#services" class="text-sm font-bold uppercase tracking-wide hover:text-cyan-400 transition">Ecosystem</a>
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
            <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light">Empowering the next generation of AI through blockchain. Secure, transparent, and autonomous ecosystem.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="#marketplace" class="bg-gradient-to-r from-cyan-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:scale-105 transition">Explore Marketplace</a>
                <a href="#" class="ocean-glass px-10 py-4 rounded-full font-bold text-white border border-white/20 hover:bg-white/10 transition">Whitepaper</a>
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
            </div>
        </div>
    </section>

    <section id="marketplace" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="heading-font text-4xl font-bold text-white mb-4">AI Product Marketplace</h2>
                <div class="w-24 h-1 bg-cyan-400 mx-auto rounded-full mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                // Fetching from your table: dbo.BusinessProducts
                $query = "SELECT * FROM dbo.BusinessProducts LIMIT 8";
                $result = mysqli_query($conn, $query);

                if($result && mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="ocean-glass rounded-[30px] p-4 flex flex-col group transition-all duration-500 hover:border-cyan-400/50">
                            <div class="relative overflow-hidden rounded-[20px] mb-4">
                                <img src="uploads/<?php echo $row['ProductImage']; ?>" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500" alt="">
                            </div>
                            <h3 class="heading-font text-xl font-bold text-white mb-2"><?php echo $row['ProductName']; ?></h3>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="text-cyan-400 font-bold">$<?php echo $row['ProductPrice']; ?></span>
                                <a href="product-details.php?id=<?php echo $row['ProductID']; ?>" class="text-[10px] text-white bg-white/10 hover:bg-cyan-400 hover:text-black px-4 py-2 rounded-full font-bold uppercase transition">Details</a>
                            </div>
                        </div>
                <?php } } ?>
            </div>
        </div>
    </section>

    <section class="py-20 bg-black/20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div><h2 class="text-4xl font-bold text-white">500+</h2><p class="text-slate-500 text-xs uppercase tracking-widest">Active Nodes</p></div>
            <div><h2 class="text-4xl font-bold text-white">1.2M</h2><p class="text-slate-500 text-xs uppercase tracking-widest">Data Assets</p></div>
            <div><h2 class="text-4xl font-bold text-white">150+</h2><h2 class="text-4xl font-bold text-white">24/7</h2><p class="text-slate-500 text-xs uppercase tracking-widest">Uptime</p></div>
            <div><h2 class="text-4xl font-bold text-white">24/7</h2><p class="text-slate-500 text-xs uppercase tracking-widest">Uptime</p></div>
        </div>
    </section>

    <footer class="bg-[#06060c] pt-20 pb-10 border-t border-white/5 relative z-10 text-center">
        <p class="text-[10px] text-slate-500 font-bold tracking-widest uppercase">&copy; <?php echo date("Y"); ?> BLOCKAI SOLUTION | ALL RIGHTS RESERVED.</p>
    </footer>

</body>
</html>
