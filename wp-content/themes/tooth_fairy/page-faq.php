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
  	echo sizeof($faqs);
  	
	// Acessing members of the array

    if(sizeof($faqs[0]) > 0){

	foreach($faqs[0] as $faq) {  
	?>  
	 <div>
	
    <!-- Wraps members of array in elements   -->
	 <h2><?php echo $faq['title'];?></h2>
	 <b><?php  echo $faq['question'];?></b>
     <p><?php  echo $faq['answer'];?></p>
	   
	  </div>
      <?php }}
      else {
            echo "no content";  }?>
  

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_footer(); ?> 

	<?php 
/*
function checksomething($arr){
	if (sizeof($arr[0]) > 0) {
		

		# code...
	}
	} 

checksomething($faqs);
checksomething($questions);
checksomething($myarrayname) 	?>
