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
                            <?php the_category(' '); //  CSS PROBLEM ON PAGE ?> 
                            <a href=""><?php comments_number(); ?></a>
                        </div>
                        <?= get_post_field('post_content', $post->ID) ?>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <!-- <div class="avatar">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/avatar/03.jpg" alt="">
                        </div> -->
                        <div class="author-info">
                            <h2><?php the_post(); echo get_the_author(); rewind_posts(); ?>, <span>Author</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2><?php comments_number(); ?></h2>
                        <ul class="comment-list">
                            <li>
                                <!-- <div class="avatar">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/avatar/01.jpg" alt="">
                                </div> -->
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                            <li>
                                <!-- <div class="avatar">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/avatar/02.jpg" alt="">
                                </div> -->
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
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
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/1.jpg" alt=""></li>
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/2.jpg" alt=""></li>
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/3.jpg" alt=""></li>
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/4.jpg" alt=""></li>
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/5.jpg" alt=""></li>
                        <li><img src="<?= get_template_directory_uri() ?>/assets/img/instagram/6.jpg" alt=""></li>
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
                                    // $count++;

                                    echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li>';

                                    // if( $count > 9 ) break;
                                endforeach;
                                ?>
                            </ul>
                        <?php
                        endif;
                        ?>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="<?= get_template_directory_uri() ?>/assets/img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->