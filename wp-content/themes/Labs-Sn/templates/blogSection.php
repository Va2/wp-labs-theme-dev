<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = [
    'post_type' => 'post',
	'posts_per_page' => 3,
	'paged'          => $paged
];
$query = new WP_Query($args);
?>
<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-sm-7 blog-posts">
                <?php while ($query->have_posts()): $query->the_post();?>
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
									        
											<!-- ici la boucle-->
											<?php
												$allTags = get_the_tags();
												foreach($allTags as $tag){?>
													<a href="<?php echo get_tag_link($tag); ?>"><?=  $tag->name; ?></a>
													
												<?php }?>	
		                                    <a href=""><?=get_comments_number()?> Comments</a>
										</div>
										<p><?=the_excerpt();?></p>
										<a href="<?=the_permalink(get_the_ID())?>" class="read-more">Read More</a>
									</div>
			                    </div>
					        <?php endwhile;?>
                    <!-- Pagination -->
					<div class="myRow"> 
						<div><?php previous_posts_link('<button type="button" class="btn bgColor btn-arrow-left">Prev</button>');?></div>
						<div><?php next_posts_link( ' <button type="button" class="btn bgColor btn-arrow-right">
						Next
						</button>', $query->max_num_pages );?>
						</div>
					</div>

                </div>

                <!-- SUITS -->

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
							<li><a href="<?= get_tag_link($tag); ?>"><?= $tag->name ?></a></li>
						<?php } ?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- page section end-->
