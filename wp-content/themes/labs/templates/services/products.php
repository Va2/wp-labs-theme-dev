<!-- products section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and discover the world</h2>
        </div>
        <div class="row">

            <!-- product item left -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
                // Pour cela nous allons utiliser la class WP_Query 
                // https://developer.wordpress.org/reference/classes/wp_query/
                $args = [
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                //$ids[]= $post->ID;
                ?>

                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="icon">
                            <i class="<?= get_post_meta(get_the_ID(), 'product_icon', true) ?>"></i>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>

            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/device.png" alt="">
                </div>
            </div>

            <!-- product item right -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
                // Pour cela nous allons utiliser la class WP_Query 
                // https://developer.wordpress.org/reference/classes/wp_query/
                $args = [
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                ?>
                    <?php // if (in_array($post->ID, $ids)) { ?>

                        <div class="icon-box light">
                            <div class="icon">
                                <i class="<?= get_post_meta(get_the_ID(), 'product_icon', true) ?>"></i>
                            </div>
                            <div class="service-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>

                    <?php // } ?>
                <?php endwhile; ?>
            </div>

        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->