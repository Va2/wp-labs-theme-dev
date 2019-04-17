<?php
namespace App\Features\PostTypes;
add_theme_support( 'post-thumbnails' ); // Check placement

class ServicePostType
{
    // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
    public static $slug = 'service';

    public static function register_service() {
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Services'),
                    'singular_name' => 'Service',	          
                    'add_new' => __('Ajouter service'),
                    'add_new_item' => __('Ajouter un service'),
                    'edit_item' => __('Modifier le service'),
                    'new_item' => __('Nouveau service'),
                    'view_item' => __('Voir le service'),
                    'view_items' => __('Voir les services'),
                    'search_items' => __('Rechercher des services'),
                    'not_found' => __('Pas de service(s) trouvé(s).'),
                    'not_found_in_trash' =>('Pas de service(s) dans la corbeille.'),
                    'all_items' => __('Tous les services'),
                    'archives' => __('Service(s) archivé(s)'),        
                    'filter_items_list' => __('Filtre de service'),
                    'items_list_navigation' => __('Navigation de service'),
                    'items_list' =>__('Liste service'),
                    'item_published' => __('Service publié.'),
                    'item_published_privately' =>__('Service publié en privé.'),
                    'item_reverted_to_draft' =>__('Le service est retourné au brouillon.'),
                    'item_scheduled' => __('Service planifié.'),
                    'item_updated' =>__('Service mis à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'service'
                ],
                'menu_icon' => 'dashicons-admin-page',
                'supports' =>  [
                    'title',
                    'editor',
                    'thumbnail'
                ],
            ]
        );
    }
}