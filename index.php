<?php 
include 'db_connect.php'; 

// Fetch all products with ProductID from SQL
try {
    // এখানে ProductID যোগ করা হয়েছে
    $sql = "SELECT ProductID, Category, ProductName, ShortDescription, Price FROM BusinessProducts";
    $stmt = $conn->query($sql);
    $db_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Convert SQL data to JS-friendly format
    $js_data = [];
    foreach ($db_products as $row) {
        $js_data[] = [
            'id'    => $row['ProductID'], // এই 'id' টাই নিচের JavaScript-এ p.id হিসেবে কাজ করবে
            'cat'   => strtolower($row['Category']),
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
    <title>BlockAI Solution | SQL Powered</title>
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
                <a href="#" class="text-sm font-bold text-slate-600">Marketplace</a>
                <a href="#" class="text-sm font-bold text-slate-600">For Vendors</a>
            </div>
            <a href="#" class="bg-indigo-600 text-white px-6 py-2 rounded-full text-sm font-bold">Get Started</a>
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Our Complete Strategic Suite</h2>
            <p class="text-slate-500">Real-time solutions fetched from Azure SQL Database.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button onclick="filterProducts('cloud', this)" class="tab-btn active-tab px-6 py-3 rounded-full font-bold text-sm bg-indigo-600 text-white shadow-sm">Cloud Computing</button>
            <button onclick="filterProducts('ai', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Artificial Intelligence</button>
            <button onclick="filterProducts('blockchain', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Blockchain</button>
            <button onclick="filterProducts('crypto', this)" class="tab-btn px-6 py-3 rounded-full font-bold text-sm bg-white border border-slate-200 text-slate-600 hover:border-indigo-600 transition">Crypto & Fintech</button>
        </div>

        <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            </div>
    </section>

    <script>
        // Only the essential JS for filtering, data comes from PHP/SQL
        const products = <?php echo json_encode($js_data); ?>;

        function filterProducts(category, btnElement) {
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white');
                btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
            });
            btnElement.classList.add('bg-indigo-600', 'text-white');
            btnElement.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');

            const grid = document.getElementById('product-grid');
            const filtered = products.filter(p => p.cat === category);
            
            grid.innerHTML = filtered.map(p => `
                <div class="bg-white border border-slate-100 p-5 rounded-2xl shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-slate-800 mb-2 text-sm">${p.title}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">${p.desc}</p>
                        <p class="mt-3 text-indigo-600 font-bold">$${p.price}</p>
                    </div>
                    
                    <a href="product-details.php?id=${p.id}" target="_blank" class="mt-4 text-[10px] font-bold text-center text-indigo-600 uppercase tracking-wider border border-indigo-100 py-2 rounded-lg hover:bg-indigo-50 transition">
                        Learn More &rarr;
                    </a>
                </div>
            `).join('');
        }

        window.onload = () => filterProducts('cloud', document.querySelector('.tab-btn'));
    </script>

    <footer class="bg-slate-900 text-white py-10 text-center">
        <p class="text-xs text-slate-500">&copy; 2026 BlockAI Solution. SQL Live Data.</p>
    </footer>
</body>
</html>
