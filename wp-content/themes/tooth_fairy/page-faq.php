	<?php /* Template Name: FAQ*/ ?>

	<?php
	/**
	* The template for displaying all single posts.
	*
	* @package RED_Starter_Theme
	*/
      
	get_header(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">




	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Our Services <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

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




    <script type="text/javascript">
    	
    	   jQuery(document).ready(function() {
    		if (jQuery(window).width() < 480){
    			var jqc = document.createElement('script');
             jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
              document.getElementsByTagName('head')[0].appendChild(jqc);

    		}
    	});
    </script>
