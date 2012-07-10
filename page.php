<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article>
         <header>
			   <h1><?php the_title(); ?></h1>
         </header>
			<?php the_content(); ?>
         <?php edit_post_link('Edit', '<footer><p>', '</p></footer>'); ?>

	   </article>

	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
