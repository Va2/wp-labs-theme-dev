<?php
namespace App;

class Capabilities
{
    /**
     * Fonction pour démarrer une session afin de pouvoir utiliser la variable $_SESSION
     *
     * @return void
     */
    public static function labs_admin_capability()
    {        
        $admin_role = get_role( 'administrator' );

        $admin_role->add_cap( 'edit_product' );
        $admin_role->add_cap( 'delete_product' );
        $admin_role->add_cap( 'edit_products' );
        $admin_role->add_cap( 'edit_others_products' );
        $admin_role->add_cap( 'publish_products' );
        $admin_role->add_cap( 'read_private_products' );
        $admin_role->add_cap( 'edit_products' );

        $admin_role->add_cap( 'edit_service' );
        $admin_role->add_cap( 'delete_service' );
        $admin_role->add_cap( 'edit_services' );
        $admin_role->add_cap( 'edit_others_services' );
        $admin_role->add_cap( 'publish_services' );
        $admin_role->add_cap( 'read_private_services' );
        $admin_role->add_cap( 'edit_services' );

        $admin_role->add_cap( 'edit_team' );
        $admin_role->add_cap( 'delete_team' );
        $admin_role->add_cap( 'edit_teams' );
        $admin_role->add_cap( 'edit_others_teams' );
        $admin_role->add_cap( 'publish_teams' );
        $admin_role->add_cap( 'read_private_teams' );
        $admin_role->add_cap( 'edit_teams' );

        $admin_role->add_cap( 'edit_testimonial' );
        $admin_role->add_cap( 'delete_testimonial' );
        $admin_role->add_cap( 'edit_testimonials' );
        $admin_role->add_cap( 'edit_others_testimonials' );
        $admin_role->add_cap( 'publish_testimonials' );
        $admin_role->add_cap( 'read_private_testimonials' );
        $admin_role->add_cap( 'edit_testimonials' );
    }
}