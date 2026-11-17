<?php
$pageTitle = 'Shop — Estiekansah Fumigation';
require 'includes/head.php';
require 'includes/header.php';

$products = require 'data/products.php';
?>

<section class="products-section container">
    <h1 class="section-title">All Products</h1>

    <div class="products-grid">
        <?php foreach ($products as $product): ?>
            <?php include 'includes/product-card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php require 'includes/footer.php'; ?>