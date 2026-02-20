<?php 
// Include the database connection for future use
include 'db_connect.php'; 

// Control lead strategist info via PHP variables
$lead_name = "Abid Hasan";
$lead_title = "Global Infrastructure & Strategy Lead";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Strategy | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location.href='index.php'">
                    <span class="text-2xl font-black text-indigo-600">BlockAI</span>
                    <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="index.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Home</a>
                    <a href="services.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Marketplace</a>
                    <a href="registration.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">For Vendors</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg hover:bg-indigo-700 transition">Contact Us</button>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-slate-900 py-24 px-4 text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">Global Infrastructure for <span class="text-indigo-400">AI Expansion</span></h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed">
                BlockAI Solution is a strategic ecosystem designed to eliminate the barriers between frontier AI technology and international enterprise scaling.
            </p>
        </div>
    </header>

    <main>
        <section class="max-w-7xl mx-auto py-20 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-28">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-indigo-600">The Problem We Solve</h2>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        In the current digital landscape, 70% of enterprises struggle to find AI vendors that meet their specific regional compliance and technical requirements. This <strong>"Complexity Gap"</strong> slows down innovation and increases operational risk.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-2 rounded-lg mr-4 mt-1">
                                <i class="fa-solid fa-shield-check text-indigo-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Regulatory Navigation</h4>
                                <p class="text-slate-500 text-sm">Managing GDPR, ISO, and local AI governance laws automatically.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-2 rounded-lg mr-4 mt-1">
                                <i class="fa-solid fa-microchip text-indigo-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Technical Auditing</h4>
                                <p class="text-slate-500 text-sm">Ensuring every AI model is technically sound and ready for enterprise-level deployment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2 rounded-3xl shadow-2xl border border-slate-100">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80" alt="Technology Infrastructure" class="rounded-[22px]">
                </div>
            </div>
        </section>

        <section class="py-24 bg-white overflow-hidden border-y border-slate-100">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-16 bg-slate-50 p-8 md:p-20 rounded-[60px] border border-slate-100 shadow-sm relative">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-100/50 rounded-full -mr-32 -mt-32 blur-3xl"></div>

                    <div class="w-full md:w-1/3 flex-shrink-0 relative">
                        <div class="aspect-[4/5] rounded-[40px] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.1)] border-8 border-white rotate-2 hover:rotate-0 transition-all duration-700 ease-in-out">
                            <img src="https://blockaistore.blob.core.windows.net/assets/Abid_Hasan.png?sp=r&st=2026-02-18T18:29:29Z&se=2028-01-31T02:44:29Z&spr=https&sv=2024-11-04&sr=c&sig=lkSp%2BzdU1dpZCLUfgVfHUXQ7OgREcOvUKBFItGilKwQ%3D" 
                                 alt="<?php echo $lead_name; ?> - Lead Strategist" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 -right-4 bg-white px-6 py-3 rounded-2xl shadow-xl flex items-center gap-2 border border-slate-100">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-[10px] font-black text-slate-900 uppercase tracking-widest">Verified Strategy Lead</span>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-50 text-indigo-700 rounded-full mb-8">
                            <i class="fa-solid fa-graduation-cap text-xs"></i>
                            <span class="text-[10px] font-bold uppercase tracking-wider">MSc Business & International Management</span>
                        </div>
                        
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-[1.1]">
                            "Bridging the gap between <span class="text-indigo-600">AI Innovation</span> and Global Compliance."
                        </h2>
                        
                        <p class="text-slate-500 text-xl leading-relaxed mb-10 font-light italic border-l-4 border-indigo-200 pl-6">
                            "At BlockAI Solution, we don't just provide technology; we engineer strategic trust. My focus is ensuring that every AI vendor we verify meets the highest international standards for enterprise-grade excellence."
                        </p>

                        <div class="flex flex-col gap-1">
                            <h4 class="text-2xl font-bold text-slate-900"><?php echo $lead_name; ?></h4>
                            <p class="text-indigo-600 font-medium tracking-wide"><?php echo $lead_title; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-slate-900 text-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Our Global Infrastructure</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                    <div class="p-8 bg-slate-800 rounded-3xl border border-slate-700 transition hover:bg-slate-700">
                        <h4 class="text-4xl font-black text-indigo-400">12+</h4>
                        <p class="text-[10px] text-slate-400 uppercase tracking-[0.2em] mt-2 font-bold">Data Hubs</p>
                    </div>
                    <div class="p-8 bg-slate-800 rounded-3xl border border-slate-700 transition hover:bg-slate-700">
                        <h4 class="text-4xl font-black text-indigo-400">80+</h4>
                        <p class="text-[10px] text-slate-400 uppercase tracking-[0.2em] mt-2 font-bold">Verified Vendors</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-slate-900 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 text-center md:text-left">
            <div class="col-span-1 md:col-span-2">
                <span class="text-2xl font-black text-indigo-400">BlockAI</span>
                <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
                <p class="mt-4 text-slate-400 text-sm max-w-sm mx-auto md:mx-0 leading-relaxed">
                    Connecting elite AI innovation with global enterprise scale through vetted governance and infrastructure.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-indigo-400">Platform</h4>
                <ul class="text-slate-400 text-sm space-y-4">
                    <li><a href="services.php" class="hover:text-white transition">Marketplace</a></li>
                    <li><a href="registration.php" class="hover:text-white transition">For Vendors</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-indigo-400">Corporate</h4>
                <ul class="text-slate-400 text-sm space-y-4">
                    <li><a href="about.php" class="hover:text-white transition">Strategy</a></li>
                    <li><a href="contact.php" class="hover:text-white transition">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-slate-800 text-center text-slate-500 text-xs">
            <p>&copy; <?php echo date("Y"); ?> BlockAI Solution. Registered Global Operations. All Rights Reserved.</p>
        </div>
    </footer>

    <div id="ai-chat" class="fixed bottom-6 right-6 z-[9999]">
        <button onclick="toggleChat()" class="bg-indigo-600 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition border-4 border-white">
            <i class="fa-solid fa-robot text-xl"></i>
        </button>
    </div>

    <script>
        function toggleChat() {
            const chatBox = document.getElementById('chat-box');
            if(chatBox) chatBox.classList.toggle('hidden');
        }
    </script>
</body>
</html>
