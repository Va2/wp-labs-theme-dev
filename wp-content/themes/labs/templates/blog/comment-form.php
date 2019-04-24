<!-- Commert Form -->
<div class="row">
    <div class="col-md-9 comment-from">
        <h2>Leave a comment</h2>
        <?php // comment_form(); ?>
        <form action="<?= get_home_url(); ?>/wp-comments-post.php" method="POST" id="comment-form" class="form-class">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="author" placeholder="Your name">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="email" placeholder="Your email">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="url" placeholder="Subject">
                    <textarea name="comment" placeholder="Message"></textarea>
                    <input type="submit" name="submit" class="site-btn" value="send">
                    <input type='hidden' name='comment_post_ID' value='276' id='comment_post_ID' />
                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                </div>
            </div>
        </form>
    </div>
</div>