<?php
$pageTitle = 'Gallery | Estiekansah Fumigation';
require 'includes/head.php';
require 'includes/header.php';
?>

<main>
    <section class="gallery-page">
        <div class="container">
            
            <!-- Page Header -->
            <div class="gallery-header">
                <span class="section-eyebrow">OUR WORK</span>
                <h1 class="section-heading">Gallery</h1>
                <p class="gallery-intro">Take a look at our team in action and the equipment we use to get the job done right.</p>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                
                <?php 
                // Loop from 2 to 21 to generate the video tags automatically
                for ($i = 2; $i <= 21; $i++): 
                ?>
                    <div class="gallery-item">
                        <video controls preload="metadata" playsinline>
                            <!-- The source URL dynamically updates based on the loop number -->
                            <source src="assets/images/gallery/gallery<?= $i ?>.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>