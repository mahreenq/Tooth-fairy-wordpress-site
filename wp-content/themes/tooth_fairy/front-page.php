<?php /* Template Name: FrontPage*/ ?>

<?php
get_header();
?>
<?php
$bannerFront = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
	foreach($bannerFront[0] as $info) { ?>
		<div style="background: url('<?php echo $info['banner-front']; ?>'); background-size:cover; height:80vh;">
			<h2> <?php echo $info['slogan-front'] ?> </h2>
		</div>
		<?php
    	echo $info['reasons-title'];
    } ?>
<?php
$whyGTA = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
	foreach($whyGTA[0] as $whyTF) { ?>
		<div>
			<img src= "<?php echo $whyTF['icon-front']; ?>">
			<h3><?php echo $whyTF['reason-front'];?></h3>
			<p><?php echo $whyTF['elaborate-front']; ?></p>
		</div>
		<?php
	} ?>
<?php
$frontServices = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
	foreach($frontServices[0] as $services) { ?>
			<div>
				<h3><?php echo $services['customer-front'];?></h3>
				<img src= "<?php echo $services['customer-type-image-front']; ?>">
				<button><?php echo $services['learn-button-front']; ?></button>
			</div>
			<?php
		}?>
<?php
	$dentalTeamHeader = get_post_meta( get_the_ID(), 'team-front');
		print_r($dentalTeamHeader[0]);
?>
<?php
$frontForth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');
	foreach($frontForth[0] as $dentalTeam) { ?>
		<div>
			<img src= "<?php echo $dentalTeam['team-image-front']; ?>">
			<h3><?php echo $dentalTeam['team-name-front'];?></h3>
			<p><?php echo $dentalTeam['team-description-front']; ?></p>
		</div>
	<?php
}?>
<?php
$frontFifth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
		foreach($frontFifth[0] as $dentalPartners) { ?>
			<div>
				<img src= "<?php echo $dentalPartners['affiliations-image-front']; ?>">
			</div>
<?php
	}
?>


<?php while ( have_posts() ) : the_post();
	the_content();
endwhile; ?>
