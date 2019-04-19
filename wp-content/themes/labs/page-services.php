<?php
/*
Template Name: Services page
Template Post Type: post, page
*/

// Page code here...

get_header();

get_template_part('templates/services/header');
get_template_part('templates/services/services');
get_template_part('templates/services/products');
get_template_part('templates/services/cards');

get_template_part('templates/newsletter');
get_template_part('templates/contact');

get_footer();