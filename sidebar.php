<section id="links">
	<!-- other places -->
   <h2>Other places to find me</h2>
   <ul>
	   <?php wp_list_bookmarks('orderby=rating&category=33&categorize=0&title_li=0'); ?>
	</ul>
	<?php

	if ( function_exists('register_sidebar') )
	register_sidebar();?>
	<h2>I support</h2>
   <p><a href='https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/String' title='JavaScript String .split'><img src='http://static.jsconf.us/promotejsh.gif' height='150' width='180' alt='JavaScript String .split'/></a></p>
</section>

