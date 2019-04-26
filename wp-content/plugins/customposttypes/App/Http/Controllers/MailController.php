<?php
namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Models\Mail;
use App\Http\Models\Newsletter;

class MailController
{
    public static function send_mail()
    {  
        // On vérifie la sécurité pour voir si le formulaire est bien authentique,que le formulaire envoyé est bien celui de notre page
        if (!wp_verify_nonce($_POST['_wpnonce'], 'send-mail')) {
            return;
        };

        // Maintenant à chaque fois qu'il y a une tenative réussie ou ratée d'envoi de mail, on lance la methode 'validation' de la class Request et on rempli son paramètre avec un tableau de clef et de valeur. On fait en sorte que le nom des clefs correspondent aux names des inputs du formulaire.
        Request::validation_mail([
            'name' => 'required',
            'email' => 'email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = sanitize_email($_POST['email']);
        $name = sanitize_text_field($_POST['name']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        $header='Content-Type: text/html; charset=UTF-8';


        // A chaque fois qu'on lance de formulaire d'envoi de mail on rajout dans $_SESSION un tableau notice avec deux clefs et leur valeur.
        $_SESSION['notice-mail'] = [
            'status' => 'success',
            'message' => 'Votre e-mail a bien été envoyé.'
        ];

        // la fonction wordpress pour envoyer des mails https://developer.wordpress.org/reference/functions/wp_mail/
        // Si le mail est bien envoyé status = 'success' sinon 'error'
        if(wp_mail($email, 'LABS - Formulaire de contact | Email envoyé par: ' . $name . ' | Sujet: ' . $subject, $message, $header)) {
            $_SESSION['notice-mail'] = [
                'status' => 'success',
                'message' => 'Votre e-mail a bien été envoyé.'
            ];

            // Refactoring pour apprendre et utiliser les models. Seul les models peuvent intéragir avec la base de donnée.
            // on instancie la class Mail et on rempli les valeurs dans les propriétés.
            $mail = new Mail();
            $mail->userid = get_current_user_id();
            $mail->name = $name;
            $mail->subject = $subject;
            $mail->email = $email;
            $mail->message = $message;
            // Sauvegarde du mail dans la base de donnée
            $mail->save();
        } else {
            $_SESSION['notice-mail'] = [
                'status' => 'danger',
                'message' => 'Une erreur est survenue, veuillez réessayer plus tard.'
            ];
        }

        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }

    public static function send_newsletter()
    {    
        // On vérifie la sécurité pour voir si le formulaire est bien authentique,que le formulaire envoyé est bien celui de notre page
        if (!wp_verify_nonce($_POST['_wpnonce'], 'send-newsletter')) {
            return;
        };

        // Maintenant à chaque fois qu'il y a une tenative réussie ou ratée d'envoi de mail, on lance la methode 'validation' de la class Request et on rempli son paramètre avec un tableau de clef et de valeur. On fait en sorte que le nom des clefs correspondent aux names des inputs du formulaire.
        Request::validation_newsletter([
            'email' => 'email'
        ]);

        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = sanitize_email($_POST['email']);
        $header='Content-Type: text/html; charset=UTF-8';

        // A chaque fois qu'on lance de formulaire d'envoi de mail on rajout dans $_SESSION un tableau notice avec deux clefs et leur valeur.
        $_SESSION['notice-newsletter'] = [
            'status' => 'success',
            'message' => 'Votre e-mail a bien été envoyé.'
        ];

        // Si le mail est bien envoyé status = 'success' sinon 'error'
        if(wp_mail($email, 'LABS - Inscription Newsletter de : ' . $email, $header)) {
            $_SESSION['notice-newsletter'] = [
                'status' => 'success',
                'message' => 'Votre inscription à la Newsletter est approuvée.'
            ];

            // Refactoring pour apprendre et utiliser les models. Seul les models peuvent intéragir avec la base de donnée.
            // on instancie la class Mail et on rempli les valeurs dans les propriétés.
            $newsletter = new Newsletter();
            $newsletter->email = $email;
            // Sauvegarde du mail dans la base de donnée
            $newsletter->save();
        } else {
            $_SESSION['notice-newsletter'] = [
                'status' => 'danger',
                'message' => 'Une erreur est survenue, veuillez réessayer plus tard.'
            ];
        }

        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }

    // Function qui va nous permettre de supprimer un mail dans la base de donnée, cette function attend un paramètre '$id' que l'on va remplir par la suite quand on va appelé cette function
    public static function delete($id)
    {
        $id = $_POST['id'];

        Newsletter::delete($id);

        wp_safe_redirect(wp_get_referer());
    }
}