<?php
/**
 * fonction pour rendre une vue
 *
 * @param string $path chemin du fichier à partir du dossier views sans l'extention .html.php
 * @return void
 */
// Rajout d'un second paramètre qui par défaut vaut un tableau vide.
function view($path, $data = [])
{
    extract($data); // https://www.php.net/manual/fr/function.extract.php

    // Ce helper, me permet de faire un include plus rapidement je récupère juste le chemin du fichier à partir du dossier views sans l'extention dans le fichier ServiceIconsMetabox.php ligne 31 que j'envoi en paramètre,ce chemin est envoyé dans la variable $path, puis je complète le chemin avec ma variable global et l'extention.
    include(LABS_VIEW_DIR . $path . '.html.php');
}

// // On créer un helper qui fait plus au moins comme notre autre helper view mais avec nos functon ob_start() et ob_het_clean() on retourne ce qu'a traité ob_get_clean
// function mail_template($path, $data = [])
// {
//     ob_start();
//     extract($data);
//     include(RAT_VIEW_DIR . $path . '.php');
//     return ob_get_clean();
// }

// /**
//  * fonction pour rendre une vue
//  *
//  * @param string $path chemin du fichier à partir du dossier views sans l'extention .html.php
//  * @return void
//  */
// // Rajout d'un second paramètre qui par défaut vaut un tableau vide.
// function partial($path, $data = [])
// {
//     extract($data); // https://www.php.net/manual/fr/function.extract.php

//     // Ce helper, me permet de faire un include plus rapidement je récupère juste le chemin du fichier à partir du dossier views sans l'extention dans le fichier ServiceIconsMetabox.php ligne 31 que j'envoi en paramètre,ce chemin est envoyé dans la variable $path, puis je complète le chemin avec ma variable global et l'extention.
//     include(LABS_VIEW_DIR . $path . '.php');
// }

/**
 * Extrait la valeur dans un tableau si la valeur existe dans ce tableau
 * cela permet de ne pas avoir d'erreur lorsque l'on créer un nouveau post.
 *
 * @param string $key la meta key dans la base de donnée
 * @param array $data le tableau resultant de get_post_meta
 * @return void
 */
function extract_data_attr(string $key, array $data)
{
    // Vérification que la clé exist bien dans le tableau
    if (array_key_exists($key, $data)) {
        // On renvoi la valeur et on en profite pour échapper la valeur pour la sécurité.
        return esc_attr($data[$key][0]);
    }
    return '';
}

/**
 * Fonction qui attend 2 paramètres que j'ai nomé $post_id et $data et qui sont remplies par la function save du fichier RecipeDetailsMetabox.php
 *
 *
 * @param string $post_id
 * @param array $data
 * @return void
 */
function update_post_metas($post_id, $data){
    // Je fais un foreach pour chaque donnée dans le tableau $data je veux récupérer la clef et la valeur.
    foreach ($data as $key => $value) {
        // J'utilise la function wordpress update_post_meta() qui attend 3 paramètres:
        // l'id du post qu'il faut sauvegarder ou mettre à jours
        // la clef (letiquette) qu'on donne a la row (tirroir) dans la BDD
        // la valeur qu'on stock dans cette row
        update_post_meta($post_id, $key, $value);
    }
}

/**
 * Fonction qui assainit les données avec sanitize_text_field seulement si l'élément contenu dans $key existe dans le tableau $data.
 *
 *
 * @param string $key
 * @param array $data
 * @return void
 */
function post_data($key, $data){
    if(array_key_exists($key, $data)){ // https://www.php.net/manual/fr/function.array-key-exists.php
        return sanitize_text_field($data[$key]);
    }
    return '';
}