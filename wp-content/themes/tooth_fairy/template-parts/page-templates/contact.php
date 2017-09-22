<div class="flex direction-column d-direction-row ">
  <div class="padding-xlg">
      <div class= "padding-bottom-lg width-100 d-width-75">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php $text = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');

      foreach($text[0] as $info) { ?>
      <div class="flex direction-column">
        <h3 class="padding-bottom-lg"> <?php echo $info['dentist-name']; ?> </h3>
        <div class="flex align-items-center padding-bottom-lg">
            <img src= "<?php echo $info['phone-icon-contact'];?>">
            <h5 class="padding-left-sm"> <?php echo $info['contact-phone-number']; ?> </h5>
        </div>
        <div class="flex align-items-center">
            <img  src= "<?php echo $info['email-icon-contact']; ?>">
            <h5 class="padding-left-sm"> <?php echo $info['contact-email']; ?> </h5>
        </div>
      </div>
  <?php  } ?>
  </div>
  <div class="lg-blue-bkg ">
    <div class="row flex direction-column align-items-center padding-bottom-lg">
      <?php
      $title = get_post_meta( get_the_ID(), 'formTitle');?>
        <h2 class="padding-lg text-center"> <?php echo $title[0]?> </h2>
        <?php the_content(); ?>
    </div>
  </div>
</div>
