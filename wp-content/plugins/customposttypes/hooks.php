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
use App\Http\Controllers\MailController;
// SEND NEWSLETTER
use App\Features\Pages\SendNewsletter;


// APP SETUP
use App\Setup;


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
add_action('admin_action_send-mail', [MailController::class, 'send_mail']);
// SEND NEWSLETTER
add_action('admin_action_send-newsletter', [MailController::class, 'send_newsletter']);

// APP SETUP
add_action('init', [Setup::class, 'start_session']);




// TEAM TAXONOMIES ($wp_taxonomies) : Test but conflict with ARTICLE POST TYPES
// add_action( 'init', 'taxonomies_team_post_tags');
// function taxonomies_team_post_tags()
// {
//     global $wp_taxonomies;

//     // The list of labels we can modify comes from
//     //  http://codex.wordpress.org/Function_Reference/register_taxonomy
//     //  http://core.trac.wordpress.org/browser/branches/3.0/wp-includes/taxonomy.php#L350
//     $wp_taxonomies['post_tag']->labels = (object)array(
//         'name' => 'TAG: "staff" ou "boss"',
//         'menu_name' => 'Fonction job Tags',
//         'singular_name' => 'Fonction job Tags',
//         'search_items' => 'Search Fonction job Tags',
//         'popular_items' => 'Popular Fonction job Tags',
//         'all_items' => 'All Fonction job Tags',
//         'parent_item' => null, // Tags aren't hierarchical
//         'parent_item_colon' => null,
//         'edit_item' => 'Edit Fonction job Tags',
//         'update_item' => 'Update Fonction job Tags',
//         'add_new_item' => 'Add new Fonction job Tags',
//         'new_item_name' => 'New Fonction job Tags Name',
//         'separate_items_with_commas' => 'Separata Fonction job Tags with commas',
//         'add_or_remove_items' => 'Add or remove Fonction job Tags',
//         'choose_from_most_used' => 'Choose from the most used Fonction job Tags',
//     );

//     $wp_taxonomies['post_tag']->label = '"staff" ou "boss"';
// }