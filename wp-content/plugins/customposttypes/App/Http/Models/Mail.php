<?php
namespace App\Http\Models;

class Mail
{
    // les propriétés de l'objet model. Les propriété de l'objet qui sont représentative de la structure de la table dans la base de donnée.
    public $id;
    public $userid;
    public $name;
    public $subject;
    public $email;
    public $message;
    public $created_at;

    /**
     * Fonction qui est appelé lors de l'instance d'un objet.
     */
    public function __construct()
    {
        // on rempli déjà la date de création
        $this->created_at = current_time('mysql');
    }

    /**
     * fonction qui prend en charge la sauvegarde du mail dans la base de donnée.
     *
     * @return void
     */
    public function save()
    {
        global $wpdb;
        // nous utilisons à nous la méthode insert de l'objet $wpdb;
        return $wpdb->insert(
        $wpdb->prefix . 'mail', // le nom de la table
            // ici nous affichons toutes les colonnes avec leur valeur sous forme d'objet.
            [
                'id' => $this->id,
                'userid' => $this->userid,
                'uname' => $this->name,
                'msubject' => $this->subject,
                'email' => $this->email,
                'mmessage' => $this->message,
                'created_at' => $this->created_at
            ]
            // // Nous appelons une fonction php pure qui transforme toutes les propriétés de notre objet en tableau pour simplifier l'écriture
            // get_object_vars($this)
        );
    }
}