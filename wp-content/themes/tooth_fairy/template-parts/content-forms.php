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

  <?php  $bookingform = get_post_meta( get_the_ID(), 'wiki_test_repeat_group'); ?>
  <?php foreach ($bookingform[0] as $bookingformheadings) {  ?>
    <?php
    if(sizeof($bookingform[0] >0)){
     ?>
      <h1>
        <?php echo $bookingformheadings['heading-form-1']; ?>
      </h1>
      <h2>
        <?php echo $bookingformheadings['subheading-form-1']; ?>
      </h2>
      <h4>
        <?php echo $bookingformheadings['booking-info']; ?>
      </h4>
      <?php } else { ?>
        <?php echo "no content"; }} ?>


<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
			<?php endwhile; // End of the loop. ?>


<?php } else {

}
?>
