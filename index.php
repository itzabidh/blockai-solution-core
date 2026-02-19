<?php 
// Connect to Azure SQL using the secure script
include 'db_connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockAI Solutions - Official Store</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .product-card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .price { color: #27ae60; font-weight: bold; font-size: 1.2em; }
        .btn-crypto { background: #f7931a; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>BlockAI Premium Solutions</h1>

    <div class="product-grid">
        <?php
        try {
            // Fetching all 20 products from your Azure table
            $sql = "SELECT ProductID, ProductName, ShortDescription, Price FROM BusinessProducts";
            $stmt = $conn->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="product-card">
                    <h3><?php echo htmlspecialchars($row['ProductName']); ?></h3>
                    <p><?php echo htmlspecialchars($row['ShortDescription']); ?></p>
                    <p class="price">$<?php echo number_format($row['Price'], 2); ?></p>
                    <a href="checkout.php?id=<?php echo $row['ProductID']; ?>" class="btn-crypto">Buy with Crypto ₿</a>
                </div>
                <?php
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>

</body>
</html>
