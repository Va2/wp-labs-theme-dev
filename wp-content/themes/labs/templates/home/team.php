<?php
$team_title = get_theme_mod('home-team', __('Titre Team [the LABS]'));
$team_title = str_replace("[", "<span>", $team_title);
$team_title = str_replace("]", "</span>", $team_title);

$args1 = [
    'post_type' => 'team',
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'tag' => 'staff'
];
$query1 = new WP_Query($args1);

$args2 = [
    'post_type' => 'team',
    'posts_per_page' => 1,
    'tag' => 'boss'
];
$query2 = new WP_Query($args2);
?>

<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2><?= $team_title ?></h2>
        </div>
        <div class="row">
            <?php
            $i = 0;

            while ($query1->have_posts()): $query1->the_post();

            // Single Member
            $i++;
            $i == 1 ? 
                $post1 = [
                    "title" => get_the_title(),
                    "content" => get_post_meta(get_the_ID(), 'job_position', true),
                    "url" => get_the_post_thumbnail_url()
                ]
            :
                $post2 = [
                    "title" => get_the_title(),
                    "content" => get_post_meta(get_the_ID(), 'job_position', true),
                    "url" => get_the_post_thumbnail_url()
                ];

            endwhile;
            wp_reset_postdata();
            ?>

            <!-- first random Staff member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="<?= $post1['url']; ?>" alt="">
                    <h2><?= $post1['title']; ?></h2>
                    <h3><?= $post1['content']; ?></h3>
                </div>
            </div>

            <!-- second fixed Boss member -->
            <?php while ($query2->have_posts()): $query2->the_post();?>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                    <h2><?= get_the_title(); ?></h2>
                    <h3><?= get_post_meta(get_the_ID(), 'job_position', true) ?></h3>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

            <!-- third random Staff member -->
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