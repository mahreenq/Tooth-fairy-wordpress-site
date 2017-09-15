	<?php
	/**
	* The template for displaying the footer.
	*
	* @package RED_Starter_Theme
	*/

	?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
	
	<?php   if ( ! is_active_sidebar( 'footer' ) ) {
	return;
	}
	?>
    <i class="fa fa-facebook" aria-hidden="true"></i>


	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'footer' ); ?>
	</div><!-- #secondary -->

	<?php wp_footer(); ?>

	</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #page -->
	</body>
	</html>
