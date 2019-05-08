<?php
namespace App\Features\MetaBoxes;

use App\Features\PostTypes\TestimonialPostType;

class TestimonialMetabox
{
    public static $slug = 'testimonial_details_metabox';
    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     * https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
     *
     * @return void
     */
    public static function add_meta_box()
    {
        $screen = [TestimonialPostType::$slug];
        add_meta_box(
            self::$slug, // Unique ID
            __("Choix du Metier"), // Box title
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
        //echo "HELOOOO";
        view('/metaboxes/testimonial_detail');
    }

    public static function save($post_id)
    {
        if (count($_POST) != 0) {
            // On stock dans une variable la valeur de l'input dont le name est 'rat_time_preparation'
            $metier_testi = sanitize_text_field($_POST['metier']);
            // https://developer.wordpress.org/reference/functions/update_post_meta/
            update_post_meta($post_id, 'metier', $metier_testi);
        }
    }
}
