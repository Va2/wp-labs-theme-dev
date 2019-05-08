<!-- services card section-->
<div id="product-card" class="services-card-section spad">
    <div class="container">
        <div class="row">
            <?php
            // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
            // Pour cela nous allons utiliser la class WP_Query 
            // https://developer.wordpress.org/reference/classes/wp_query/
            $args = [
                'post_type' => 'product',
                'posts_per_page' => 3,
                'order' => 'DESC'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>

                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- services card section end-->