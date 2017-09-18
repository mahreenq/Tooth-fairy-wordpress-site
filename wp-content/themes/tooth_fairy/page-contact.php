<?php /* Template Name: Contact*/ ?>
<?php
get_header();


while ( have_posts() ) : the_post(); ?>
<div class="contact-padding">
<?php the_post_thumbnail(); ?>

<?php
$text = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($text[0]) > 0){
foreach($text[0] as $info) { ?>
  <div class="flex direction-column">
    <h2 class="padding-bottom-sm"> <?php echo $info['dentist-name']; ?> </h2>
  <div class="flex align-items-center">
    <div class="width-25">
      <img src= "<?php echo $info['phone-icon-contact'];?>">
    </div>
    <h4 class="padding-left-sm"> <?php echo $info['contact-phone-number']; ?> </h4>
  </div>
  <div class="flex align-items-center">
    <div class="width-25">
      <img  src= "<?php echo $info['email-icon-contact']; ?>">
    </div>
    <h4 class="padding-left-sm"> <?php echo $info['contact-email']; ?> </h4>
  </div>
</div>
</div>
  <?php  }
  }
?>

<div class="lg-blue-bkg flex direction-column align-items-center">
  <?php
      $title = get_post_meta( get_the_ID(), 'formTitle');?>
        <h2 class="padding-lg text-center"> <?php echo $title[0]?> </h2>
 <?php the_content(); ?>
 </div>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
