<section id="comment-section">
   <?php if ( post_password_required() ) : ?>
   				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
   			</div><!-- #comments -->
   <?php
   		/* Stop the rest of comments.php from being processed,
   		 * but don't kill the script entirely -- we still have
   		 * to fully load the template.
   		 */
   		return;
   	endif;

   	if (get_comments_number() > 0) {
         ?>
         <section id="comments">
            <header class="section-header"><h2><?php comments_number('0 Comments','1 Comment','% Comments'); ?></h2></header>
      	   <?php wp_list_comments('callback=markirby_comment'); ?>
         </section>
         <?php
   	}
      ?>

   <section id="respond">
      <?php if (comments_open()) { 
         if (get_comments_number() > 0) { ?>
            <h2>Leave a comment:</h2>
         <?php } else { ?>
            <h2>Leave the first comment:</h2>
         <?php } ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">                
           <p>
               <label for="author">Name</label>
               <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="25" class="form-comment" tabindex="1" />
           </p>
           <p>
               <label for="email">Email (not published)</label>
               <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-comment" tabindex="2" />
           </p>
           <p>
               <label for="comment">Leave us a comment</label>
               <textarea name="comment" id="comment" cols="35" rows="10" tabindex="4"></textarea>
           </p>
           <p class="submit"><input class="submitBtn" type="submit" value="Submit" alt="newsletter submit button" name="Submit"/> </p>
           <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
           <?php do_action('comment_form', $post->ID); ?>
      </form>
      <?php } else { ?>
      <p>Comments are now closed!</p>
      <?php } ?>
   </section>

</section>
