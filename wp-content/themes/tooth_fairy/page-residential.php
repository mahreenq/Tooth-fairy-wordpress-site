<?php /* Template Name: Residential*/ ?>


 <?php while ( have_posts() ) : the_post(); ?>

   <?php echo get_field("service_traits"); ?>



 <?php endwhile; // End of the loop. ?>
