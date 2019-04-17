<?php
use App\Features\PostTypes\ServicePostType;
use App\Features\MetaBoxes\ServiceIconsMetabox;

add_action('init',[ServicePostType::class, 'register_service']);
add_action('add_meta_boxes_service', [ServiceIconsMetabox::class, 'add_meta_box']);
// On finit par lancer la function save quand le hook save_post_$slug est appelé.
// https://developer.wordpress.org/reference/hooks/save_post_post-post_type/
add_action('save_post_' . ServicePostType::$slug, [ServiceIconsMetabox::class, 'save']);