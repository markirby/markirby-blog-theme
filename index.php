<?php get_header(); ?>

<section id="welcome">
	<p><?php echo get_bloginfo ( 'description' ); ?></p>
</section>

<section id="posts">
   <?php if (have_posts()) : ?>

   	<?php while (have_posts()) : the_post(); ?>

   		<article>
            <header>
   			   <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
               <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l F jS Y') ?></time>   			   
               <p class="postmetadata"> - <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('0 Comments','1 Comment', '% Comments'); ?></p>
            </header>
   			<?php the_excerpt(); ?>
   			<p><a href="<?php the_permalink() ?>">Read the article</a></p>
   		</article>

   	<?php endwhile; ?>
   
      <footer>
      	<nav id="posts-nav">
            <ul class="pagination clearfix">
               <?php 
               $next_posts_link = get_next_posts_link('Older posts');
               $older_posts_link = get_previous_posts_link('Newer posts');
               if (!empty($next_posts_link)) {
                  echo "<li class='older-posts'>$next_posts_link</li>";
               }
               if (!empty($older_posts_link)) {
                  echo "<li class='newer-posts'>$older_posts_link</li>";
               }
               ?>
            </ul>
      	</nav>
      </footer>
   <?php endif; ?>
</section>

<?php get_footer(); ?>