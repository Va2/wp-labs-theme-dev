            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <?php// get_search_form(); ?>
                    <?php get_template_part('templates/blog/searchform'); ?>
                    <!-- <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form> -->
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