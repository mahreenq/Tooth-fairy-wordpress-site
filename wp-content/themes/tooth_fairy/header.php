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
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script type="text/javascript" src="http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/js/search.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

	<?php echo '<header id="masthead" class="'.$site_header.' flex align-items-center justify-around flex-wrap" role="banner">'; ?>

			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<?php echo '<nav id="hide-menu" class="main-navigation" role="navigation">';?>

					<div class="flex justify-between">
						<div>
							<a href="http://localhost:8888/tooth_fairy/"><img src="http://localhost:8888/tooth_fairy/wp-content/themes/tooth_fairy/assets/logo.png"></a>
						</div>
						<div>
							<button id="myDropdown" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?><img src="http://localhost:8888/tooth_fairy/wp-content/themes/tooth_fairy/assets/hamburger-menu.png"</button>
						</div>

					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


				</nav><!-- #site-navigation -->


			</header><!-- #masthead -->

			<div id="content" class="site-content">


<style type="text/css">
@media screen and (max-width: 600px) {	
	#primary-menu{
		flex-direction: column;
	}
	.sub-menu{
		flex-direction: column;
	}
}


</style>