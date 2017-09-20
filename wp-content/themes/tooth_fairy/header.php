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

	<ul>
		<li>
			<a href="#link">Parent 1</a>
		</li>
		<li class="menu-item-has-children">
			<a href="#link">Parent 2</a>
			<ul class="sub-menu">
				<li>
					<a href="#link">Child 1</a>
				</li>
				<li>
					<a href="#link">Child 2</a>
				</li>
				<li>
					<a href="#link">Child 3</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#link">Parent 3</a>
		</li>
	</ul>
</div>

	



 <style type="text/css">
 
.menu-btn div {
	position: absolute;
	left: 100%;
	top: 64%;
	padding-right: 8px;
	margin-top: -0.50em;
	line-height: 1.2;
	font-size: 18px;
	font-weight: 200;
	vertical-align: middle;
	z-index: 99;
}
 
.menu-btn span {
	display: block;
	width: 19px;
	height: 3px;
	margin: 4px 0;
	background: rgb(0,0,0);
	z-index: 99;
}
 
.responsive-menu{
	display: none;
}
 
.expand {
	display: block !important; 
}
 
.open-menu-link{
	display: none;
	position: absolute;
	right: 15px;
	top:0;
	line-height: 55px;
	font-size: 30px;
	cursor: pointer;
}
 
li .sub-menu{
	display: none;
}
 
.visible {
	display: block !important;
}
 </style>

  <script type="text/javascript" src="header.js"></script>
