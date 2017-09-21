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

		<div class="secondary med-blue-bkg flex flex-row-wrap padding-lg" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- #secondary -->


<?php wp_footer(); ?>


	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>
