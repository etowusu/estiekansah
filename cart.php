<?php
$pageTitle = 'Cart — Estiekansah';
require 'includes/head.php';
require 'includes/header.php';
?>

<section class="products-section container">
    <h1 class="section-title">Your Cart</h1>

    <div id="cart-empty" class="empty-cart" style="display:none;">
        <h2 style="font-size:1.1rem;margin-bottom:0.5rem;">Your cart is empty</h2>
        <p style="font-size:0.9rem;margin-bottom:1rem;">Browse our products and add something you love.</p>
        <a href="products.php" class="btn">Shop Now</a>
    </div>

    <div id="cart-items" class="cart-items"></div>

    <div id="cart-summary" class="cart-summary" style="display:none;">
        <div class="total-row">
            <span>Order Total</span>
            <span id="cart-total">GHS 0.00</span>
        </div>
        <button class="btn btn-full" onclick="checkoutWhatsApp()">
            Proceed to WhatsApp Checkout
        </button>
        <p style="font-size:0.75rem;margin-top:0.75rem;text-align:center;">
            Your order will be sent to Estiekansah Fumigation via WhatsApp for confirmation.
        </p>
    </div>
</section>

<?php require 'includes/footer.php'; ?>