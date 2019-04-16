<?php
class EnqueueScripts
{
    /**
     * Fonction qui va ajouter des scripts (CSS & JS) dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() & wp_footer()
     *
     * @return void
     */
    public static function add_css_js_scripts()
    {
        // Ajout des scripts css
        // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
    
    
        // Ajout des scripts js
        // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
        wp_enqueue_script('jquery-labs', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery-labs'], null, true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', ['jquery-labs'], null, true);
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['bootstrap'], null, true);
        wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.min.js', ['jquery-labs'], null, true);
        wp_enqueue_script('labs-theme', get_template_directory_uri() . '/assets/js/main.js', ['jquery-labs'], null, true);
    }
}

// $enqueue_scripts = new EnqueueScripts();

add_action('wp_enqueue_scripts', [EnqueueScripts::class, 'add_css_js_scripts']); // https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/