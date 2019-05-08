<?php
namespace App\Features\PostTypes;

class TeamPostType
{
    public static $slug = 'team';
    
    public static function register()
    {
        add_theme_support( 'post-thumbnails' );
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Teams'),
                    'singular_name' => 'Team',
                    'singular_name' => __('Team'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un employe'),
                    'edit_item' => __('Modifier un employe'),
                    'new_item' => __('Nouveau employe'),
                    'view_item' => __('Voir le employe'),
                    'view_items' => __('Voir les employe'),
                    'search_items' => __('Rechercher des employe'),
                    'not_found' => __('Pas de employe trouvées.'),
                    'not_found_in_trash' => ('Pas de employe dans la corbeille.'),
                    'all_items' => __('Toutes les employe'),
                    'archives' => __('Employe archivées'),
                    'filter_items_list' => __('Filtre de employe'),
                    'items_list_navigation' => __('Navigation de employe'),
                    'items_list' => __('Liste employe'),
                    'item_published' => __('Employe publiée.'),
                    'item_published_privately' => __('employe publiée en privé.'),
                    'item_reverted_to_draft' => __('Le employe est retournée au brouillon.'),
                    'item_scheduled' => __('Employe planifiée.'),
                    'item_updated' => __('Employe mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'team',
                ],
                'capabilities' => [
                    'edit_post' => 'edit_team',
                    'edit_posts' => 'edit_teams',
                    'edit_others_posts' => 'edit_other_teams',
                    'publish_posts' => 'publish_teams',
                    'read_post' => 'read_team',
                    'read_private_posts' => 'read_private_teams',
                    'delete_post' => 'delete_team',
                ],
                'taxonomies' => ['category'],
                'menu_icon' => 'dashicons-groups',
                'supports' => ['title', 'editor', 'thumbnail'],
            ]
        );
    }
}
