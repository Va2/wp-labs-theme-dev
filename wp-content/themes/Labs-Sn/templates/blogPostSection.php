<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
                <?php while (have_posts()): the_post(); ?>
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="<?= the_post_thumbnail_url() ?>" alt="">
							<div class="post-date">
                                <h2><?= get_the_date("j"); ?></h2>
                                <h3><?= get_the_date("F Y"); ?></h3>
							</div>
						</div>
						<div class="post-content">
                            <h2 class="post-title"><?=the_title();?></h2>
							<div class="post-meta">
                                    <a href=""><?= the_author() ?></a>
							        <a href="">
                                    <?php
                                        $allTags = get_the_tags();
                                        foreach($allTags as $tag){
                                            echo $tag->name . ' ,';
                                        }
                                    ?>	
                                    </a>
                                    <a href=""><?= get_comments_number() ?> Comments</a>
							</div>
							<p><?= the_content() ?></p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="<?php echo get_template_directory_uri(); ?>/img/avatar/03.jpg" alt="">
							</div>
							<div class="author-info">
								<h2><?= the_author() ?></h2>
							</div>
						</div>
                        <!-- Post Comments -->
                        <?php endwhile; ?>
                        <?php 
                            $postId = 'post_id=' . get_the_ID();
                            $comments = get_comments($postId); 
                        ?>
                        <div class="comments">
                            <h2>Comments (<?= get_comments_number() ?>)</h2>
                            <ul class="comment-list">
                                <?php foreach($comments as $com) :?>
                                <li>
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3><?= $com->comment_author ?> | <?= $com->comment_date ?> | Reply</h3>
                                        <p><?= $com->comment_content ?></p>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <?php
                            if (comments_open() || get_comments_number()) :
                                comments_template('/templates/comments.php');
                            endif;
                        ?>
					</div>
                </div>
                

                <!-- SLIDE -->

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<?php get_template_part("templates/searchForm"); ?>
					<?php dynamic_sidebar('sidebar-1');?>
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
						<?php 
						$allTags = get_tags();
						foreach ($allTags as $tag) { 	?>
							<li><a href=""><?= $tag->name ?></a></li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
