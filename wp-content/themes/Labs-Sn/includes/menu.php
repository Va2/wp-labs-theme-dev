
<?php
// Nous allons prendre l'habitude de préfixer nos class afin de ne pas créer de conflit avec wordpress on ne sait jamais que le nom soit déjà utiliser ailleurs.
class MgMenu
{
    /**
     * Fonction qui ajoute un menu au thème.
     *
     * @return void
     */
    public static function register_main_menu()
    {
        register_nav_menu('main-menu', 'Menu principal');
    }

    public static function special_nav_class($classes, $item)
    {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }
        return $classes;
    }
}

add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']);

add_filter('nav_menu_css_class', [MgMenu::class, 'special_nav_class'], 10, 2);
