<?php /* Template Name: Corporatebooking*/ ?>
<?php
get_header(); ?>
<?php
while ( have_posts() ) : the_post();
the_post_thumbnail(); ?>
<?php
$text  = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
echo "</br>";
print_r($text[0][0]['title']);
echo "</br>";
print_r($text[0][0]['description']);
?>
<?php
 the_content();
endwhile; // End of the loop. ?>
