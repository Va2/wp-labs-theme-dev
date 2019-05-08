<!-- Team Section -->
<?php
$args1 = [
    'post_type' => 'team',
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'category_name' => 'other'
];
$query1 = new WP_Query($args1);

$args2 = [
  'post_type' => 'team',
  'posts_per_page' => 1,
  'category_name' => 'Dev'
];
$query2 = new WP_Query($args2);

?>

<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?=hookToSpan(get_theme_mod('team_titre'));?></h2>
      </div>
      <div class="row">
        <!-- 1 -->
        <?php 
          $i = 0;
        ?>
    <?php while ($query1->have_posts()): $query1->the_post();?>
      <!-- single member -->
      <?php
      $i++;
      $i == 1 ? 
        $post1 = [
          "title" => get_the_title(),
          "content" => get_the_content(),
          "url" => get_the_post_thumbnail_url()
        ]
        :
        $post2 = [
          "title" => get_the_title(),
          "content" => get_the_content(),
          "url" => get_the_post_thumbnail_url()
        ]
      ?>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <div class="col-sm-4">
        <div class="member">
          <img src="<?= $post1['url']; ?>" alt="">
          <h2><?= $post1['title']; ?></h2>
          <h3><?= $post1['content']; ?></h3>
        </div>
      </div>
    <!-- 2 -->
    <?php while ($query2->have_posts()): $query2->the_post();?>
      <!-- single member -->
      <div class="col-sm-4">
        <div class="member">
          <img src="<?php the_post_thumbnail_url();?>" alt="">
          <h2><?=the_title();?></h2>
          <h3><?=the_content();?></h3>
        </div>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <!-- 3 -->
    <div class="col-sm-4">
        <div class="member">
          <img src="<?= $post2['url']; ?>" alt="">
          <h2><?= $post2['title']; ?></h2>
          <h3><?= $post2['content']; ?></h3>
        </div>
      </div>

      </div>
    </div>
  </div>
  <!-- Team Section end-->
