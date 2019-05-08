<!-- About section -->
<?php
$args = [
    'post_type' => 'service',
    'posts_per_page' => 3,
    'orderby' => 'rand',
];
$query = new WP_Query($args);
?>

<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
      <div class="container">
        <div class="row">

        <?php while ($query->have_posts()): $query->the_post();?>
													      <?php
    $icone = get_post_meta(get_the_ID(), "service_icone_choic", true);
    ?>
						          <div class="col-md-4 col-sm-12">
						            <div class="lab-card">
						              <div class="icon">
						                <i class="<?=$icone?>"></i>
						              </div>
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
    </div>
    <!-- card section end-->

    <!-- About contant -->
    <div class="about-contant">
      <div class="container">
        <div class="section-title">
          <!--  -->
          <h2><?=hookToSpan(get_theme_mod('about_id_text'));?></h2>
          <!--  -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <p><?=get_theme_mod('about_id_paragraphe_gauch');?></p>
          </div>
          <div class="col-md-6">
            <p><?=get_theme_mod('about_id_paragraphe_droit');?></p>
          </div>
        </div>
        <div class="text-center mt60">
          <a href="/?page_id=<?= get_page_by_title('blog')->ID ?>" class="site-btn">Blogs</a>
        </div>
        <!-- popup video -->
        <div class="intro-video">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <img src="<?=get_theme_mod('image_video');?>" alt="">
              <a href="<?=get_theme_mod('about_id_lien_video');?>" class="video-popup">
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About section end -->
