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

        <?php get_template_part( 'template-parts/page-templates/savings' ); ?>

        <?php get_template_part( 'template-parts/page-templates/insurance' ); ?>

        <?php get_template_part( 'template-parts/page-templates/search-bar' ); ?>

        <?php get_template_part( 'template-parts/page-templates/payment' ); ?>

        <?php get_template_part( 'template-parts/page-templates/discount' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer() ?>