<?php
namespace App\Features\PostTypes;

class ProductPostType
{
    // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
    public static $slug = 'product';

    public static function register_product() {
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Produits'),
                    'singular_name' => 'Produit',	          
                    'add_new' => __('Ajouter produit'),
                    'add_new_item' => __('Ajouter un produit'),
                    'edit_item' => __('Modifier le produit'),
                    'new_item' => __('Nouveau produit'),
                    'view_item' => __('Voir le produit'),
                    'view_items' => __('Voir les produits'),
                    'search_items' => __('Rechercher des produits'),
                    'not_found' => __('Pas de produit(s) trouvé(s).'),
                    'not_found_in_trash' =>('Pas de produit(s) dans la corbeille.'),
                    'all_items' => __('Tous les produits'),
                    'archives' => __('Produit(s) archivé(s)'),        
                    'filter_items_list' => __('Filtre de produit'),
                    'items_list_navigation' => __('Navigation de produit'),
                    'items_list' =>__('Liste produit'),
                    'item_published' => __('Produit publié.'),
                    'item_published_privately' =>__('Produit publié en privé.'),
                    'item_reverted_to_draft' =>__('Le produit est retourné au brouillon.'),
                    'item_scheduled' => __('Produit planifié.'),
                    'item_updated' =>__('Produit mis à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'produit'
                ],
                'menu_icon' => 'dashicons-welcome-add-page',
                'supports' =>  [
                    'title',
                    'editor'
                ],
            ]
        );
    }
}