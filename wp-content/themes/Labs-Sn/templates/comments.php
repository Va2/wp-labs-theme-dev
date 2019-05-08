<!-- FORMULAIRE -->
<div class="row">
    <div class="col-md-9 comment-from">
        <h2>Leave a comment</h2>
        <?php if (is_user_logged_in()) {?>
            <form class="form-class" action="<?php echo get_home_url() ?>/wp-comments-post.php" method="post" id="commentform">
                <div class="row">
                    <div class="col-sm-12">
                        <textarea name="comment" placeholder="Message"></textarea>
                        <input type="submit" name="submit" class="site-btn" value="Send" />
                        <input type='hidden' name='comment_post_ID' value='<?php the_ID();?>' id='comment_post_ID' />
                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </div>
                </div>
            </form>
        <?php } else {?>
            <form class="form-class" action="<?php echo get_home_url() ?>/wp-comments-post.php" method="post" id="commentform">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="author" placeholder="Your name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="email" placeholder="Your email">
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="url" placeholder="Website Url">
                        <textarea name="comment" placeholder="Message"></textarea>
                        <input type="submit" name="submit" class="site-btn" value="Send" />
                        <input type='hidden' name='comment_post_ID' value='<?php the_ID();?>' id='comment_post_ID' />
                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </div>
                </div>
            </form>
        <?php }?>
    </div>
</div>