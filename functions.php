<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

add_theme_support('automatic-feed-links');

//only use within the callback to the command wp_list_comments()
function markirby_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
   ?>
   <article <?php comment_class("comment") ?>>
      <header>
         <h3><?php comment_author_link(); ?></h3>
         <time datetime="<?php comment_time('Y-m-d') ?>" pubdate><?php comment_time('l F jS Y') ?> at  <?php comment_time('H:i') ?></time>      
      </header>
      <div class="content">
         <?php comment_text(); ?>
      </div>
   </article>
<?php 
}

function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function show_post_meta() {
   ?><time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l F jS Y') ?></time>
   <p class="postmetadata"> - <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('0 Comments','1 Comment', '% Comments'); ?></p><?php
}
?>
