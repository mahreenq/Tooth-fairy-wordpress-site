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
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?>
			</a>
				<header id="masthead" class="'.$site_header.' flex align-items-center justify-around flex-wrap" role="banner">

						<div class="site-branding">
								<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>

					<nav id="hide-menu" class="main-navigation flex justify-between flex-wrap blue-border-btm" role="navigation">

							<div class="padding-left-sm">
	<!-- CHANGE LINK HERE TO LINK TO HOME PAGE -->
									<a href="<?php echo get_home_url(); ?>">
										<img src=<?php echo get_template_directory_uri().'/assets/logo.png'?>>
									</a>
							</div>
							<div class="order-3 flex justify-end width-75">
									<button id="myDropdown" class="menu-toggle white-button" aria-controls="primary-menu" aria-expanded="false">
											<?php esc_html( 'Primary Menu' ); ?>
											<img src=<?php echo get_template_directory_uri().'/assets/hamburger-menu.png'?>>
									</button>
							</div>
							<div class="order-2 width-100 d-width-auto ">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div>
					</nav><!-- #site-navigation -->
				</header><!-- #masthead -->

			<div id="content" class="site-content">
