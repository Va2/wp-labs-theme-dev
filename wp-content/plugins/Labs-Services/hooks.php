<?php

use App\Database\Database;
use App\Features\MetaBoxes\ProjectMetabox;
use App\Features\MetaBoxes\ServiceIconeMetabox;
use App\Features\MetaBoxes\TestimonialMetabox;
use App\Features\Pages\Page;
use App\Features\PostTypes\ProjectPostType;
use App\Features\PostTypes\ServicePostType;
use App\Features\PostTypes\TeamPostType;
use App\Features\PostTypes\TestimonialPostType;
use App\Features\Roles\Role;
use App\Http\Controllers\MailController;
use App\Setup;

add_action('init', [ServicePostType::class, 'register']);
add_action('init', [TeamPostType::class, 'register']);
add_action('init', [TestimonialPostType::class, 'register']);
add_action('init', [ProjectPostType::class, 'register']);

add_action('admin_menu', [Page::class, 'init']);
add_action('init', [Setup::class, 'start_session']);

add_action('add_meta_boxes_service', [ServiceIconeMetabox::class, 'add_meta_box']);
add_action('add_meta_boxes_project', [ProjectMetabox::class, 'add_meta_box']);
add_action('add_meta_boxes_testimonial', [TestimonialMetabox::class, 'add_meta_box']);

add_action('admin_post_send-mail', [MailController::class, 'send']);
add_action('admin_post_nopriv_send-mail', [MailController::class, 'send']);



add_action('admin_post_save-newsletter', [MailController::class, 'saveNewsletter']);
add_action('admin_post_nopriv_save-newsletter', [MailController::class, 'saveNewsletter']);

add_action('admin_action_delete-news', [MailController::class, 'delete']);

add_action('save_post_' . ServicePostType::$slug, [ServiceIconeMetabox::class, 'save']);
add_action('save_post_' . ProjectPostType::$slug, [ProjectMetabox::class, 'save']);

add_action('admin_enqueue_scripts', [Setup::class, 'enqueue_scripts']);

register_activation_hook(__DIR__ . '/LabServices.php', [Database::class, 'init']);
register_activation_hook(__DIR__ . '/LabServices.php', [Role::class, 'init']);
