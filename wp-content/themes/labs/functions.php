<?php
// Nous utilisons le fonction define() de php pour nous facilité l'écriture et pouvoir utiliser une constante global
define('INCLUDE_DIR', get_template_directory() . "/includes");

require_once(INCLUDE_DIR . '/enqueue-scripts.php');
require_once(INCLUDE_DIR . '/menu.php');
require_once(INCLUDE_DIR . '/customizer.php');