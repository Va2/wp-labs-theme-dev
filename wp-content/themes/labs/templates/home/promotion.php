<?php
$promotion_title = get_theme_mod('home-promotion-title', __('Titre Promotion'));
$promotion_text = get_theme_mod('home-promotion-text', __('Texte Promotion'));
$promotion_btn = get_theme_mod('home-promotion-btn', __('Nom bouton Promotion'));
?>

<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2><?= $promotion_title ?></h2>
                <p><?= $promotion_text ?></p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="/?page_id=<?= get_page_by_title('contact')->ID ?>" class="site-btn btn-2"><?= $promotion_btn ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->