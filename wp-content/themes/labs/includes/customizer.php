<?php
class LabsCustomizer
{
        /**
     * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
     * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
     *
     * @param [type] $wp_customize
     * @return void
     */
    public static function add_text_customizer($wp_customize)
    {
        // Titles & Text
        $wp_customize->add_panel('text-panel', [
            'title' => __('Titres & textes'),
            'Description' => __('Changer les titres & textes du site.')
        ]);
        $wp_customize->add_section('labs-home-section-text', [
            'panel' => 'text-panel',
            'title' => __('Page d\'accueil (HOME)'),
            'description' => __('Changer les titres & textes de la page d\'accueil.')
        ]);

        // Carousel
        $wp_customize->add_section('labs-home-carousel', [
            'title' => __('Carousel: images'),
        ]);
        $wp_customize->add_setting('home-intro-carousel-img-1', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'carousel-img-1-control', // = $slug control
                array(
                    'label'      => __( 'Image 1', 'theme_name' ),
                    'section'    => 'labs-home-carousel',
                    'settings'   => 'home-intro-carousel-img-1'
                )
            )
        );
        $wp_customize->add_setting('home-intro-carousel-img-2', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'carousel-img-2-control', // = $slug control
                array(
                    'label'      => __( 'Image 2', 'theme_name' ),
                    'section'    => 'labs-home-carousel',
                    'settings'   => 'home-intro-carousel-img-2'
                )
            )
        );

        // Video
        $wp_customize->add_section('labs-home-video', [
            'title' => __('Vidéo')
        ]);
        $wp_customize->add_setting('home-about-video-url', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('video-url-control', [
            'section' => 'labs-home-video',
            'settings' => 'home-about-video-url',
            'label' => __('Changer la vidéo'),
            'description' => __('Changer l\'url de la vidéo (YouTube).'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-about-video-vignette', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'video-vignette-control', // = $slug control
                array(
                    'label'      => __( 'Changer la vignette', 'theme_name' ),
                    'section'    => 'labs-home-video',
                    'settings'   => 'home-about-video-vignette'
                )
            )
        );

        // Google Maps
        $wp_customize->add_section('labs-gmaps', [
            'title' => __('Google Maps')
        ]);
        $wp_customize->add_setting('gmaps-address', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('gmaps-address-control', [
            'section' => 'labs-gmaps',
            'settings' => 'gmaps-address',
            'label' => __('Changer ladresse de Google Maps.'),
            'description' => __('Changer l\'adresse de Google Maps.'),
            'type' => 'text'
        ]);

        // Titles & Text
        $wp_customize->add_setting('home-about-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-about-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-about-title',
            'label' => __('Section ABOUT - titre'),
            'description' => __('Personnalisez le titre de la section about.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-about-text-left', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('home-about-text-left-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-about-text-left',
            'label' => __('Section ABOUT - text gauche'),
            'description' => __('Personnalisez le texte (colonne gauche) de la section about.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_setting('home-about-text-right', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('home-about-text-right-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-about-text-right',
            'label' => __('Section ABOUT - text droit'),
            'description' => __('Personnalisez le texte (colonne droite) de la section about.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_setting('home-about-btn-name', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-about-btn-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-about-btn-name',
            'label' => __('Section ABOUT - Nom boutton'),
            'description' => __('Personnalisez le texte du bouton de la section about.'),
            'type' => 'text'
        ]);

        $wp_customize->add_setting('home-testimonials-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-testimonials-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-testimonials-title',
            'label' => __('Titre testimonials'),
            'description' => __('Changer le titre de la section Testimonials.'),
            'type' => 'text'
        ]);

        $wp_customize->add_setting('home-services-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-services-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-services-title',
            'label' => __('Titre services'),
            'description' => __('Changer le titre de la section Services.'),
            'type' => 'text'
        ]);

        $wp_customize->add_setting('home-team-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-team-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-team-title',
            'label' => __('Titre Team'),
            'description' => __('Changer le titre de la section Team.'),
            'type' => 'text'
        ]);

        $wp_customize->add_setting('home-promotion-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-promotion-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-promotion-title',
            'label' => __('Titre Promotion Banner'),
            'description' => __('Changer le titre de la section Promotion.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-promotion-text', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-promotion-text-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-promotion-text',
            'label' => __('Text Promotion Banner'),
            'description' => __('Changer le texte de la section Promotion.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-promotion-btn', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-promotion-btn-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-promotion-btn',
            'label' => __('Nom bouton promotion'),
            'description' => __('Changer le nom du bouton de la section Promotion.'),
            'type' => 'text'
        ]);

        $wp_customize->add_setting('home-contact-title', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-title-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-title',
            'label' => __('Titre Contact Section'),
            'description' => __('Changer le titre de la section Contact.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-text', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('home-contact-text-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-text',
            'label' => __('Texte Contact Section'),
            'description' => __('Changer le texte de la section Contact.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_setting('home-contact-address-name', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-name-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-name',
            'label' => __('Contact: Nom adresse'),
            'description' => __('Changer le nom de l\'adresse de la section Contact.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-street', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-street-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-street',
            'label' => __('Contact: Nom de rue'),
            'description' => __('Changer le nom de rue de l\'adresse.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-nbr', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-nbr-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-nbr',
            'label' => __('Contact: N° de rue'),
            'description' => __('Changer le numéro de rue de l\'adresse.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-postcode', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-postcode-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-postcode',
            'label' => __('Contact: N° de code postal'),
            'description' => __('Changer le numéro de code postal de l\'adresse.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-city', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-city-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-city',
            'label' => __('Contact: Ville'),
            'description' => __('Changer la ville de l\'adresse.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-tel', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-tel-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-tel',
            'label' => __('Contact: N° de téléphone'),
            'description' => __('Changer le numéro de téléphone.'),
            'type' => 'text'
        ]);
        $wp_customize->add_setting('home-contact-address-email', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-contact-address-email-control', [
            'section' => 'labs-home-section-text',
            'settings' => 'home-contact-address-email',
            'label' => __('Contact: E-mail'),
            'description' => __('Changer l\'adresse e-mail.'),
            'type' => 'text'
        ]);
    }
}
add_action('customize_register', [LabsCustomizer::class, 'add_text_customizer']);