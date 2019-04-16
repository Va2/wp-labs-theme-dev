<?php
// Nous utilisons le fonction define() de php pour nous facilité l'écriture et pouvoir utiliser une constante global
define('INCLUDE_DIR', get_template_directory() . "/includes");

require_once(INCLUDE_DIR . '/enqueue-scripts.php');
require_once(INCLUDE_DIR . '/customizer.php');

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