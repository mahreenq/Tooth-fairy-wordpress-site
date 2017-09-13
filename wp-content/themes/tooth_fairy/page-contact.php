<?php
get_header(); ?>

<?php the_post_thumbnail();
echo get_field("phone_number");
echo get_field("email");
echo get_field("contact_name");
while ( have_posts() ) : the_post();
  the_content();
endwhile; // End of the loop. ?>
