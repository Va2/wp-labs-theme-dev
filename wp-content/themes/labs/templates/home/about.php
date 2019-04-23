<?php
// https://developer.wordpress.org/reference/functions/get_theme_mod/
$about_title = get_theme_mod('home-about-title', __('Titre section about'));
$about_title = str_replace("[", "<span>", $about_title);
$about_title = str_replace("]", "</span>", $about_title);

$about_text_left = get_theme_mod('home-about-text-left', __('Text gauche section about'));
$about_text_right = get_theme_mod('home-about-text-right', __('Text droit section about'));

$about_btn_name = get_theme_mod('home-about-btn-name', __('Bouton About'));

$about_video_url = get_theme_mod('home-about-video-url', __('Entrez l\'URL de la vidéo YouTube.'));
$about_video_vignette = get_theme_mod('home-about-video-vignette');
?>

<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>

    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <?php
                // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
                // Pour cela nous allons utiliser la class WP_Query 
                // https://developer.wordpress.org/reference/classes/wp_query/
                $args = [
                    'post_type' => 'service',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                ?>

                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="<?= get_post_meta(get_the_ID(), 'service_icon', true) ?>"></i>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2><?= $about_title ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><?= $about_text_left ?></p>
                </div>
                <div class="col-md-6">
                    <p><?= $about_text_right ?></p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="http://localhost:8080/index.php/blog/" class="site-btn"><?= $about_btn_name ?></a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="<?= $about_video_vignette ?>" alt="">
                        <a href="<?= $about_video_url ?>" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->