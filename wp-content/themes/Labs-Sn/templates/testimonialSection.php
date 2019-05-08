<?php
$args = [
    'post_type' => 'testimonial',
    'posts_per_page' => 6,
];
$query = new WP_Query($args);
?>

<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2><?=get_theme_mod('testimonial_titre');?></h2>
          </div>
          <div class="owl-carousel" id="testimonial-slide">
          <?php while ($query->have_posts()): $query->the_post();?>
										      <?php
    $icone = get_post_meta(get_the_ID(), "service_icone_choic", true);

    ?>
													      <!-- single testimonial -->
	            <div class="testimonial">
	              <span>‘​‌‘​‌</span>
	              <p><?=the_content();?></p>
	              <div class="client-info">
	                <div class="avatar">
	                  <img src="<?php the_post_thumbnail_url();?>" alt="">
	                </div>
	                <div class="client-name">
	                  <h2><?=the_title();?></h2>
	                  <p><?=get_post_meta(get_the_ID(), "metier", true)?></p>
	                </div>
	              </div>
	            </div>
													<?php
endwhile;
wp_reset_postdata();
?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial section end-->
