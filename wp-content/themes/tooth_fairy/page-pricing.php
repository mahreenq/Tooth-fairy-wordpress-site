<?php
/* Template Name: Pricing*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/page-templates/pricing' ); ?>

      <?php endwhile; // End of the loop. ?>
      
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer() ?>
