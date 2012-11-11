<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <div class="alert help">
      <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "bonestheme"); ?></p>
    </div>
  <?php
    return;
  }
?>

<?php if ( have_comments() ) : ?>

  <h3 id="comments-title"><?php comments_number('No comments', '<span>One</span> comment', '<span>%</span> comments' );?></h3>

  <ol class="commentlist">
    <?php wp_list_comments('type=comment&callback=bones_comments'); ?>
  </ol>

  <?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
      <!-- If comments are open, but there are no comments. -->

  <?php else : // comments are closed ?>

  <!-- If comments are closed. -->
  <p>Comments are closed.</p>

  <?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond">

  <h3 id="reply-title">Comments make us happy</h3>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <!-- if a user must be logged in -->
    <p>You must be logged in to post a comment</p>
  <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

    <?php if ( is_user_logged_in() ) : ?>

      <p class="logged-in-as"><?php _e("Logged in as", "bonestheme"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "bonestheme"); ?>"><?php _e("Log out", "bonestheme"); ?> <?php _e("&raquo;", "bonestheme"); ?></a></p>

    <?php else : ?>

      <label for="author"><?php _e("Name", "bonestheme"); ?> <?php if ($req) _e("(required)"); ?></label>
      <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo "aria-required='true'"; ?> />
      
      <label for="email"><?php _e("Mail", "bonestheme"); ?> <?php if ($req) _e("(required)"); ?></label>
      <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Your E-Mail*', 'bonestheme'); ?>" <?php if ($req) echo "aria-required='true'"; ?> />

      <label for="url"><?php _e("Website", "bonestheme"); ?></label>
      <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />

    <?php endif; ?>

      <label for="comment"><?php _e("Comment", "bonestheme"); ?></label>
      <textarea name="comment" id="comment" placeholder="Write your comment here..."></textarea>

      <input name="submit" type="submit" id="submit" value="Post Comment" />

      <?php comment_id_fields(); ?>


      <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>
    
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
