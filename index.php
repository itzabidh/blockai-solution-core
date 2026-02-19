<?php 
// ১. ডাটাবেস কানেকশন
include 'db_connect.php'; 

// ২. Azure SQL থেকে প্রোডাক্ট ডেটা নিয়ে আসা
try {
    // ProductID সহ প্রয়োজনীয় সব কলাম সিলেক্ট করা হয়েছে
    $sql = "SELECT ProductID, Category, ProductName, ShortDescription, Price FROM BusinessProducts";
    $stmt = $conn->query($sql);
    $db_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // PHP ডেটাকে JavaScript এ ব্যবহার উপযোগী (JSON) ফরম্যাটে রূপান্তর
    $js_data = [];
    foreach ($db_products as $row) {
        $js_data[] = [
            'id'    => $row['ProductID'], // এই আইডি-ই লিঙ্কে যাবে
            'cat'   => strtolower($row['Category']),
            'title' => $row['ProductName'],
            'desc'  => $row['ShortDescription'],
            'price' => $row['Price']
        ];
    }
} catch (PDOException $e) {
    error_log($e->getMessage());
    $js_data = []; // এরর হলে খালি অ্যারে থাকবে যাতে সাইট ভেঙে না যায়
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solution | Marketplace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location.href='index.php'">
                <span class="text-2xl font-black text-indigo-600">BlockAI</span>
                <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-sm font-bold text-slate-600 hover:text-indigo-600 transition">Marketplace</a>
                <a href="#" class="text-sm font-bold text-slate-600 hover:text-indigo-600 transition">For Vendors</a>
                <a href="#" class="text-sm font-bold text-slate-600 hover:text-indigo-600 transition">Our Strategy</a>
            </div>
            <a href="#" class="bg-indigo-600 text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-indigo-700 transition shadow-md">Get Started</a>
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-4 py-20 border-t border-slate-100">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Our Complete Strategic Suite</h2>
            <p class="text-slate-500 text-lg">Explore specialized AI solutions fetched live from our secure infrastructure.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button onclick="filterProducts('cloud', this)" class="tab-btn active-tab px-6 py-3 rounded-full font-bold text-sm bg-indigo-600 text-white shadow-sm transition">Cloud Computing</button>
            <button onclick="filterProducts('ai', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Artificial Intelligence</button>
            <button onclick="filterProducts('blockchain', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Blockchain</button>
            <button onclick="filterProducts('crypto', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Crypto & Fintech</button>
        </div>

        <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            </div>
    </section>

    <script>
        // PHP থেকে আসা ডেটা
        const products = <?php echo json_encode($js_data); ?>;

        function filterProducts(category, btnElement) {
            // ১. বাটনের এক্টিভ স্টাইল ঠিক করা
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white', 'active-tab');
                btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
            });
            btnElement.classList.add('bg-indigo-600', 'text-white', 'active-tab');
            btnElement.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');

            // ২. গ্রিড ফিল্টার করা
            const grid = document.getElementById('product-grid');
            const filtered = products.filter(p => p.cat === category);
            
            // ৩. গ্রিডে ডেটা পুশ করা (Anchor Tag ব্যবহার করা হয়েছে সঠিক নেভিগেশনের জন্য)
            grid.innerHTML = filtered.map(p => `
                <div class="bg-white border border-slate-100 p-5 rounded-2xl shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-slate-800 mb-2 text-sm">${p.title}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">${p.desc}</p>
                        <p class="mt-3 text-indigo-600 font-bold">$${p.price}</p>
                    </div>
                    
                    <a href="product-details.php?id=${p.id}" target="_blank" class="mt-4 text-[10px] font-bold text-center text-indigo-600 uppercase tracking-wider border border-indigo-100 py-2 rounded-lg hover:bg-indigo-50 transition block">
                        Learn More &rarr;
                    </a>
                </div>
            `).join('');
        }

        // পেজ লোড হলে প্রথম ক্যাটাগরি 'cloud' দেখাবে
        window.onload = () => {
            const firstBtn = document.querySelector('.tab-btn');
            if(firstBtn) filterProducts('cloud', firstBtn);
        };
    </script>

    <footer class="bg-slate-900 text-white py-12 text-center mt-20">
        <p class="text-sm font-bold mb-2">BlockAI Solution Infrastructure</p>
        <p class="text-xs text-slate-500">&copy; 2026 BlockAI Solution. Registered Global Operations.</p>
    </footer>
</body>
</html>
