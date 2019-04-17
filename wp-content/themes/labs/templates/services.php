<?php
$services_title = get_theme_mod('home-services-title', __('Titre Services'));
$services_title = str_replace("[", "<span>", $services_title);
$services_title = str_replace("]", "</span>", $services_title);
?>

<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2><?= $services_title ?></h2>
        </div>
        <div class="row">
            <?php
            // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
            // Pour cela nous allons utiliser la class WP_Query 
            // https://developer.wordpress.org/reference/classes/wp_query/
            $args = [
                'post_type' => 'service',
                'posts_per_page' => 9,
                'orderby' => 'rand'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>

                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="<?= get_post_meta(get_the_ID(), 'service_icon', true) ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?= the_title(); ?></h2>
                            <p><?= the_content(); ?></p>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p> -->
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->