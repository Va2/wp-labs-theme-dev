<?php
/**
 * Fonction qui va ajouter des scripts (CSS) dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head()
 *
 * @return void
 */
function add_css_js_scripts()
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
add_action('wp_enqueue_scripts', 'add_css_js_scripts'); // https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/

/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
    register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu');

/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @param [type] $wp_customize
 * @return void
 */
function add_text_customizer($wp_customize)
{
    // Ajout d'un panel avec des options
    // Attention, un panel ne s'affichera que s'il contient des sections
    //https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
    $wp_customize->add_panel('text-panel', [
        'title' => __('Titres & textes'),
        'Description' => __('Changer les titres & textes du site.')
    ]);
    // Ajout d'une section à un panel définie, si pas de panel défini, alors la section sera visible directement
    // Attention il faut que la panel ait déjà été ajouter pour que la section puisse s'y greffer.
    // Attention une section ne s'affichera que si elle contient des controls.
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section('labs-about-section-text', [
        'panel' => 'text-panel',
        'title' => __('Page d\'accueil (HOME)'),
        'description' => __('Changer les titres & textes de la page d\'accueil.')
    ]);
    
    // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting('about-title-card-left', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('about-text-card-left', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
    // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
    // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting('about-title-card-center', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('about-text-card-center', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('about-title-card-right', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('about-text-card-right', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
    // Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
    // Attention un control ne s'affiche que s'il est lié à un setting.
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control('about-title-card-left-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-title-card-left',
        'label' => __('Section ABOUT - titre gauche'),
        'description' => __('Personnalisez le titre de la \'card\' gauche.'),
        'type' => 'text'
    ]);
    $wp_customize->add_control('about-text-card-left-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-text-card-left',
        'label' => __('Section ABOUT - text gauche'),
        'description' => __('Personnalisez le texte de la \'card\' gauche.'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('about-title-card-center-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-title-card-center',
        'label' => __('Section ABOUT - titre centre'),
        'description' => __('Personnalisez le titre de la \'card\' centrale.'),
        'type' => 'text'
    ]);
    $wp_customize->add_control('about-text-card-center-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-text-card-center',
        'label' => __('Section ABOUT - text centre'),
        'description' => __('Personnalisez le text de la \'card\' centrale.'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('about-title-card-right-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-title-card-right',
        'label' => __('Section ABOUT - titre droite'),
        'description' => __('Personnalisez le titre de la \'card\' droite.'),
        'type' => 'text'
    ]);
    $wp_customize->add_control('about-text-card-right-control', [
        'section' => 'labs-about-section-text',
        'settings' => 'about-text-card-right',
        'label' => __('Section ABOUT - text droite'),
        'description' => __('Personnalisez le text de la \'card\' droite.'),
        'type' => 'textarea'
    ]);
}
add_action('customize_register', 'add_text_customizer');