<?php
namespace App\Features\MetaBoxes;

use App\Features\PostTypes\TestimonialPostType;

class TestimonialDetailsMetabox
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
            self::$slug,                        // Unique ID
            __("Fonction dans l'entreprise"),   // Box title
            [self::class, 'render'],            // Content callback, must be of type callable
            $screen,                             // Post type
            'side'
        );
    }

    /**
     * Fonction pour rendre le code html dans la metabox
     *
     * @return void
     */
    public static function render()
    {
        // echo "<h3>Hello</h3>";

        // Récupération de toutes les metadata du post
        $data = get_post_meta(get_the_ID()); // https://developer.wordpress.org/reference/functions/get_post_meta/

        // Etant donné que $data est un tableau de données contenant toutes les metadatas possible on doit préciser qu'on veut celle dont l'index est 0. Nous avons qu'une seule metadata de stocké mais la récupération ce fait quand même via un tableau.
        $position = extract_data_attr('job_position', $data);
        
        // Ancienne façon : view('metaboxes/recipe-detail',['time_choisi' => $time]);
        // Nouvelle façon de passer les données, avec l'aide de la function compact().
        // La function compact() créer un tableau ou elle met en clef le nom de la variable qu'on lui passe, on lui passe cette variable d'une manière assez particulière car on lui retire le '$' et qu'en plus on la met entre guillemet. En lui passant de cette manière elle créer donc un tableau avec comme clef et valeur le même nom ce qui donne en soit : ['icon' => $icon] ca veux dire également qu'on doit aller changer dans recipe-detail.html.php le nom de la clef a la quelle on fait appel.
        
        // view('metaboxes/service-icons',['selected_icon' => $icon_class]);
        view('metaboxes/job-position', compact('position'));
    }

    /**
     * sauvegarde des données de la metabox
     *
     * @param [type] $post_id reçu par le do_action
     * @return void
     */
    // $post_id est rempli par l'id du post contenu dans l'url de la page
    public static function save($post_id)
    {
        // On verifie que $_POST ne soit pas vide pour effectuer l'action uniquement à la sauvegarde du postType
        // $_POST est une variable globale php qui contient les données qu'on envoi via un formulaire, notre page service n'est en soit qu'un formulaire avec des inputs et des textarea qu'on rempli et ce qu'on dit en soit c'est :
        // Si notre $_POST est différent de vide alors on execute les lignes suivantes
        if (count($_POST) != 0) {
            // Je créer un tableau dans le quel je stock les données récupérés par ma requête aux quelles j'assigne des clefs.
            $data = [
                // On utilise le helper post_data pour passer la clef et la super globale $_POST.
                // Clef             => // 'name' du champ pour récupérer la valeur
                'job_position'  => post_data('job_position', $_POST)
            ];

            // J'utilise le helper update_post_metas que j'ai créer dans le fichier helpers.php ligne 35. Je passe deux variables, $post_id qui contient l'id du post, et $data qui contient un tableau de données récupérées.
            update_post_metas($post_id, $data);
        }
    }
}