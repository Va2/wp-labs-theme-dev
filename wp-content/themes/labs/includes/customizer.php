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
        $wp_customize->add_section('labs-home-carousel', [
            'title' => __('Carousel: images'),
            // 'description' => __('Changer l\'url de la vidéo (YouTube).')
        ]);
        $wp_customize->add_setting('home-intro-carousel-img-1', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'carousel-img-1', // = $slug control
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
                'carousel-img-2', // = $slug control
                array(
                    'label'      => __( 'Image 2', 'theme_name' ),
                    'section'    => 'labs-home-carousel',
                    'settings'   => 'home-intro-carousel-img-2'
                )
            )
        );

        $wp_customize->add_section('labs-home-section-text', [
            'panel' => 'text-panel',
            'title' => __('Page d\'accueil (HOME)'),
            'description' => __('Changer les titres & textes de la page d\'accueil.')
        ]);
        $wp_customize->add_section('labs-home-video', [
            'title' => __('Vidéo'),
            // 'description' => __('Changer l\'url de la vidéo (YouTube).')
        ]);
        

        // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
        // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
        // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/

        // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
        // Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
        // Attention un control ne s'affiche que s'il est lié à un setting.
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
        // $wp_customize->add_setting('home-card-title-left', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_text_field'
        // ]);
        //  $wp_customize->add_control('home-card-title-left-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-title-left',
        //     'label' => __('Section CARD - titre gauche'),
        //     'description' => __('Personnalisez le titre de la \'card\' gauche.'),
        //     'type' => 'text'
        // ]);
        // $wp_customize->add_setting('home-card-text-left', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_textarea_field'
        // ]);
        // $wp_customize->add_control('home-card-text-left-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-text-left',
        //     'label' => __('Section CARD - text gauche'),
        //     'description' => __('Personnalisez le texte de la \'card\' gauche.'),
        //     'type' => 'textarea'
        // ]);
        // $wp_customize->add_setting('home-card-title-center', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_text_field'
        // ]);
        // $wp_customize->add_control('home-card-title-center-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-title-center',
        //     'label' => __('Section CARD - titre centre'),
        //     'description' => __('Personnalisez le titre de la \'card\' centrale.'),
        //     'type' => 'text'
        // ]);
        // $wp_customize->add_setting('home-card-text-center', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_textarea_field'
        // ]);
        // $wp_customize->add_control('home-card-text-center-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-text-center',
        //     'label' => __('Section CARD - text centre'),
        //     'description' => __('Personnalisez le text de la \'card\' centrale.'),
        //     'type' => 'textarea'
        // ]);
        // $wp_customize->add_setting('home-card-title-right', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_text_field'
        // ]);
        // $wp_customize->add_control('home-card-title-right-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-title-right',
        //     'label' => __('Section CARD - titre droite'),
        //     'description' => __('Personnalisez le titre de la \'card\' droite.'),
        //     'type' => 'text'
        // ]);
        // $wp_customize->add_setting('home-card-text-right', [
        //     'type' => 'theme_mod',
        //     'sanitize_callback' => 'sanitize_textarea_field'
        // ]);
        // $wp_customize->add_control('home-card-text-right-control', [
        //     'section' => 'labs-home-section-text',
        //     'settings' => 'home-card-text-right',
        //     'label' => __('Section CARD - text droite'),
        //     'description' => __('Personnalisez le text de la \'card\' droite.'),
        //     'type' => 'textarea'
        // ]);

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
        $wp_customize->add_setting('home-about-video', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('home-about-video-control', [
            'section' => 'labs-home-video',
            'settings' => 'home-about-video',
            'label' => __('Changer la vidéo'),
            'description' => __('Changer l\'url de la vidéo (YouTube).'),
            'type' => 'text'
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'video_vignette', // = $slug control
                array(
                    'label'      => __( 'Changer la vignette', 'theme_name' ),
                    'section'    => 'labs-home-video',
                    'settings'   => 'home-about-video'
                )
            )
        );

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