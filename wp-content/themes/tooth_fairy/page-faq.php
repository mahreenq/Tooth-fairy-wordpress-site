	<?php /* Template Name: FAQ*/ ?>

	<?php
	/**
	* The template for displaying all single posts.
	*
	* @package RED_Starter_Theme
	*/

	get_header(); ?>

	<div id="primary">
	<div id="content" role="main" data>

	<?php while ( have_posts() ) : the_post(); 
	
	// Array to get the FAQ Fields

  	$faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group'); 
  	
	// Acessing members of the array

    if(sizeof($faqs[0]) > 0){

	foreach($faqs[0] as $faq) {  
	?>  

    <!-- Wraps members of array in elements   -->
    	 <div data-collapse>

	 <h4><?php  echo $faq['question'];?></h4>
     <p><?php  echo $faq['answer'];?></p>
	   </div>
	  </div>
      <?php }}
      else {
            echo "no content";  }?>
  

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_footer(); ?> 

    <?php 
     wp_enqueue_script( 'faq', get_template_directory_uri() . '/build/js/faq.js', array(), true );

     ?>



    <script type="text/javascript">
    	
    	   jQuery(document).ready(function() {
    		if (jQuery(window).width() < 480){
    			var jqc = document.createElement('script');
             jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
              document.getElementsByTagName('head')[0].appendChild(jqc);




    		}
    	});
    </script>

	
