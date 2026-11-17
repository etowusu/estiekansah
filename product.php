<?php
$products = require 'data/products.php';
$slug = $_GET['slug'] ?? '';

$product = null;
foreach ($products as $item) {
    if ($item['slug'] === $slug) {
        $product = $item;
        break;
    }
}

if (!$product) {
    http_response_code(404);
    $pageTitle = 'Product Not Found — Estiekansah Fumigation';
    require 'includes/head.php';
    require 'includes/header.php';
    echo '<div class="container"><div class="empty-cart"><h2>Product not found</h2>'
       . '<p style="margin-top:0.75rem;"><a href="products.php" class="btn">Back to Shop</a></p></div></div>';
    require 'includes/footer.php';
    exit;
}

$pageTitle = $product['name'] . ' — Estiekansah Fumigation';
require 'includes/head.php';
require 'includes/header.php';
?>

<section class="products-section container">
    <div class="product-details">
        <img
            src="assets/images/products/<?= htmlspecialchars($product['image']) ?>"
            alt="<?= htmlspecialchars($product['name']) ?>"
        >
        <div class="product-details-info">
            <h1><?= htmlspecialchars($product['name']) ?></h1>
            
            <div class="price">Price on Request</div>

            <p><?= htmlspecialchars($product['description']) ?></p>

            <a 
                href="https://wa.me/233243177538?text=Hello,%20I%20would%20like%20to%20inquire%20about%20the%20price%20and%20availability%20of%20<?= urlencode($product['name']) ?>" 
                target="_blank" 
                class="btn btn-full"
                style="display: block; text-align: center; text-decoration: none; margin-top: 1.5rem;"
            >
                Inquire on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>