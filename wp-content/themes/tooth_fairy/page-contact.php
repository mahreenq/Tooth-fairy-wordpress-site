<?php
/* /* Template Name: Contact*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>
  <div class="flex direction-column d-direction-row">

  <div class="padding-xlg">
    <div class= "padding-bottom-lg width-100 d-width-75">

<?php the_post_thumbnail(); ?>
  </div>
<?php
$text = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');

foreach($text[0] as $info) { ?>
  <div class="flex direction-column">
    <h3 class="padding-bottom-lg"> <?php echo $info['dentist-name']; ?> </h3>
  <div class="flex align-items-center padding-bottom-lg">
      <img src= "<?php echo $info['phone-icon-contact'];?>">
    <h4 class="padding-left-sm"> <?php echo $info['contact-phone-number']; ?> </h4>
  </div>
  <div class="flex align-items-center">
      <img  src= "<?php echo $info['email-icon-contact']; ?>">
    <h4 class="padding-left-sm"> <?php echo $info['contact-email']; ?> </h4>
  </div>
</div>
</div>
  <?php  }
?>

<div class="lg-blue-bkg flex direction-column align-items-center padding-bottom-lg">
  <?php
      $title = get_post_meta( get_the_ID(), 'formTitle');?>
        <h2 class="padding-lg text-center"> <?php echo $title[0]?> </h2>
 <?php the_content(); ?>
 </div>
 </div>
<?php endwhile; // End of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
