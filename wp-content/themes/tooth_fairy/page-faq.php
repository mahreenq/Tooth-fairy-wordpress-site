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

	<?php while ( have_posts() ) : the_post(); ?>

<h1 class="text-center"> <?php the_title();  ?> </h1>

		<?php


	// Array to get the FAQ Fields

  	$faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group');

	// Acessing members of the array

    if(sizeof($faqs[0]) > 0){
    	?>
      <div class="padding-med lg-blue-bkg">
 <?php  	foreach($faqs[0] as $faq => $question) { ?>

    <!-- Wraps members of array in elements   -->
    	 <div class="padding-lg" >

	 <h4 class="padding-sm show"  data-toggle="answer<?php echo $faq ?>" >
		 <?php echo $question['question']; ?>
	 <i class="fa fa-angle-down d-hide" aria-hidden="true"></i>
  </h4>
     <p class="hideservices padding-left-lg hideservices " id="answer<?php echo $faq ?>">
			 <?php  echo $question['answer'];?>
		 </p>

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

<script type="text/javascript">


jQuery(document).ready(function($){

$(".show").on("click",function() {
	var toggle = $(this).data("toggle");
	$("#"+toggle).toggle();

});
});

   </script>
