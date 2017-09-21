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
 <?php  	foreach($faqs[0] as $faq => $question) { ?>

    <!-- Wraps members of array in elements   -->
    	 <div >

	 <h4 class="padding-sm show"  data-toggle="answer<?php echo $faq ?>" >
		 <?php

		 			echo $question['question'];
		 ?>
	 </h4>
     <p class="hideservices" id="answer<?php echo $faq ?>">
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
console.log ("hey")

$(".show").on("click",function() {

	var toggle = $(this).data("toggle");
	$("#"+toggle).toggle();

});

   </script>

            <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>
</header>

<div class="menu1">
  <ul>
    <a href="#"><li>Our Services</li></a>
    <a href="#"><li>About</li></a>
    <a href="#"><li>Contact</li></a>
    <a href="#"><li>Blog</li></a>
  </ul>
</div> 

<style type="text/css">
	.collapse{
  cursor: pointer;
  display: block;
  background: #cdf;
}
.collapse + input{
  display: none; /* hide the checkboxes */
}
.collapse + input + div{
  display:none;
}
.collapse + input:checked + div{
  display:block;
}

	
</style>

