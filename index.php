<?php
$pageTitle = 'Estiekansah Fumigation';
$bodyClass = 'has-transparent-header';
require 'includes/head.php';
require 'includes/header.php';

$products = require 'data/products.php';
$featured = array_slice($products, 0, 4);
?>

<!-- For transparent header background becomming dark on scroll -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("site-header");
    
    // Check if the page is using the transparent header layout
    if (document.body.classList.contains("has-transparent-header")) {
      window.addEventListener("scroll", function () {
        // If scrolled more than 50px, add the class
        if (window.scrollY > 50) {
          header.classList.add("is-scrolled");
        } else {
          header.classList.remove("is-scrolled");
        }
      });
    }
  });
</script>

<!-- ===============================
     HERO BANNER (VIDEO BG)
     =============================== -->
<section class="hero">
    <video
        class="hero-video"
        autoplay
        muted
        loop
        playsinline
        preload="metadata"
        poster="assets/images/hero-poster.jpg"
    >
        <source src="assets/images/banner3.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <div class="hero-inner">
        <h1 class="hero-title">Get Professional Fumigation and Pest Control Services</h1>
        <p class="hero-subtitle">
            We create cleaner, safer and healthier environments for homes, businesses and industries.
        </p>
        <a href="https://wa.me/233243177538" class="btn hero-btn">Get in Touch</a>
    </div>
</section>

<!-- ===============================
     TRUST BADGES (PEST CONTROL)
     =============================== -->
<section class="trust-badges container">
     <div class="container">
        <div class="badges-grid">
            
            <div class="badge-item">
                <div class="badge-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                </div>
                <div class="badge-text">
                    <h4>EPA Certified</h4>
                    <p>Safe, Approved Chemicals</p>
                </div>
            </div>

            <div class="badge-item">
                <div class="badge-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><path d="M11 8v6"></path><path d="M8 11h6"></path></svg>
                </div>
                <div class="badge-text">
                    <h4>Expert Inspection</h4>
                    <p>Thorough Pest Assessment</p>
                </div>
            </div>

            <div class="badge-item">
                <div class="badge-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <div class="badge-text">
                    <h4>Rapid Response</h4>
                    <p>Same-Day Emergency Service</p>
                </div>
            </div>

            <div class="badge-item">
                <div class="badge-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <div class="badge-text">
                    <h4>24/7 Support</h4>
                    <p>Call or WhatsApp Anytime</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===============================
     ABOUT US SECTION
     =============================== -->
<section class="about-section container">
     <div class="container">
        <div class="about-grid">
            <div class="about-text-col">
                <h2 class="section-heading">About Us</h2>
                <p>
                    Are pests, harmful germs and unclean environments putting your health, comfort and safety at risk?
                </p>
                <p>
                    At <strong>Estiekansah Fumigation</strong>, we provide reliable fumigation, pest control, disinfection and cleaning services, alongside quality industrial chemicals and organic health products to address these challenges.
                </p>
                <p>
                    Our goal is to create cleaner, safer and healthier environments for homes, businesses and industries.
                </p>
                <a href="https://wa.me/233243177538" class="btn-custom">Get in Touch</a>
            </div>
            <div class="about-image-col">
                <img src="assets/images/about-us2.jpg" alt="Estiekansah Fumigation Team">
            </div>
        </div>
    </div>
</section>

<!-- =========================================
     SERVICES SECTION
     ========================================= -->
<section class="services-section">
  <div class="container">
    <h2 class="section-heading">Our Services</h2>
    
    <div class="services-grid">
      
      <!-- Service 1: White Card -->
      <div class="service-card card-light">
        <div class="service-icon">
          <!-- Bug / Pest Control Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
        </div>
        <h3>Pest Control & Fumigation</h3>
        <p>We provide effective pest control, fumigation and disinfection solutions that eliminate harmful pests, protect stored grains and keep homes, businesses and industrial spaces safe and hygienic.</p>
        <a href="services.php" class="btn-outline">Learn more</a>
      </div>

      <!-- Service 2: Theme Tinted Card -->
      <div class="service-card card-theme">
        <div class="service-icon">
          <!-- Cleaning / Home Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
        </div>
        <h3>Cleaning Services</h3>
        <p>We deliver reliable residential, commercial and specialised cleaning services that leave your spaces spotless, fresh, hygienic and welcoming.</p>
        <a href="services.php" class="btn-outline">Learn more</a>
      </div>

    </div>
  </div>
</section>

<!-- ===============================
     FEATURED PRODUCTS
     =============================== -->
<section class="products-section container">
    <div class="container">
        <h2 class="section-title">Featured Products</h2>
        <div class="products-grid">
            <?php foreach ($featured as $product): ?>
                <?php include 'includes/product-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <div style="text-align:center;margin-top:1.5rem;">
            <a href="products.php" class="btn btn-hero" style="color:black;">View All Products</a>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>