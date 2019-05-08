<?php
$args = [
    'post_type' => 'project',
    'posts_per_page' => 3,
    'orderby' => 'rand',
];
$query1 = new WP_Query($args);
$query2 = new WP_Query($args);
?>
<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?=hookToSpan(get_theme_mod('title_project'));?></h2>
      </div>
      <div class="row">
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
        <?php while ($query1->have_posts()): $query1->the_post();
    $icone = get_post_meta(get_the_ID(), "project_icone_choic", true);?>
								<div class="icon-box light left">
			            <div class="service-text">
			              <h2><?=the_title();?></h2>
			              <p><?=the_content();?></p>
			            </div>
			            <div class="icon">
			              <i class="<?=$icone?>"></i>
			            </div>
			          </div>
		      <?php
endwhile;
wp_reset_postdata();
?>
        </div>
        <!-- Devices -->
        <div class="col-md-4 col-sm-4 devices">
          <div class="text-center">
            <img src="<?=get_template_directory_uri();?>/img/device.png" alt="">
          </div>
        </div>
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
        <?php while ($query2->have_posts()): $query2->the_post();
    $icone = get_post_meta(get_the_ID(), "project_icone_choic", true);?>
								 <!-- feature item -->
		             <div class="icon-box light">
		            <div class="icon">
		              <i class="<?=$icone?>"></i>
		            </div>
		            <div class="service-text">
		              <h2><?=the_title();?></h2>
		              <p><?=the_content();?></p>
		            </div>
		          </div>
		      <?php
endwhile;
wp_reset_postdata();
?>
        </div>
      </div>
      <div class="text-center mt100">
        <a href="#featuresCard" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- features section end-->
