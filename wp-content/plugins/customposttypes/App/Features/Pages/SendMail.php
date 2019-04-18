<?php
namespace App\Features\Pages;

class SendMail
{
    public static function send_mail()
    {
        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = sanitize_email($_POST['email']);
        $name = sanitize_text_field($_POST['name']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        // la fonction wordpress pour envoyer des mails https://developer.wordpress.org/reference/functions/wp_mail/
        wp_mail($email, 'LABS - Formulaire de contact | Email envoyé par: ' . $name . ' | Sujet: ' . $subject, $message);
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }
}