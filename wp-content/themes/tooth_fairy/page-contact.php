<?php /* Template Name: Contact*/ ?>
<?php
get_header();


while ( have_posts() ) : the_post(); ?>
<div class="padding-lg">
<?php the_post_thumbnail(); ?>
</div>
<?php
$text = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($text[0]) > 0){
foreach($text[0] as $info) { ?>
  <div class="flex direction-column align-items-center">
    <h2> <?php echo $info['dentist-name']; ?> </h2>
  <div class="flex">
    <div class="width-25">
      <img  src= "<?php echo $info['phone-icon-contact'];?>">
    </div>
    <h4> <?php echo $info['contact-phone-number']; ?> </h4>
  </div>
  <div class="flex">
    <div class="width-25">
      <img  src= "<?php echo $info['email-icon-contact']; ?>">
    </div>
    <h4> <?php echo $info['contact-email']; ?> </h4>
  </div>
</div>
  <?php  }
  }
?>

<div class="lg-blue-bkg flex direction-column align-items-center">
  <?php
      $title = get_post_meta( get_the_ID(), 'formTitle');?>
        <h2> <?php echo $title[0]?> </h2>
 <?php the_content(); ?>
 </div>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
