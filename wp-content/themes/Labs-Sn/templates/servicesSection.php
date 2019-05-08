<!-- Services section -->
<?php
$args = [
    'post_type' => 'service',
    'posts_per_page' => 9,
    'orderby' => 'rand',
];
$query = new WP_Query($args);
?>

<div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
        <!--  -->
        <h2><?=hookToSpan(get_theme_mod('services_titre'));?></h2>
        <!--  -->
      </div>
      <div class="row">
      <?php while ($query->have_posts()): $query->the_post();?>
							      <?php
    $icone = get_post_meta(get_the_ID(), "service_icone_choic", true);
    ?>
										      <div class="col-md-4 col-sm-6">
												    <div class="service">
												      <div class="icon">
												        <i class="<?=$icone?>"></i>
												      </div>
												      <div class="service-text">
												        <h2><?=the_title();?></h2>
												        <p><?=the_content();?></p>
												      </div>
												    </div>
												  </div>
										<?php
endwhile;
wp_reset_postdata();
?>
      </div>
      <div class="text-center">
        <a href="/?page_id=<?= get_page_by_title('services')->ID ?>" class="site-btn">Services</a>
      </div>
    </div>
  </div>
  <!-- services section end -->
