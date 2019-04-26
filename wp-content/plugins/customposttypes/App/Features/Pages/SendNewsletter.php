<?php
namespace App\Features\Pages;

// On use la class Request pour pouvoir nous en servir plus bas.
// use App\Http\Requests\Request;
use App\Http\Models\Newsletter;
use App\Http\Controllers\MailController;

class SendNewsletter
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
            __('Formulaire pour contacter les clients'), // Le titre qui s'affichera sur la page
            __('Newsletter Clients'), // le texte dans le menu
            'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
            'newsletter-client', // Le slug du menu
            [self::class, 'render'], // La méthode qui va afficher la page
            'dashicons-email-alt', // L'icon dans le menu
            26 // la position dans le menu (à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc).
        );
    }

    public static function render()
    {
        // On fait appel a la function all venant de la class Mail et on compact son contenu dans notre view
        $newsletter = array_reverse(Newsletter::all());

        view('pages/newsletter', compact('newsletter'));
    }
}