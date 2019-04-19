<table class="form-table">
    <tr>
        <th><?php _e("Choix d'icône :"); ?></th>
        <td>
            <select name="product_icon" id="product_icon">
                <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la BDD. -->
                <option value="">Sélectionné icône</option>

                <option <?= $icon == 'flaticon-002-caliper' ? 'selected' : '' ?> value="flaticon-002-caliper">Etrier</option>
                <option <?= $icon == 'flaticon-019-coffee-cup' ? 'selected' : '' ?> value="flaticon-019-coffee-cup">Tasse de café</option>
                <option <?= $icon == 'flaticon-020-creativity' ? 'selected' : '' ?> value="flaticon-020-creativity">Créativité</option>
                <option <?= $icon == 'flaticon-037-idea' ? 'selected' : '' ?> value="flaticon-037-idea">Idée</option>
                <option <?= $icon == 'flaticon-025-imagination' ? 'selected' : '' ?> value="flaticon-025-imagination">Imagination</option>
                <option <?= $icon == 'flaticon-008-team' ? 'selected' : '' ?> value="flaticon-008-team">Equipe</option>
            </select>
        </td>
    </tr>
</table>