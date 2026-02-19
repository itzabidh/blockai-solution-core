<?php
include 'db_connect.php';

// Get product ID from URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    die("Product not found!");
}

try {
    // Fetch product details from SQL
    $stmt = $conn->prepare("SELECT * FROM BusinessProducts WHERE ProductID = :id");
    $stmt->execute(['id' => $id]);
    $product = $stmt->fetch();

    if (!$product) {
        die("Product does not exist.");
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['ProductName']); ?> | Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white p-10 font-sans">
    <div class="max-w-4xl mx-auto">
        <a href="index.php" class="text-indigo-600 font-bold">&larr; Back to Marketplace</a>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <div>
                <img src="<?php echo htmlspecialchars($product['ImageURL']); ?>" alt="Product" class="rounded-3xl shadow-2xl border">
            </div>
            
            <div>
                <span class="text-indigo-500 font-bold uppercase tracking-widest text-sm"><?php echo htmlspecialchars($product['Category']); ?></span>
                <h1 class="text-4xl font-black text-slate-900 mt-2"><?php echo htmlspecialchars($product['ProductName']); ?></h1>
                <p class="text-2xl font-bold text-green-600 mt-4">$<?php echo number_format($product['Price'], 2); ?></p>
                
                <div class="mt-8 text-slate-600 leading-relaxed">
                    <h3 class="font-bold text-slate-800">Description:</h3>
                    <p class="mt-2"><?php echo nl2br(htmlspecialchars($product['LongDescription'])); ?></p>
                </div>

                <button class="mt-10 w-full bg-slate-900 text-white py-4 rounded-xl font-bold hover:bg-indigo-600 transition">
                    Buy with Crypto ₿
                </button>
            </div>
        </div>
    </div>
</body>
</html>
