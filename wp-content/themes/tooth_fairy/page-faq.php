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

 
     <style type="text/css">
   h4.open:after {
    content: "\f106";
    font-family: FontAwesome;
}


@media all and (max-width: 1000px) and (min-width: 500px) {
  h4:after{
     content: "\f107";
    font-family: FontAwesome;
  }
}



.active {
	lkjalsdkfjla {

	}
	.nav {

	}
}

/*
	body{
  font-family: 'Noto Sans', sans-serif;
	margin:0;
	width:100%;
	height:100vh;
  	background:#ffffff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
header{
	width:100%; 
	background:#ffffff; 
	height:60px; 
	line-height:60px;
	border-bottom:1px solid #dddddd;
}
.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:100%; background:white;   text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#666;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

.glyphicon-home{
  color:white; 
  font-size:1.5em; 
  margin-top:5px; 
  margin:0 auto;
}
header{display:inline-block; font-size:12px;}
span{padding-left:20px;}
a{color:#336699;}


</style>
