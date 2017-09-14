page-appointment-3.php

<?php while ( have_posts() ) : the_post(); ?>


  <h1> <?php echo get_field("form_heading"); ?> </h1>
  <h2> <?php echo get_field("form_step"); ?> </h2>


  <?php the_content(); ?>

<?php endwhile; // End of the loop. ?>
