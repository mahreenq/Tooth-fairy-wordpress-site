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

	<?php while ( have_posts() ) : the_post(); 
	
	// Array to get the FAQ Fields

	<?php  	$faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group')[0]; 

	// Acessing members of the array

	foreach($faqs as $faq) {
	echo $faq['question'];
	echo $faq['answer'];
	}
		
	?>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_footer(); ?>