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

use App\Features\Pages\Page;
// SEND MAIL
use App\Http\Controllers\MailController;
// SEND NEWSLETTER
use App\Features\Pages\SendNewsletter;

// APP SETUP
use App\Setup;
use App\Capabilities;

// DATABASE
use App\Database\Database;


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

add_action('admin_menu',[Page::class,'init']); 
// SEND MAIL
add_action('admin_post_send-mail', [MailController::class, 'send_mail']);
add_action('admin_post_nopriv_send-mail', [MailController::class, 'send_mail']);

// SEND NEWSLETTER
add_action('admin_post_send-newsletter', [MailController::class, 'send_newsletter']);
add_action('admin_post_nopriv_send-newsletter', [MailController::class, 'send_newsletter']);

// APP SETUP
add_action('init', [Setup::class, 'start_session']);

// DATABASE
// On ajoute la méthode qui va s'executer lors de l'activation du plugin
// Cette fonction ne s'active que lors de l'activation du plugin https://developer.wordpress.org/reference/functions/register_activation_hook/
register_activation_hook(__DIR__ . '/customposttypes.php', [Database::class, 'init']);

// CAPABILITIES
register_activation_hook(__DIR__ . '/customposttypes.php', [Capabilities::class, 'labs_admin_capability']);

add_action('admin_enqueue_scripts', [Setup::class, 'enqueue_scripts']);

// Hook personnalisé, c'est la combinaison du hook 'admin_action_' de wordpress avec mail-delete qui est l'action qu'on envoi dans l'url ligne 27 du fichier show-mail-html.php 
add_action('admin_action_newsletter-delete', [MailController::class, 'delete']);