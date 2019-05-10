<?php
$carousel_img_1 = get_theme_mod('home-intro-carousel-img-1');
$carousel_img_2 = get_theme_mod('home-intro-carousel-img-2');
$logo_carousel = get_theme_mod('home-carousel-logo');
?>

<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="<?= $logo_carousel ?>" alt="">
            <p><?= get_bloginfo('description'); ?></p>
        </div>
    </div>

    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="<?= $carousel_img_1 ?>"></div>
        <div class="item  hero-item" data-bg="<?= $carousel_img_2 ?>"></div>
    </div>
</div>
<!-- Intro Section -->