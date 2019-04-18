<?php
$testimonials_title = get_theme_mod('home-testimonials-title', __('Titre Testimonials'));
?>

<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2><?= $testimonials_title ?></h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <?php
                    // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
                    // Pour cela nous allons utiliser la class WP_Query 
                    // https://developer.wordpress.org/reference/classes/wp_query/
                    $args = [
                        'post_type' => 'testimonial',
                        'posts_per_page' => 6,
                        'orderby' => 'rand'
                    ];
                    $query = new WP_Query($args);
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p><?php the_content(); ?></p>
                            <div class="client-info">
                                <!-- <div class="avatar">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/avatar/01.jpg" alt="">
                                </div> -->
                                <div class="client-name">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?= get_post_meta(get_the_ID(), 'job_position', true) ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->