<?php /* Template Name: Contact*/ ?>
<?php
get_header();
the_post_thumbnail();

while ( have_posts() ) : the_post();
 the_content();
endwhile; // End of the loop. ?>
<?php while ( have_posts() ) : the_post(); ?>
					<?php
					$text  = get_post_meta( get_the_ID(), 'dentist-name', true );
					$phone = get_post_meta( get_the_ID(), 'contact-phone-number', true );
					$email   = get_post_meta( get_the_ID(), 'contact-email', true );
          $blah = get_post_meta(get_the_ID(), 'contact-field');
          var_dump($blah[0]);
          echo "</br>";
          var_dump($text[0]);
          echo "</br>";
					echo 'phone'.( $phone );
          echo "</br>";
					echo 'email'.( $email );
					?>


				<?php endwhile; // end of the loop. ?>
