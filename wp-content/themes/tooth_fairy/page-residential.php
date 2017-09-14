page-residential.php
<?php /* Template Name: Residential*/ ?>

<h1>
 <?php the_field("service_traits"); ?>
 </h1>

 <?php while ( have_posts() ) : the_post(); ?>

   <?php echo get_field("service_traits"); ?>

   <?php
					$image  = get_post_meta( get_the_ID(), 'image', true );
					$title = get_post_meta( get_the_ID(), 'title', true );
					$desc   = get_post_meta( get_the_ID(), '_yourprefix_url', true );
					echo esc_html( $image );
					echo is_email( $title);
					echo esc_url( $desc );
					?>

 <?php endwhile; // End of the loop. ?>
