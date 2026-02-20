<?php 
// 1. Database Connection - Ensuring it pulls from your Azure SQL config
include 'db_connect.php'; 

// 2. Fetch Data from Azure SQL
try {
    $sql = "SELECT ProductID, Category, ProductName, ShortDescription, Price FROM BusinessProducts";
    $stmt = $conn->query($sql);
    $db_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $js_data = [];
    foreach ($db_products as $row) {
        $js_data[] = [
            'id'    => $row['ProductID'], 
            'cat'   => strtolower(trim($row['Category'])),
            'title' => $row['ProductName'],
            'desc'  => $row['ShortDescription'],
            'price' => $row['Price']
        ];
    }
} catch (PDOException $e) {
    error_log($e->getMessage());
    $js_data = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center cursor-pointer" onclick="window.location.href='index.php'">
                <span class="text-2xl font-black text-indigo-600">BlockAI</span>
                <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Home</a>
                <a href="services.php" class="text-sm font-bold text-indigo-600">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Strategy</a>
                <a href="contact.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Contact</a>
            </div>
            <a href="registration.php" class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-indigo-700 transition shadow-md">Get Started</a>
        </div>
    </nav>

    <section class="bg-indigo-950 py-20 px-4 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-black mb-4">Strategic Suite & Solutions</h2>
            <p class="text-slate-400 text-lg">Live data directly integrated from our global cloud infrastructure.</p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-16">
        
        <div class="flex flex-wrap justify-center gap-3 mb-16">
            <button onclick="filterProducts('cloud computing', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition shadow-sm">Cloud Computing</button>
            <button onclick="filterProducts('artificial intelligence', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition shadow-sm">Artificial Intelligence</button>
            <button onclick="filterProducts('blockchain', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition shadow-sm">Blockchain</button>
            <button onclick="filterProducts('crypto & fintech', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition shadow-sm">Crypto & Fintech</button>
        </div>

        <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            </div>
    </section>

    <script>
        // Injecting PHP Data into JS
        const products = <?php echo json_encode($js_data); ?>;

        function filterProducts(category, btnElement) {
            // 1. Reset all button styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white', 'shadow-lg', 'border-transparent');
                btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
            });
            // 2. Highlight active button
            btnElement.classList.add('bg-indigo-600', 'text-white', 'shadow-lg', 'border-transparent');
            btnElement.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');

            const grid = document.getElementById('product-grid');
            const filtered = products.filter(p => p.cat === category.toLowerCase());
            
            if(filtered.length === 0) {
                grid.innerHTML = `<p class="col-span-full text-center text-slate-400 py-20 font-medium italic">Currently no products listed in this strategic category.</p>`;
                return;
            }

            // 3. Render Cards
            grid.innerHTML = filtered.map(p => `
                <div class="bg-white border border-slate-100 p-8 rounded-[32px] shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col group">
                    <div class="mb-6">
                        <div class="h-44 bg-slate-50 rounded-3xl mb-6 flex items-center justify-center overflow-hidden border border-slate-50 group-hover:border-indigo-100 transition">
                           <i class="fa-solid fa-cube text-5xl text-indigo-100 group-hover:text-indigo-600 transition duration-500"></i>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-3 text-lg leading-tight group-hover:text-indigo-600 transition">${p.title}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">${p.desc}</p>
                    </div>
                    <div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
                        <span class="text-indigo-600 font-black text-xl">$${p.price}</span>
                        <a href="product-details.php?id=${p.id}" class="h-10 w-10 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all shadow-inner">
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            `).join('');
        }

        // Initialize view with first category
        window.onload = () => {
            const firstBtn = document.querySelector('.tab-btn');
            if(firstBtn) {
                filterProducts('cloud computing', firstBtn);
            }
        };
    </script>

    <footer class="bg-slate-900 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <span class="text-2xl font-black text-indigo-400">BlockAI Solution</span>
            <p class="mt-4 text-slate-500 text-sm">Empowering digital frontiers through strategic AI governance.</p>
            <div class="mt-8 pt-8 border-t border-slate-800 text-slate-600 text-xs uppercase tracking-widest">
                &copy; <?php echo date("Y"); ?> BlockAI Solution | Global Strategic Integration
            </div>
        </div>
    </footer>

</body>
</html>
