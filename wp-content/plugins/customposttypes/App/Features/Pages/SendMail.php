<?php
namespace App\Features\Pages;

// On use la class Request pour pouvoir nous en servir plus bas.
// use App\Http\Requests\Request;

class SendMail
{
    // !!!!! PROB !!!!!
    // public static function render()
    // {
    //     Si $_SESSION['old'] existe alors on déclare une variable $old dans la quelle on stock son contenu puis on vide notre global
    //     if (isset($_SESSION['old'])) {
    //         $old = $_SESSION['old'];
    //         unset($_SESSION['old']);
    //     }

    //     // on envoi notre variable $old qui contient les anciennes valeurs dans notre view send-mail pour qu'on puisse afficher son contenu dans les champs.
    //     !!!!! PROB !!!!!
    //     view('pages/send-mail');
    //     partial('partials/notice', compact('name', 'subject', 'message'));
    //     $mail = mail_template('partials/notice', compact('name','subject','message'));
    //     mail_template('partials/notice', compact('old'));
    // }
}