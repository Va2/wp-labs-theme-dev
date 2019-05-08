<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
      <div class="row">
        <!-- contact info -->
        <div class="col-md-5 col-md-offset-1 contact-info col-push">
          <div class="section-title left">
            <h2>Contact us</h2>
          </div>
          <p><?=get_theme_mod('contact_extrait')?></p>
          <h3 class="mt60">Main Office</h3>
          <p class="con-item"><?=get_theme_mod('contact_adress')?></p>
          <p class="con-item"><?=get_theme_mod('contact_gsm')?></p>
          <p class="con-item"><?=get_theme_mod('contact_email')?></p>
          <p></p>
        </div>

        <!-- contact form -->
        <div class="col-md-6 col-pull">
          <?php include plugin_dir_path(__FILE__) . "../includes/notice.php";?>

          <form class="form-class" id="con_form" action="<?= admin_url('admin-post.php')?>" method="post">
          <?php wp_nonce_field('send-mail'); ?>
          <input type="hidden" name="action" value="send-mail">
          <div class="row">
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name" value="<?= isset($old['email']) ? $old['email'] : '' ?>">
              </div>
              <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email" value="">
              </div>
              <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject" value="<?= $subject ?>">
                <textarea name="message" placeholder="Message" value="<?= $message ?>"></textarea>
                <button class="site-btn">send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->
