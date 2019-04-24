<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php
                // while ($query->have_posts()) : $query->the_post();
                ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php // if ( have_posts() ) : ?>
                <?php // while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <!-- Post item -->
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                            <div class="post-date">
                                <h2><?= get_the_date('d'); ?></h2>
                                <h3><?= get_the_date('M Y'); ?></h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-meta">
                                <a href=""><?php the_author(); ?></a>
                                <a>
                                    <?php                                    
                                    $categories = get_categories(); // get_the_tags()
                                    $categoriesArr = [];
                                    if ($categories) :
                                        foreach($categories as $category) :
                                            $categoriesArr[] = ucfirst($category->name);
                                        endforeach;
                                        echo implode(", ",$categoriesArr);
                                    endif;
                                    ?>
                                </a>
                                <a href=""><?php comments_number(); ?></a>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink() ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>
         </div>
    </div>
</div>