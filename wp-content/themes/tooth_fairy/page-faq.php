<?php /* Template Name: FAQ*/ ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); 
               ?>
                 <div>
                 <?php  	$questions = get_post_meta(get_the_ID(), 'wiki_test_repeat_group')[0]; ?>
                 </div>
                    
                  <?php  
				
					$answers = get_post_meta(get_the_ID(), 'wiki_test_repeat_group'[0];) 

					foreach ($questions as $question) {
						var_dump($question);
						echo $question['question'];
					}
					?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>