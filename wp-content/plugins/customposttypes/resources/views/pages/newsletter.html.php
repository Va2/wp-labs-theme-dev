<?php foreach ($newsletter as $email) : ?>
    <div class="container mt-1">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Email : </strong><?= $email->email; ?>
                <!-- On rajout ici un formulaire qui ne contient qu'un bouton ainsi qu'un input mais caché (hidden) on le cache car ce n'est pas nécessaire de le voir par contre on va avoir besoin de ce qu'il contient -->
                <form action="<?= get_admin_url() . '/?action=newsletter-delete'; ?>" method="post" class="float-right">
                <!-- On met un input hidden avec comme valeur l'id du mail en question on fait ça pour en suit récupérer l'id via $_POST['et le NAME qui est ici "id" '] on récupérera ca valeur dans les prochain commit pour l'instant on à uniquement un petit formulaire qui contient l'id du mail et qui nous met une action=delete dans notre url -->
                    <input type="hidden" name="id" value="<?= $email->id; ?>">
                    <button type='submit' class="btn btn-outline-danger btn-sm">Supprimer</button>
                </form>
            </li>
        </ul>
    </div>
<?php endforeach; ?>