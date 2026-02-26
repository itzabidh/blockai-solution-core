<?php
// Case Studies Data Array - Can be moved to a database later
$case_studies = [
    [
        "category" => "Logistics & Supply Chain",
        "category_color" => "indigo",
        "image" => "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80",
        "title" => "Optimizing Trans-Atlantic Shipping via Predictive AI",
        "description" => "A mid-sized logistics firm needed to reduce port delays. Through BlockAI, they found a verified ML vendor that integrated a custom predictive model.",
        "stats" => [
            ["value" => "18%", "label" => "Cost Reduction"],
            ["value" => "32%", "label" => "Faster Clearance"]
        ],
        "link" => "strategy-logistics.php"
    ],
    [
        "category" => "Healthcare Compliance",
        "category_color" => "emerald",
        "image" => "https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80",
        "title" => "Scaling Healthcare AI Across EU Borders",
        "description" => "An American health-tech startup used our compliance frameworks to navigate GDPR and EU AI Act requirements within 4 months.",
        "stats" => [
            ["value" => "100%", "label" => "Legal Compliance"],
            ["value" => "5+", "label" => "New Markets"]
        ],
        "link" => "strategy-healthcare.php"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies | Global Impact of BlockAI</title>
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
                    <a href="services.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Services</a>
                    <a href="vendor_list.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Vendor Directory</a>
                    <a href="about.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Strategy</a>
                </div>
                <a href="registration.php" class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-indigo-700 transition shadow-md">Get Started</a>
            </div>
        </div>
    </nav>

    <header class="bg-indigo-950 py-20 px-4 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-black mb-4 tracking-tight">Real Results. <span class="text-indigo-400">Global Scale.</span></h1>
        <p class="text-slate-400 max-w-2xl mx-auto text-lg">Exploring how BlockAI Solution bridges the gap for enterprises through verified AI integration.</p>
    </header>

    <main class="max-w-7xl mx-auto py-16 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <?php foreach ($case_studies as $study): ?>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-2xl transition duration-500">
                <div class="h-64 bg-slate-200 relative">
                    <img src="<?php echo $study['image']; ?>" alt="<?php echo $study['category']; ?>" class="w-full h-full object-cover opacity-80">
                    <div class="absolute top-6 left-6 bg-<?php echo $study['category_color']; ?>-600 text-white px-4 py-1 rounded-full text-xs font-bold uppercase">
                        <?php echo $study['category']; ?>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4"><?php echo $study['title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        <?php echo $study['description']; ?>
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <?php foreach ($study['stats'] as $stat): ?>
                        <div class="p-4 bg-slate-50 rounded-2xl">
                            <span class="block text-2xl font-black text-<?php echo $study['category_color']; ?>-600"><?php echo $stat['value']; ?></span>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-widest"><?php echo $stat['label']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo $study['link']; ?>" class="text-indigo-600 font-bold flex items-center hover:gap-2 transition-all">
                        Read Full Strategy <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="mt-20 p-12 bg-white rounded-[40px] border border-slate-100 text-center">
            <i class="fa-solid fa-quote-left text-4xl text-slate-200 mb-6"></i>
            <p class="text-xl md:text-2xl font-medium text-slate-800 italic mb-8">
                "BlockAI Solution didn't just find us a vendor; they provided the strategic governance we needed to scale internationally without legal friction."
            </p>
            <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 bg-slate-300 rounded-full overflow-hidden">
                    <img src="https://i.pravatar.cc/150?u=1" alt="CEO">
                </div>
                <div class="text-left">
                    <h5 class="font-bold text-sm">Marcus Thorne</h5>
                    <p class="text-xs text-slate-500 font-medium tracking-wide">CTO, Global Dynamics</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-slate-900 text-white py-16 px-4 mt-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <span class="text-2xl font-black text-indigo-400">BlockAI Solution</span>
                <p class="mt-4 text-slate-400 text-sm max-w-sm">Eliminating the complexity gap between frontier AI and global enterprise needs.</p>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-xs uppercase tracking-widest">Resources</h4>
                <ul class="text-slate-400 text-sm space-y-4">
                    <li><a href="case-studies.php" class="hover:text-white transition">Case Studies</a></li>
                    <li><a href="services.php" class="hover:text-white transition">AI Services</a></li>
                    <li><a href="vendor_list.php" class="hover:text-white transition">Vendor Directory</a></li>
                    <li><a href="about.php" class="hover:text-white transition">Strategy</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-xs uppercase tracking-widest text-indigo-400">Connect With Us</h4>
                <ul class="text-slate-400 text-sm space-y-4">
                    <li><a href="contact.php" class="hover:text-white transition font-bold"><i class="fa-solid fa-envelope mr-2"></i>Contact Us Form</a></li>
                    <li class="hover:text-white transition cursor-pointer">support@blockaisolution.com</li>
                    <li>London HQ, UK</li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-slate-800 text-center text-slate-500 text-[10px] uppercase tracking-[3px]">
            &copy; <?php echo date("Y"); ?> BlockAI Solution | Global Operations Center
        </div>
    </footer>
</body>
</html>
