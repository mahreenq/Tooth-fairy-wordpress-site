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
  <?php foreach ($bookingform[0] as $bookingformheading) {  ?>
    <?php
    if(sizeof($bookingform[0] >0)){
     ?>
     <div class="text-align">
      <h1 class="text-align">
        <?php echo $bookingformheading['heading-form-1']; ?>
      </h1>
      <h2 class="">
        <?php echo $bookingformheading['subheading-form-1']; ?>
      </h2>
      <h4 class="padding-lg">
        <?php echo $bookingformheading['booking-info']; ?>
      </h4>
    </div>
      <?php } else { ?>
        <?php echo "no content"; }} ?>


<?php while ( have_posts() ) : the_post(); ?>
   <div class="flex justify-center ">
    <?php  the_content(); ?>
  </div>
			<?php endwhile; // End of the loop. ?>


<?php } else {

}
?>

<div class="flex justify-center padding-top-xl padding-bottom-xlg" >
 <?php if (is_page('book-step-1')){ ?>
  <img class= "width-75" src="http://localhost:8888/tooth_fairy_wordpress_site/wp-content/themes/tooth_fairy/assets/booking_step_1.png">
  <?php } ?>

  <?php if (is_page('book-step-2')){ ?>
   <img class= "width-75" src="http://localhost:8888/tooth_fairy_wordpress_site/wp-content/themes/tooth_fairy/assets/booking_step_2.png">
   <?php } ?>
   <?php if (is_page('book-step-3')){ ?>
    <img class= "width-75" src="http://localhost:8888/tooth_fairy_wordpress_site/wp-content/themes/tooth_fairy/assets/booking_step_3.png">
    <?php } ?>
    <?php if (is_page('book-step-4')){ ?>
     <img class= "width-75" src="http://localhost:8888/tooth_fairy_wordpress_site/wp-content/themes/tooth_fairy/assets/booking_step_4.png">
     <?php } ?>
     <?php if (is_page('booking-confirmation')){ ?>
      <img class= "width-75" src="http://localhost:8888/tooth_fairy_wordpress_site/wp-content/themes/tooth_fairy/assets/booking_step_5.png">
      <?php } ?>

    </div>

<?php get_footer() ?>
