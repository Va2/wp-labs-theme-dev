<?php
namespace App\Features\PostTypes;

class ProjectPostType
{
    public static $slug = 'project';

    public static function register()
    {
        add_theme_support('post-thumbnails');
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Projets'),
                    'singular_name' => 'Projet',
                    'singular_name' => __('Projet'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un Projet'),
                    'edit_item' => __('Modifier un Projet'),
                    'new_item' => __('Nouveau Projet'),
                    'view_item' => __('Voir le Projet'),
                    'view_items' => __('Voir les Projet'),
                    'search_items' => __('Rechercher des Projet'),
                    'not_found' => __('Pas de Projet trouvées.'),
                    'not_found_in_trash' => ('Pas de Projet dans la corbeille.'),
                    'all_items' => __('Toutes les Projet'),
                    'archives' => __('Projet archivées'),
                    'filter_items_list' => __('Filtre de Projet'),
                    'items_list_navigation' => __('Navigation de Projet'),
                    'items_list' => __('Liste Projet'),
                    'item_published' => __('Projet publiée.'),
                    'item_published_privately' => __('Projet publiée en privé.'),
                    'item_reverted_to_draft' => __('Le Projet est retournée au brouillon.'),
                    'item_scheduled' => __('Projet planifiée.'),
                    'item_updated' => __('Projet mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'project',
                ],
                'capabilities' => array(
                    'edit_post' => 'edit_project',
                    'edit_posts' => 'edit_projects',
                    'edit_others_posts' => 'edit_other_projects',
                    'publish_posts' => 'publish_projects',
                    'read_post' => 'read_project',
                    'read_private_posts' => 'read_private_projects',
                    'delete_post' => 'delete_project',
                ),
                'menu_icon' => 'dashicons-clipboard',
                'supports' => ['title', 'editor', 'thumbnail'],
            ]
        );
    }
}
