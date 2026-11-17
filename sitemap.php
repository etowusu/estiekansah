<?php
header("Content-Type: application/xml; charset=utf-8");

// Load your products
$products = include 'php.txt'; 

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <!-- Static Pages -->
  <url><loc>https://estiekansah.com/</loc><priority>1.0</priority></url>
  <url><loc>https://estiekansah.com/about.php</loc><priority>0.8</priority></url>
  <url><loc>https://estiekansah.com/services.php</loc><priority>0.9</priority></url>
  <url><loc>https://estiekansah.com/shop.php</loc><priority>0.9</priority></url>
  <url><loc>https://estiekansah.com/gallery.php</loc><priority>0.7</priority></url>
  <url><loc>https://estiekansah.com/contact.php</loc><priority>0.8</priority></url>

  <!-- Dynamic Product Pages -->
  <?php foreach ($products as $product): ?>
  <url>
    <!-- Adjust the URL structure below to match your actual routing -->
    <loc>https://estiekansah.com/product.php?slug=<?php echo urlencode($product['slug']); ?></loc>
    <changefreq>weekly</changefreq>
    <priority>0.6</priority>
  </url>
  <?php endforeach; ?>
</urlset>