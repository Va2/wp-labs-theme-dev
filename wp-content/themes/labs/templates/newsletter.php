<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <?php include plugin_dir_path(__FILE__) . "../partials/notice-newsletter.php" ?>
                <form action="<?= admin_url('admin-post.php'); ?>" method="POST" class="nl-form">
                    <?php wp_nonce_field('send-newsletter'); ?>
                    <input type="hidden" name="action" value="send-newsletter">

                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->