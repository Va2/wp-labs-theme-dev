<?php

require_once get_template_directory() . '/includes/enqueue-script.php';

require_once get_template_directory() . '/includes/menu.php';

require_once get_template_directory() . '/includes/customizer.php';

require_once get_template_directory() . '/includes/sidebars.php';


function wpb_search_filter($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'wpb_search_filter');
