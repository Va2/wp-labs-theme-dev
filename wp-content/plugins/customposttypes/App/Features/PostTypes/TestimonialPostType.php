<?php
namespace App\Features\PostTypes;
// add_theme_support('post-thumbnails'); // Check placement

class TestimonialPostType
{
    // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
    public static $slug = 'testimonial';

    public static function register_testimonial() {
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Testimonials'),
                    'singular_name' => 'Testimonial',	          
                    'add_new' => __('Ajouter testimonial'),
                    'add_new_item' => __('Ajouter un testimonial'),
                    'edit_item' => __('Modifier le testimonial'),
                    'new_item' => __('Nouveau testimonial'),
                    'view_item' => __('Voir le testimonial'),
                    'view_items' => __('Voir les testimonials'),
                    'search_items' => __('Rechercher des testimonials'),
                    'not_found' => __('Pas de testimonial(s) trouvé(s).'),
                    'not_found_in_trash' =>('Pas de testimonial(s) dans la corbeille.'),
                    'all_items' => __('Tous les testimonials'),
                    'archives' => __('Testimonial(s) archivé(s)'),        
                    'filter_items_list' => __('Filtre de testimonial'),
                    'items_list_navigation' => __('Navigation de testimonial'),
                    'items_list' =>__('Liste testimonial'),
                    'item_published' => __('Testimonial publié.'),
                    'item_published_privately' =>__('Testimonial publié en privé.'),
                    'item_reverted_to_draft' =>__('Le testimonial est retourné au brouillon.'),
                    'item_scheduled' => __('Testimonial planifié.'),
                    'item_updated' =>__('Testimonial mis à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'testimonial'
                ],
                'menu_icon' => 'dashicons-format-quote',
                'supports' =>  [
                    'title',
                    'editor',
                    // 'thumbnail'
                ],
            ],
            add_filter('enter_title_here', function ($title) {
                $screen = get_current_screen();

                if ('testimonial' == $screen->post_type) {
                    $title = 'Entrer le prénom & nom du client';
                }
                return $title;
            })
        );
    }
}