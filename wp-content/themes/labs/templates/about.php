<?php
// https://developer.wordpress.org/reference/functions/get_theme_mod/
// Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. À ne faire que si vous avez le control de la config php.ini
// $card_title_left = get_theme_mod('home-card-title-left', __('Titre card gauche'));
// $card_text_left = get_theme_mod('home-card-text-left', __('Text card gauche'));

// $card_title_center = get_theme_mod('home-card-title-center', __('Titre card centrale'));
// $card_text_center = get_theme_mod('home-card-text-center', __('Text card centrale'));

// $card_title_right = get_theme_mod('home-card-title-right', __('Titre card droite'));
// $card_text_right = get_theme_mod('home-card-text-right', __('Text card droite'));

$about_title = get_theme_mod('home-about-title', __('Titre section about'));
$about_title = str_replace("[", "<span>", $about_title);
$about_title = str_replace("]", "</span>", $about_title);

$about_text_left = get_theme_mod('home-about-text-left', __('Text gauche section about'));
$about_text_right = get_theme_mod('home-about-text-right', __('Text droit section about'));

$about_btn_name = get_theme_mod('home-about-btn-name', __('Bouton About'));

$about_video = get_theme_mod('home-about-video', __('Entrez l\'URL de la vidéo YouTube.'));
$about_video_vignette = get_theme_mod('home-about-video');

// $monTxt = get_theme_mod('about_id_text');
// $monTxt = str_replace("[", "<span>", $monTxt);
// $monTxt = str_replace("]", "</span>", $monTxt);
?>

<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>

    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>

                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>

                <!-- single card -->
                <div class="col-md-4 col-sm-12">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
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
                <a href="" class="site-btn"><?= $about_btn_name ?></a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="<?= $about_video_vignette ?>" alt="">
                        <a href="<?= $about_video ?>" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->