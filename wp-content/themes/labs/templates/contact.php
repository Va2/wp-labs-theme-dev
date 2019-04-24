<?php
$contact_title = get_theme_mod('home-contact-title', __('Titre Contact'));
$contact_text = get_theme_mod('home-contact-text', __('Texte Contact'));
$contact_address_name = get_theme_mod('home-contact-address-name', __('Main Office'));
$contact_address_street = get_theme_mod('home-contact-address-street', __('Rue de l\'été'));
$contact_address_nbr = get_theme_mod('home-contact-address-nbr', __('123'));
$contact_address_postcode = get_theme_mod('home-contact-address-postcode', __('1050'));
$contact_address_city = get_theme_mod('home-contact-address-city', __('Bruxelles'));
$contact_address_tel = get_theme_mod('home-contact-address-tel', __('+32 2 639 39 99'));
$contact_address_email = get_theme_mod('home-contact-address-email', __('hello@company.com'));
?>

<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2><?= $contact_title ?></h2>
                </div>
                <p><?= $contact_text ?></p>
                <h3 class="mt60"><?= $contact_address_name ?></h3>
                <p class="con-item"><?= $contact_address_street ?>, <?= $contact_address_nbr ?>
                <br><?= $contact_address_postcode ?> <?= $contact_address_city ?></p>
                <p class="con-item"><?= $contact_address_tel ?></p>
                <p class="con-item"><?= $contact_address_email ?></p>
            </div>

            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <!-- Ici nous ajoutons une partie d'html qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
                <?php include plugin_dir_path(__FILE__) . "../partials/notice.php" ?>

                <form action="<?= get_admin_url() . '/?action=send-mail'; ?>" method="post" class="form-class" id="con_form">
                    <!-- Cette fonction créer des inputs cachés qui contiennent des informations qui vont nous permetre de savoir si le formulaire est authentique et si il est bien executé via notre site web et pas via une autre source. -->
                    <?php wp_nonce_field('send-mail'); ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->