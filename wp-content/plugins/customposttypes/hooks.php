<?php
// SERVICE
use App\Features\PostTypes\ServicePostType;
use App\Features\MetaBoxes\ServiceIconsMetabox;

// TESTIMONIAL
use App\Features\PostTypes\TestimonialPostType;
use App\Features\MetaBoxes\TestimonialDetailsMetabox;

// TEAM
use App\Features\PostTypes\TeamPostType;
use App\Features\MetaBoxes\TeamDetailsMetabox;

// PRODUCTS
use App\Features\PostTypes\ProductPostType;
use App\Features\MetaBoxes\ProductIconsMetabox;

// SEND MAIL
use App\Features\Pages\SendMail;


// SERVICE
add_action('init',[ServicePostType::class, 'register_service']);
add_action('add_meta_boxes_service', [ServiceIconsMetabox::class, 'add_meta_box']);
// On finit par lancer la function save quand le hook save_post_$slug est appelé.
// https://developer.wordpress.org/reference/hooks/save_post_post-post_type/
add_action('save_post_' . ServicePostType::$slug, [ServiceIconsMetabox::class, 'save']);

// TESTIMONIAL
add_action('init',[TestimonialPostType::class, 'register_testimonial']);
add_action('add_meta_boxes_testimonial', [TestimonialDetailsMetabox::class, 'add_meta_box']);
add_action('save_post_' . TestimonialPostType::$slug, [TestimonialDetailsMetabox::class, 'save']);

// TEAM
add_action('init',[TeamPostType::class, 'register_team']);
add_action('add_meta_boxes_team', [TeamDetailsMetabox::class, 'add_meta_box']);
add_action('save_post_' . TeamPostType::$slug, [TeamDetailsMetabox::class, 'save']);

// PRODUCT
add_action('init',[ProductPostType::class, 'register_product']);
add_action('add_meta_boxes_product', [ProductIconsMetabox::class, 'add_meta_box']);
add_action('save_post_' . ProductPostType::$slug, [ProductIconsMetabox::class, 'save']);

// SEND MAIL
add_action('admin_action_send-mail', [SendMail::class, 'send_mail']);