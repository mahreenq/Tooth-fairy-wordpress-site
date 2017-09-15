<?php /* Template Name: Book Appointment Form */ ?>
<?php

while ( have_posts() ) : the_post(); ?>

  <h1> LALALALA </h1>


  <h1> <?php echo get_field("form_heading"); ?> </h1>
  <h2> <?php echo get_field("form_step"); ?> </h2>



  <?php the_content(); ?>

<?php endwhile; ?>
