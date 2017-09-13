front-page.php

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

<h3>
<?php echo get_field("reason_1");?>
</h3>

<p>
<?php echo get_field("elaborate_1");?>
</p>

<h3>
<?php echo get_field("reason_2");?>
</h3>

<p>
<?php echo get_field("elaborate_2");?>
</p>

<h3>
<?php echo get_field("reason_3");?>
</h3>

<p>
<?php echo get_field("elaborate_3");?>
</p>

<h2>
<?php echo get_field("dental_hygienist");?>
</h2>

<h3>
<?php echo get_field("name");?>
</h3>

<?php echo get_field("hi")?>

<?php while ( have_posts() ) : the_post();
	the_content();
endwhile; ?>