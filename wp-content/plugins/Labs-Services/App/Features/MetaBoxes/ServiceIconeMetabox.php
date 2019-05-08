<?php
namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ServicePostType;

class ServiceIconeMetabox
{
    public static $slug = 'service_details_metabox';
    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     * https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
     *
     * @return void
     */
    public static function add_meta_box()
    {
        $screen = [ServicePostType::$slug];
        add_meta_box(
            self::$slug, // Unique ID
            __("Choix de l'icone"), // Box title
            [self::class, 'render'], // Content callback, must be of type callable
            $screen // Post type
        );
    }
    /**
     * Fonction pour rendre le code html dans la metabox
     *
     * @return void
     */
    public static function render()
    {
        view('/metaboxes/service_detail');
    }

    public static function save($post_id)
    {
        if (count($_POST) != 0) {
            // On stock dans une variable la valeur de l'input dont le name est 'rat_time_preparation'
            $icone_serv = sanitize_text_field($_POST['service_icone_choic']);
            // https://developer.wordpress.org/reference/functions/update_post_meta/
            update_post_meta($post_id, 'service_icone_choic', $icone_serv);
        }
    }
}
