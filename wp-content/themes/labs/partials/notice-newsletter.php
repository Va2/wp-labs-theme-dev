<!-- On vérifie si une notification existe en variable de session -->
<?php if (isset($_SESSION['notice-newsletter'])) : ?>
    <?php
    // On récupère les variables de session et on les stocks dans des variables plus simple à utiliser.
    $status = $_SESSION['notice-newsletter']['status'];
    $message = $_SESSION['notice-newsletter']['message'];
    ?>
    <div class="alert alert-<?= $status; ?> is-dismissible">
        <p><?= $message; ?></p>
    </div>
    <?php
    // On supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page.
    unset($_SESSION['notice-newsletter']);
    ?>
<?php endif; ?>