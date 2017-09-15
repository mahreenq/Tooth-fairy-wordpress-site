<?php /* Template Name: Contact*/ ?>
<?php
get_header();


while ( have_posts() ) : the_post();
the_post_thumbnail(); ?>
<?php
$text = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');

foreach($text[0] as $info) {
    echo $info['dentist-name'];
    echo "</br>";
    echo $info['contact-phone-number'];
    echo "</br>";
    echo $info['contact-email'];
    }
?>
<?php
 the_content();
endwhile; // End of the loop. ?>
