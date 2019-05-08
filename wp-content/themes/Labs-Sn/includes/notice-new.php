<!-- On vérifie si une notification existe en variable de session -->
<?php if (isset($_SESSION['notice-new'])): ?>
<?php
// on récupère les variables de session et on les stocks dans des variables plus simple à utiliser
$status = $_SESSION['notice-new']['status'];
$message = $_SESSION['notice-new']['message'];
?>
<div class="alert alert-<?=$status;?> is-dismissible">
    <p><?=$message;?></p>
</div>
<?php
// on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page
unset($_SESSION['notice-new']);
?>
<?php endif;?>