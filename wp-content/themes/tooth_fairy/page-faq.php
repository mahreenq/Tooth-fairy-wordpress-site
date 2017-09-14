<?php /* Template Name: FAQ*/ ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

 
   wp_nav_menu()
 ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php the_post_navigation(); ?>

			<?php include('nav-bar.php'); ?>

				<i class="fa fa-wordpress" aria-hidden="true"></i>

			    <i class="fa fa-camera-retro fa-2x"></i> fa-2x
				<i class="fa fa-camera-retro fa-3x"></i> fa-3x
				<i class="fa fa-camera-retro fa-4x"></i> fa-4x
				<i class="fa fa-camera-retro fa-5x"></i> fa-5x


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php  get_footer() ?>