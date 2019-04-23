<?php
$team_title = get_theme_mod('home-team', __('Titre Team [the LABS]'));
$team_title = str_replace("[", "<span>", $team_title);
$team_title = str_replace("]", "</span>", $team_title);
?>

<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2><?= $team_title ?></h2>
        </div>
        <div class="row">
            <?php
            // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
            // Pour cela nous allons utiliser la class WP_Query 
            // https://developer.wordpress.org/reference/classes/wp_query/
            $args = [
                'post_type' => 'team',
                'posts_per_page' => 1,
                'orderby' => 'rand',
                'tag' => 'staff'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <!-- first random staff member -->
                <div class="col-sm-4">
                    <div class="member">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <h3><?= get_post_meta(get_the_ID(), 'job_position', true) ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php
            // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
            // Pour cela nous allons utiliser la class WP_Query 
            // https://developer.wordpress.org/reference/classes/wp_query/
            $args = [
                'post_type' => 'team',
                'posts_per_page' => 1,
                'tag' => 'boss'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <!-- Second fixed boss member -->
                <div class="col-sm-4">
                    <div class="member">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <h3><?= get_post_meta(get_the_ID(), 'job_position', true) ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php
            // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
            // Pour cela nous allons utiliser la class WP_Query 
            // https://developer.wordpress.org/reference/classes/wp_query/
            $args = [
                'post_type' => 'team',
                'posts_per_page' => 1,
                'orderby' => 'rand',
                'tag' => 'staff'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <!-- Third random staff member -->
                <div class="col-sm-4">
                    <div class="member">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <h3><?= get_post_meta(get_the_ID(), 'job_position', true) ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Team Section end-->