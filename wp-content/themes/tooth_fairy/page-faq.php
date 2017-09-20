	<?php /* Template Name: FAQ*/ ?>

	<?php
	/**
	* The template for displaying all single posts.
	*
	* @package RED_Starter_Theme
	*/
      
	get_header(); ?>

     <body = padding-lg>
     	
     
	<div id="primary">
	<div id="content padding-lg" role="main" data>

	<?php while ( have_posts() ) : the_post(); 
	
	// Array to get the FAQ Fields

  	$faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group'); 
  	
	// Acessing members of the array

    if(sizeof($faqs[0]) > 0){
    	?>
      <div class="padding-med lg-blue-bkg">
 <?php  	foreach($faqs[0] as $faq) {  
	?>  

    <!-- Wraps members of array in elements   -->
    	 <div data-collapse>
 
	 <h4 class="padding-sm"><?php  echo $faq['question'];?></h4>
     <p><?php  echo $faq['answer'];?></p>
	   
	  </div>
      <?php }}
      else {
            echo "no content";  }?>
  </div>
  </div>
  </body>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary --> 

	<?php get_footer(); ?> 

   
     <script type="text/javascript" src="js/faq.js"></script>
