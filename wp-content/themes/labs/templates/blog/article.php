<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
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
                            <a href=""><?php the_post(); echo get_the_author(); rewind_posts(); ?></a>
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
                        <?= get_post_field('post_content', $post->ID) ?>
                    </div>

                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/avatar/03.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <h2><?php the_post(); echo get_the_author(); rewind_posts(); ?>, <span>Author</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2><?php comments_number(); ?></h2>
                        <ul class="comment-list">
                            <?php
                            $comments = get_comments();
                            foreach($comments as $comment) :
                            ?>
                                <li>
                                    <!-- <div class="avatar">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/avatar/01.jpg" alt="">
                                    </div> -->
                                    <div class="commetn-text">
                                        <h3><?= $comment->comment_author ?> | <?php comment_date('d M, Y') ?> | Reply</h3>
                                        <p><?= $comment->comment_content ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Commert Form -->
                    <?php
                    if (comments_open()) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>


            <?php get_template_part('templates/blog/sidebar'); ?>