<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="single-article">
         <header>
			   <h1><?php the_title(); ?></h1>
            <?php show_post_meta(); ?>
         </header>
			<?php the_content(); ?>
         <p class="social-media">
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="markirby">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
            <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode( get_permalink()); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:90px; height:35px"></iframe>
         </p>
         
	      <?php comments_template(); ?>
	      
	   </article>

	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
