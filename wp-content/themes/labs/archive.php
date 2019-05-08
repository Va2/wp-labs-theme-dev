<?php
get_header();

get_template_part('templates/header');
?>

<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <h1><?php echo 'Recherche pour: ' . get_query_var('tag') . get_query_var('category_name') ?></h1>
                <br>
                <br>
                <?php while (have_posts()): the_post(); ?>
                    <!-- Post item -->
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                            <div class="post-date">
                                <h2><?=get_the_date("j");?></h2>
                                <h3><?=get_the_date("F Y");?></h3>
                            </div>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title"><?=the_title();?></h2>
                            <div class="post-meta">
                                <a href=""><?=the_author()?></a>
                                <a href="">
                                    <!-- ici la boucle-->
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
                                <a href=""><?=get_comments_number()?> Comments</a>
                            </div>
                            <p><?= the_excerpt() ?></p>
                            <a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>					
            </div>

            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <?php get_template_part("templates/searchForm"); ?>
                <?php dynamic_sidebar('sidebar-1');?>

                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li>
                            <?php
                            $args = [
                                'title_li' => ''
                            ];
                            wp_list_categories($args);
                            ?>
                        </li>
                    </ul>
                </div>

                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <?php
                        $args = [
                            'number' => 9
                        ];
                        $tags = $tags_array = get_tags( $args );

                        if ($tags) :
                        ?>
                            <ul class="tag">
                                <?php
                                foreach ($tags as $tag) :

                                    echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li>';

                                endforeach;
                                ?>
                            </ul>
                        <?php
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
get_footer();
?>