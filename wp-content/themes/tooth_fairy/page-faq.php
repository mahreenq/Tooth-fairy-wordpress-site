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

  	$faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group'); 
  	
	// Acessing members of the array

    if(sizeof($faqs[0]) > 0){

	foreach($faqs[0] as $faq) {  
	?>  
	 <div>
	
    <!-- Wraps members of array in elements   -->
	 <h2><?php echo $faq['title'];?></h2>
	 <h4><?php  echo $faq['question'];?></h4>
     <p><?php  echo $faq['answer'];?></p>
	   
	  </div>
      <?php }}
      else {
            echo "no content";  }?>
  

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_footer(); ?> 

	
