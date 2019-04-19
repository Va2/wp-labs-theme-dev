<?php
/*
Template Name: Services page
Template Post Type: post, page
*/

// Page code here...

get_header();

get_template_part('templates/services/header');
get_template_part('templates/services/services');
get_template_part('templates/services/features');
get_template_part('templates/services/cards');

get_template_part('templates/newsletter');
get_template_part('templates/contact');

// get_template_part('templates/about');
// get_template_part('templates/testimonials');
// get_template_part('templates/services');
// get_template_part('templates/team');
// get_template_part('templates/promotion');
// get_template_part('templates/contact');

get_footer();