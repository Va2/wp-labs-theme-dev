<?php
$args = [
    'post_type' => 'project',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 3,
];
$query = new WP_Query($args);
?>
<!-- services card section-->
<div class="services-card-section spad" id="featuresCard">
    <div class="container">
      <div class="row">

      <?php while ($query->have_posts()): $query->the_post();?>
		        <!-- Single Card -->
		        <div class="col-md-4 col-sm-6">
		          <div class="sv-card">
		            <div class="card-img">
		              <img src="<?php the_post_thumbnail_url();?>" alt="">
		            </div>
		            <div class="card-text">
		              <h2><?=the_title();?></h2>
		              <p><?=the_content();?></p>
		            </div>
		          </div>
		        </div>
			  <?php endwhile;?>
      </div>
    </div>
  </div>
  <!-- services card section end-->
