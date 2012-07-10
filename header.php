<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head profile="http://www.w3.org/2006/03/hcard">

   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

   <title><?php
   if (is_home()) {
      bloginfo('name');
   } else {
      the_title();
   }
   ?></title>

   <meta name="description" content="<?php 
      if (is_home()) {
         echo "I'm a user focused mobile developer, here is where I publish advice and thoughts on building great mobile apps";
      } else {
         the_excerpt();
      } 
   ?>">
   <meta name="author" content="Mark Kirby">
   <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">

   <link rel="profile" href="http://gmpg.org/xfn/11" />
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

   <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
   <script src="js/libs/modernizr-1.6.min.js"></script>
   <?php wp_head(); ?>
</head>
<body>
		<header id="site-header">
			<?php 
			if (is_home()) {
				echo "<h1 class='blog-title'><a href='/'>";
				bloginfo('name');
				echo "</a></h1>";
			} else {
				echo "<p class='blog-title'><a href='/'>";	
				bloginfo('name');
				echo "</a></p>";
			}
         ?>
      </header>
      <nav id="site-nav">
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="/about/" class="">about</a></li>
			</ul>
		</nav>
      <section id="main-content">