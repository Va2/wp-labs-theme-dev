<table class="form-table">
    <tr>
        <th><?php _e("Choix d'icône :"); ?></th>
        <td>
            <select name="service_icon" id="service_icon">
                <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la BDD. -->
                <option value="">Sélectionné icône</option>
                <option <?= $icon == 'flaticon-023-flask' ? 'selected' : '' ?> value="flaticon-023-flask">Flask</option>
                <option <?= $icon == 'flaticon-011-compass' ? 'selected' : '' ?> value="flaticon-011-compass">Compass</option>
                <option <?= $icon == 'flaticon-037-idea' ? 'selected' : '' ?> value="flaticon-037-idea">Idea</option>
                <option <?= $icon == 'flaticon-039-vector' ? 'selected' : '' ?> value="flaticon-039-vector">Vector</option>
                <option <?= $icon == 'flaticon-036-brainstorming' ? 'selected' : '' ?> value="flaticon-036-brainstorming">Brainstorming</option>
                <option <?= $icon == 'flaticon-026-search' ? 'selected' : '' ?> value="flaticon-026-search">Loupe recherche</option>
                <option <?= $icon == 'flaticon-018-laptop-1' ? 'selected' : '' ?> value="flaticon-018-laptop-1">PC</option>
                <option <?= $icon == 'flaticon-043-sketch' ? 'selected' : '' ?> value="flaticon-043-sketch">Sketch</option>
                <option <?= $icon == 'flaticon-012-cube' ? 'selected' : '' ?> value="flaticon-012-cube">Cube</option>
            </select>
        </td>
    </tr>
</table>