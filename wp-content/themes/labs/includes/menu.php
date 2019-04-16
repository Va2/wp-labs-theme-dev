<?php
class LabsMenu
{
    /**
     * Fonction qui ajoute un menu au thème.
     *
     * @return void
     */
    public static function register_main_menu()
    {
        register_nav_menu('main-menu', 'Menu principal dans le header.');
    }
}
add_action('after_setup_theme', [LabsMenu::class, 'register_main_menu']);

// ACTIVE MENU CLASS
add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);
function active_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}