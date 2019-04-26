<?php foreach ($newsletter as $email) : ?>
    <!-- <div class="alert alert-secondary" role="alert">
        <strong>Email : </strong><?= $email->email; ?>
        <a href="<?php menu_page_url('newsletter-client'); ?>&action=show&id=<?= $email->id; ?>" class="btn btn-primaty">voir</a>
    </div> -->
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Email : </strong><?= $email->email; ?>
                <button href="<?php menu_page_url('newsletter-client'); ?>&action=show&id=<?= $email->id; ?>" type="button" class="btn btn-outline-danger btn-sm">Supprimer</button>

            </li>

        </ul>
    </div>
<?php endforeach; ?>