<?php /* Template Name: Book Appointment Form */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php
if (is_page(array('book-step-1', 'book-step-2', 'book-step-3', 'book-step-4', 'booking-confirmation'))){ ?>


<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
			<?php endwhile; // End of the loop. ?>


<?php } else {


} ?>
