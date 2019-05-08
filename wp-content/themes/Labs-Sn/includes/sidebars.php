<?php
class MgWidgetRegister
{
    public static function register()
    {
        register_sidebar(array(
            'name' => __('Sidebars-Widget'),
            'id' => 'sidebar-1',
            'before_widget' => '<div class="widget-item mt-5">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
            'class' => 'list-group'
        ));
    }
}
add_action('widgets_init', [MgWidgetRegister::class, 'register']);
