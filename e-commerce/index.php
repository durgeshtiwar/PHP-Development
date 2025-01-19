<?php
require 'db.php';

// Fetch all main categories
$categories = $pdo->query("SELECT * FROM categories WHERE parent_id IS NULL")->fetchAll(PDO::FETCH_ASSOC);

// Fetch subcategories for a given category
function getSubcategories($pdo, $parentId) {
    $stmt = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ?");
    $stmt->execute([$parentId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fetch products for a given category or subcategory
function getProducts($pdo, $categoryId) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE category_id = ?");
    $stmt->execute([$categoryId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .category, .subcategory {
            margin: 10px 0;
        }
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>E-commerce Categories</h1>

    <?php foreach ($categories as $category): ?>
        <div class="category">
            <h2><?php echo htmlspecialchars($category['name']); ?></h2>

            <?php $subcategories = getSubcategories($pdo, $category['id']); ?>
            <?php if ($subcategories): ?>
                <ul>
                    <?php foreach ($subcategories as $subcategory): ?>
                        <li>
                            <h3><?php echo htmlspecialchars($subcategory['name']); ?></h3>

                            <?php $products = getProducts($pdo, $subcategory['id']); ?>
                            <?php if ($products): ?>
                                <div>
                                    <?php foreach ($products as $product): ?>
                                        <div class="product">
                                            <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                                            <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                                            <p><?php echo htmlspecialchars($product['description']); ?></p>
                                            <p>$<?php echo number_format($product['price'], 2); ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <p>No products available.</p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No subcategories available.</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
