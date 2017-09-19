<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<?php wp_head(); ?>
	</head>

	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

	
	<div class="mobile-nav">
     <div class="menu-btn" id="menu-btn">
	<div></div>
	<span></span>
	<span></span>
	<span></span>
     </div>
 
     <div class="responsive-menu">
        <ul>
           <li>1. Hello</li>
           <li>2. There</li>
        </ul>
     </div>
</div>

<script type="text/javascript">
	jQuery(function($){
    	$( '.menu-btn' ).click(function(){
    		$('.responsive-menu').addClass('expand')
    		$('.menu-btn').addClass('btn-none')
    	})
    	
    	 $( '.close-btn' ).click(function(){
    		$('.responsive-menu').removeClass('expand')
    		$('.menu-btn').removeClass('btn-none')
    	})
  	})
 </script>

 <script type="text/javascript">
	jQuery(function($){
    	$( '.menu-btn' ).click(function(){
    		$('.responsive-menu').addClass('expand')
    		$('.menu-btn').addClass('btn-none')
    	})
    	
    	 $( '.close-btn' ).click(function(){
    		$('.responsive-menu').removeClass('expand')
    		$('.menu-btn').removeClass('btn-none')
    	})
  	})
 </script>



 <style type="text/css">
 	.responsive-menu{
max-height:0;
background:#999999;
width:300px;
overflow:hidden;
transition:all .25s;
}

.expand {

max-height:300px; 
}



 </style>