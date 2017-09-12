<?php
get_header(); ?>

<?php the_post_thumbnail(); ?>

<?php echo get_field("phone_number");?>
<?php echo get_field("email");?>
<?php echo get_field("contact_name");?>

<?php while ( have_posts() ) : the_post(); ?>

       		<?php the_content();  ?>

      	<?php endwhile; // End of the loop. ?>
