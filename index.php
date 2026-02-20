<?php 
// 1. Database Connection
include 'db_connect.php'; 

// 2. Fetch Data from Azure SQL
try {
    // Selecting ProductID, Category, ProductName, ShortDescription, and Price
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location.href='index.php'">
                <span class="text-2xl font-black text-indigo-600">BlockAI</span>
                <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Home</a>
                <a href="services.php" class="text-sm font-bold text-indigo-600">Marketplace</a>
                <a href="case-studies.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Strategy</a>
                <a href="contact.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Contact</a>
            </div>
            <a href="registration.php" class="bg-indigo-600 text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-indigo-700 transition shadow-md">Get Started</a>
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Our Complete Strategic Suite</h2>
            <p class="text-slate-500 text-lg">Specialized solutions fetched live from Azure SQL.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button onclick="filterProducts('cloud computing', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Cloud Computing</button>
            <button onclick="filterProducts('artificial intelligence', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Artificial Intelligence</button>
            <button onclick="filterProducts('blockchain', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Blockchain</button>
            <button onclick="filterProducts('crypto & fintech', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Crypto & Fintech</button>
        </div>

        <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            </div>
    </section>

    <script>
        // Data injected from PHP
        const products = <?php echo json_encode($js_data); ?>;

        function filterProducts(category, btnElement) {
            // 1. Reset button styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white', 'shadow-lg');
                btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
            });
            // 2. Highlight selected button
            btnElement.classList.add('bg-indigo-600', 'text-white', 'shadow-lg');
            btnElement.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');

            const grid = document.getElementById('product-grid');
            const filtered = products.filter(p => p.cat === category.toLowerCase());
            
            if(filtered.length === 0) {
                grid.innerHTML = `<p class="col-span-full text-center text-slate-400 py-10">No solutions found in this category.</p>`;
                return;
            }

            // 3. Generate Solution Cards
            grid.innerHTML = filtered.map(p => `
                <div class="bg-white border border-slate-100 p-6 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="mb-4">
                        <div class="h-40 bg-slate-100 rounded-2xl mb-4 flex items-center justify-center overflow-hidden">
                           <i class="fa-solid fa-cube text-4xl text-indigo-200"></i>
                        </div>
                        <h3 class="font-bold text-slate-800 mb-2 text-md leading-tight">${p.title}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">${p.desc}</p>
                    </div>
                    <div class="mt-auto pt-4 border-t border-slate-50 flex items-center justify-between">
                        <span class="text-indigo-600 font-bold">$${p.price}</span>
                        <a href="product-details.php?id=${p.id}" class="text-xs font-bold text-indigo-600 uppercase tracking-widest hover:translate-x-1 transition-transform">
                            Details &rarr;
                        </a>
                    </div>
                </div>
            `).join('');
        }

        // Default Load
        window.onload = () => {
            const firstBtn = document.querySelector('.tab-btn');
            if(firstBtn) {
                filterProducts('cloud computing', firstBtn);
            }
        };
    </script>

    <footer class="bg-slate-900 text-white py-12 text-center mt-20">
        <p class="text-xs text-slate-500">&copy; <?php echo date("Y"); ?> BlockAI Solution. Real-time Strategic Data Integration.</p>
    </footer>
</body>
</html>
