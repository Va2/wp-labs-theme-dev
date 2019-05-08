<?php
namespace App;

class Setup
{
    /**
     * Fonction pour démarrer une session afin de pouvoir utiliser la variable $_SESSION
     *
     * @return void
     */
    public static function start_session()
    {
        // on vérifie si une session n'existe pas déjà. Si non on en commence une
        if (!session_id()) {
            // session_start() génère un ID accessible via session_id
            session_start();
        }
    }

    /*Fonction pour ajouter des script et css pour l'admin*/
    public static function enqueue_scripts($page)
    {
        wp_enqueue_style('flaticon', RAT_PLUGIN_URL . '/resources/assets/css/flaticon.css');
        wp_enqueue_style('bootstrap', RAT_PLUGIN_URL . '/resources/assets/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap-grid', RAT_PLUGIN_URL . '/resources/assets/css/bootstrap-grid.css');
    }
}
