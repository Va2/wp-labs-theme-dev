<?php

class EnqueueScript
{

    /**
     * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
     * Nous avons ajouter le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
     *
     * @return void
     */
    public static function ajout_css_js()
    {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('font-montserrat', "https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
        wp_enqueue_style('carouselLb', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_enqueue_style('mainStyle', get_template_directory_uri() . '/css/style.css');

        // Ajout des scripts js
        wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], null, true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-perso'], null, true);
        wp_enqueue_script('owl-carousel-bootstrap', get_template_directory_uri() . '/js/owl.carousel.min.js', ['bootstrap'], null, true);
        wp_enqueue_script('progress-me', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-perso'], null, true);
        wp_enqueue_script('mainJs', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], null, true);
    }
}

add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);
