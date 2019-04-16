<?php
// https://developer.wordpress.org/reference/functions/get_theme_mod/
// Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. À ne faire que si vous avez le control de la config php.ini
$title_card_left = get_theme_mod('about-title-card-left', __('Titre about card gauche'));
$text_card_left = get_theme_mod('about-text-card-left', __('Text about card gauche'));
$title_card_center = get_theme_mod('about-title-card-center', __('Titre about card centrale'));
$text_card_center = get_theme_mod('about-text-card-center', __('Text about card centrale'));
$title_card_right = get_theme_mod('about-title-card-right', __('Titre about card droite'));
$text_card_right = get_theme_mod('about-text-card-right', __('Text about card droite'));
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
                        <h2><?= $title_card_left ?></h2>
                        <p><?= $text_card_left ?></p>
                    </div>
                </div>

                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <h2><?= $title_card_center ?></h2>
                        <p><?= $text_card_center ?></p>
                    </div>
                </div>

                <!-- single card -->
                <div class="col-md-4 col-sm-12">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <h2><?= $title_card_right ?></h2>
                        <p><?= $text_card_right ?></p>
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
                <h2>Get in <span>the Lab</span> and discover the world</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
                </div>
                <div class="col-md-6">
                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/video.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->