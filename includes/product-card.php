<div class="product-card">
    <a href="product.php?slug=<?= urlencode($product['slug']) ?>">
        <img
            src="assets/images/products/<?= htmlspecialchars($product['image']) ?>"
            alt="<?= htmlspecialchars($product['name']) ?>"
            loading="lazy"
        >
        <h3><?= htmlspecialchars($product['name']) ?></h3>
    </a>
    
    <p class="product-price">Price on Request</p>
    
    <a 
        href="https://wa.me/233243177538?text=Hello,%20I%20would%20like%20to%20inquire%20about%20the%20price%20and%20availability%20of%20<?= urlencode($product['name']) ?>" 
        target="_blank" 
        class="btn add-to-cart"
        style="text-decoration: none;"
    >
        Inquire Now
    </a>
</div>