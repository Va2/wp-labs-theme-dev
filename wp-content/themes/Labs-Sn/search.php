<?php

get_header();

get_template_part("templates/headerServices");
?>

<div class="container">
    <div class="blog-posts">
        <?php while (have_posts()): the_post();?>
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
												$allTags = get_the_tags();
												foreach($allTags as $tag){
													echo $tag->name . ' ,';
												}
                                    		?>	
		                                    </a>
		                                    <a href=""><?=get_comments_number()?> Comments</a>
										</div>
										<p><?=the_excerpt();?></p>
										<a href="<?=the_permalink(get_the_ID())?>" class="read-more">Read More</a>
									</div>
			                    </div>
            <?php endwhile;?>
            </div>
</div>


<?php
get_template_part("templates/newsletter");
get_footer();
