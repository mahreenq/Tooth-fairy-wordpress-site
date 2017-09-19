<?php /* Template Name: Corporatebooking*/ ?>
<?php
get_header(); ?>
<?php
while ( have_posts() ) : the_post(); ?>


<div class="lg-blue-bkg">
<?php
$text  = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($text[0]) > 0){
echo "</br>"; ?>
<h1 class="lg-blue-font text-center  padding-sm">
<?php print_r($text[0][0]['title']);
echo "</br>"; ?>
</h1>
<h2 class="grey-font text-center padding-med">
<?php
print_r($text[0][0]['description']);
}?>
</h2>
<div class="padding-med">
<?php
 the_content();
endwhile; // End of the loop. ?>
</div>
</div>
<?php get_footer(); ?>
