<?php
namespace App\Features\PostTypes;

class TestimonialPostType
{
    public static $slug = 'testimonial';

    public static function register()
    {
        add_theme_support('post-thumbnails');

        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Testimonials'),
                    'singular_name' => 'Testimonial',
                    'singular_name' => __('Testimonial'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un Testimonial'),
                    'edit_item' => __('Modifier un Testimonial'),
                    'new_item' => __('Nouveau Testimonial'),
                    'view_item' => __('Voir le Testimonial'),
                    'view_items' => __('Voir les Testimonial'),
                    'search_items' => __('Rechercher des Testimonial'),
                    'not_found' => __('Pas de Testimonial trouvées.'),
                    'not_found_in_trash' => ('Pas de Testimonial dans la corbeille.'),
                    'all_items' => __('Toutes les Testimonial'),
                    'archives' => __('Testimonial archivées'),
                    'filter_items_list' => __('Filtre de Testimonial'),
                    'items_list_navigation' => __('Navigation de Testimonial'),
                    'items_list' => __('Liste Testimonial'),
                    'item_published' => __('Testimonial publiée.'),
                    'item_published_privately' => __('Testimonial publiée en privé.'),
                    'item_reverted_to_draft' => __('Le Testimonial est retournée au brouillon.'),
                    'item_scheduled' => __('Testimonial planifiée.'),
                    'item_updated' => __('Testimonial mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'testimonial',
                ],
                'capabilities' => [
                    'edit_post' => 'edit_testimonial',
                    'edit_posts' => 'edit_testimonials',
                    'edit_others_posts' => 'edit_other_testimonials',
                    'publish_posts' => 'publish_testimonials',
                    'read_post' => 'read_testimonial',
                    'read_private_posts' => 'read_private_testimonials',
                    'delete_post' => 'delete_testimonial',
                ],
                'menu_icon' => 'dashicons-money',
                'supports' => ['title', 'editor', 'thumbnail'],
            ],

            add_filter('enter_title_here', function ($title) {
                $screen = get_current_screen();

                if ('testimonial' == $screen->post_type) {
                    $title = 'Entrer votre nom et prenom';
                }
                return $title;
            })
        );
    }
}
