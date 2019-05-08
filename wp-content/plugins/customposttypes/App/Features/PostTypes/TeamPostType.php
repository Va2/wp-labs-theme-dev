<?php
namespace App\Features\PostTypes;

add_theme_support('post-thumbnails'); // Check placement

class TeamPostType
{
    // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
    public static $slug = 'team';
     public static function register_team() {
        register_post_type(
            self::$slug,
            [
                'labels' => [
                    'name' => __('Employés'),
                    'singular_name' => __('Employé'),	          
                    'add_new' => __('Ajouter employé'),
                    'add_new_item' => __('Ajouter un employé'),
                    'edit_item' => __('Modifier le employé'),
                    'new_item' => __('Nouveau employé'),
                    'view_item' => __('Voir le employé'),
                    'view_items' => __('Voir les employés'),
                    'search_items' => __('Rechercher des employés'),
                    'not_found' => __('Pas de employé(s) trouvé(s).'),
                    'not_found_in_trash' =>('Pas de employé(s) dans la corbeille.'),
                    'all_items' => __('Tous les employés'),
                    'archives' => __('Employé(s) archivé(s)'),        
                    'filter_items_list' => __('Filtre de employé'),
                    'items_list_navigation' => __('Navigation de employé'),
                    'items_list' =>__('Liste employé'),
                    'item_published' => __('Employé publié.'),
                    'item_published_privately' =>__('Employé publié en privé.'),
                    'item_reverted_to_draft' =>__('Le employé est retourné au brouillon.'),
                    'item_scheduled' => __('Employé planifié.'),
                    'item_updated' =>__('Employé mis à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'team'
                ],
                'capabilities' => array(
                    'edit_post'          => 'edit_team', 
                    'read_post'          => 'read_team', 
                    'delete_post'        => 'delete_team', 
                    'edit_posts'         => 'edit_teams', 
                    'edit_others_posts'  => 'edit_others_teams', 
                    'publish_posts'      => 'publish_teams',       
                    'read_private_posts' => 'read_private_teams', 
                    'create_posts'       => 'edit_teams'
                ),
                // On active la possibilité d'assigner une catégorie à notre Recette grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
                // https://developer.wordpress.org/resource/dashicons/#admin-tools
                'taxonomies' => ['post_tag'],
                'menu_icon' => 'dashicons-admin-users',
                'supports' =>  [
                    'title',
                    // 'editor',
                    'thumbnail'
                ]
            ],
            add_filter('enter_title_here', function ($title) {
                $screen = get_current_screen();
                 if ('team' == $screen->post_type) {
                    $title = "Entrer le prénom & nom de l'employé";
                }
                return $title;
            })
        );
    }
}