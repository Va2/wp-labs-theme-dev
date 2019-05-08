
  <!-- newsletter section -->
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <?php include plugin_dir_path(__FILE__) . "../includes/notice-new.php";?>
          <form class="nl-form" action="<?= admin_url('admin-post.php'); ?>" method="post">
          <?php
            if(isset($_SESSION['mailNew'])){
              $maValue = $_SESSION['mailNew'];
            }else{
              $maValue = '';
            }

          ?>
          <?php wp_nonce_field('send-mail');?>
          <input type="hidden" name="action" value="save-newsletter">
          <?php ?>
            <input type="text" name="emailNews" placeholder="Your e-mail here" value="<?= $maValue ?>">
            <button class="site-btn btn-2">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->
