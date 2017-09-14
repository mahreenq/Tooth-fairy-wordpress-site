gggfront-page.php

<?php /* Template Name: FrontPage*/ ?>

<?php

get_header();

get_banner();
echo get_the_ID();
?>

<h2>
<?php echo get_field("me");?>
</h2>

<h2>
<?php echo get_field("why");?>
</h2>

<?php while ( have_posts() ) : the_post();
	the_content();
endwhile; ?>