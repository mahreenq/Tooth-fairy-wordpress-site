<?php
/* Template Name: FrontPage*/
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/page-templates/comp/banner' ); ?>
					<?php get_template_part( 'template-parts/page-templates/home' ); ?>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
