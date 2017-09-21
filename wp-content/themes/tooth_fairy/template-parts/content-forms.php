<?php /* Template Name: Book Appointment Form */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<?php
if (is_page(array('book-step-1', 'book-step-2', 'book-step-3', 'booking-confirmation'))){ ?>

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

<!-- PROGRESS BAR -->

<div class=" flex justify-center padding-top-xl padding-bottom-xlg" >
 <?php if (is_page('book-step-1')){ ?>

  <div class="flex justify-center width-75 ">
      <div class="width-25 grey-bkg border-top-left-radius border-bottom-left-radius height-25px grey-border"> </div>
      <div class="width-25 drk-grey-bkg height-25px grey-border"> </div>
      <div class="width-25 drk-grey-bkg border-top-right-radius border-bottom-right-radius height-25px grey-border"> </div>
</div>


  <?php } ?>

  <?php if (is_page('book-step-2')){ ?>
  <div class="flex justify-center width-75 ">
       <div class="width-25 yellow-bkg border-top-left-radius border-bottom-left-radius height-25px grey-border"> </div>
       <div class="width-25 grey-bkg height-25px grey-border"> </div>
       <div class="width-25 drk-grey-bkg border-top-right-radius border-bottom-right-radius height-25px grey-border"> </div>
 </div>


    <?php } ?>
    <?php if (is_page('book-step-3')){ ?>

        <div class="flex justify-center width-75 ">
         <div class="width-25 yellow-bkg border-top-left-radius border-bottom-left-radius height-25px grey-border"> </div>
         <div class="width-25 yellow-bkg height-25px grey-border"> </div>

         <div class="width-25 grey-bkg border-top-right-radius border-bottom-right-radius height-25px grey-border"> </div>
   </div>

     <?php } ?>
     <?php if (is_page('booking-confirmation')){ ?>
  <div class="flex justify-center width-75 ">

          <div class="width-25 yellow-bkg border-top-left-radius border-bottom-left-radius height-25px grey-border"> </div>
          <div class="width-25 yellow-bkg height-25px grey-border"></div>
          <div class="width-25 yellow-bkg border-top-right-radius border-bottom-right-radius height-25px grey-border"> </div>
</div>

      <?php } ?>

    </div>



<?php get_footer() ?>
