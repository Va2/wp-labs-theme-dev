<?php
namespace App\Features\Pages;

use App\Http\Controllers\MailController;
use App\Http\Models\Newsletter as myNewsletter;


class Newsletter
{
    /**
     * Initialisation de la page.
     *
     * @return void
     */
    public static function init()
    {
        //https: //developer.wordpress.org/reference/functions/add_menu_page/
        add_menu_page(
            __('List des inscrit a la Newsletter'), // Le titre qui s'affichera sur la page
            __('Newsletter List'), // le texte dans le menu
            'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
            'newsletter-client', // Le slug du menu
            [self::class, 'render'], // La méthode qui va afficher la page
            'dashicons-email-alt', // L'icon dans le menu
            26// la position dans le menu (à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc).
        );
    }

    /**
     * Affichage de la page
     *
     * @return void
     */
    public static function render()
    {
        $mails = array_reverse(myNewsletter::all());
        view('pages/newsletter-list' , compact('mails'));
    }

}
