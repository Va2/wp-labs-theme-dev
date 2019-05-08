<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = [
    'post_type' => 'service',
    'posts_per_page' => 6,
    'paged'          => $paged
];
$query = new WP_Query($args);
?>
<!-- Services section -->
<div>

<div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
        <!--  -->
        <h2><?=hookToSpan(get_theme_mod('services_titre'));?></h2>
        <!--  -->
      </div>
      <div class="row">
      <?php while ($query->have_posts()): $query->the_post();								      
        $icone = get_post_meta(get_the_ID(), "service_icone_choic", true);?>
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
?>
      </div>

      <div class="myRow"> 
        <div><?php previous_posts_link('<button type="button" class="btn bgColor btn-arrow-left">Prev</button>');?></div>
        <div><?php next_posts_link( ' <button type="button" class="btn bgColor btn-arrow-right">
          Next
        </button>', $query->max_num_pages );?>
        </div>
      </div>

        <?php
          wp_reset_postdata();
        ?>

    </div>
</div>
  <!-- services section end -->
