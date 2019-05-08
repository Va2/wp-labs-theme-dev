<?php
namespace App\Http\Requests;

class Request
{
    // On créer une variable de type array.Pour le moment on n'en fait rien.
    private static $errors = array();
    // On créer une function du nom de validation qui attend un paramètre de type array.Ce paramètre va être rempli via le fichier SendMail.php ligne 44.
    public static function validation(array $data)
    {
        foreach ($data as $input_name => $verification) {
            // on lance la function de la class, 'email' ou 'required' selon ce que vaut $verification et on rempli le paramètre de la function avec $input_name
            call_user_func([self::class, $verification], $input_name);
        }
        if (count(self::$errors) != 0) {
            $message = "";
            foreach (self::$errors as $key => $value) {
                $message .= $value . '<br>';
            }
            // On rempli notre $_SESSION avec toutes nos erreurs réecrite pour que l'affichage soit mieux présenté
            $_SESSION['notice'] = [
                'status' => 'danger',
                'message' => $message,
            ];
            foreach ($data as $input_name => $validation) {
                $_SESSION['old'][$input_name] = $_POST[$input_name];
            }
            // on retourne sur notre page
            wp_safe_redirect(wp_get_referer());
            // Permet d'arreter le script tant qu'il y a des erreurs à partir de la ligne 44 de notre fichier SendMail.php
            exit;
        }
    }

    public static function validationNews(array $data)
    {
        foreach ($data as $input_name => $verification) {
            // on lance la function de la class, 'email' ou 'required' selon ce que vaut $verification et on rempli le paramètre de la function avec $input_name
            call_user_func([self::class, $verification], $input_name);
        }
        if (count(self::$errors) != 0) {
            $message = "";
            foreach (self::$errors as $key => $value) {
                $message .= $value . '<br>';
            }
            $_SESSION['notice-new'] = [
                'status' => 'danger',
                'message' => $message,
            ];
            // on retourne sur notre page
            wp_safe_redirect(wp_get_referer());
            // Permet d'arreter le script tant qu'il y a des erreurs à partir de la ligne 44 de notre fichier SendMail.php
            exit;
        }
    }

    public static function required(string $input_name)
    {
        if ($_POST[$input_name] == "") {
            // on rempli notre tableau $error avec nos erreurs qu'on écrit ci dessous
            self::$errors[$input_name] = sprintf(__('Le champ %s est obligatoire'), $input_name);
        }
    }

    public static function email(string $input_name)
    {
        if (!is_email($_POST[$input_name])) {
            self::$errors[$input_name] = sprintf(__('Le champ %s doit être un format email'), $input_name);
        }
    }
}
