<?php /* Template Name: FrontPage*/ ?>

<?php
get_header();
?>
<?php
$bannerFront = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
	foreach($bannerFront[0] as $info) { ?>
		<div class="relative">
			<div class="home-banner " style="background: url('<?php echo $info['banner-front']; ?>'); background-size:cover;">
			</div>
			<h2 class="blue-font zero-bottom padding-med absolute d-white-font "> <?php echo $info['slogan-front'] ?> </h2>
		</div>
<div class="padding-med">
		<h3 class="padding-bottom-med"> <?php
    	echo $info['reasons-title']; ?> </h3>
    <?php } ?>
		<?php
		$whyGTA = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
			foreach($whyGTA[0] as $whyTF) { ?>
					<div class="flex">
						<div class="width-10">
							<img src= "<?php echo $whyTF['icon-front']; ?>">
						</div>
					<div class="direction-column padding-left-med">
							<h3 class="lg-blue-font"><?php echo $whyTF['reason-front'];?></h3>
							<p><?php echo $whyTF['elaborate-front']; ?></p>
						</div>
					</div>
		<?php
		} ?>
</div>
<div class="lg-blue-bkg flex">
	<?php
	$frontServices = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
			foreach($frontServices[0] as $services) { ?>
				<div class="direction-column">
					<h3 class="text-center"><?php echo $services['customer-front'];?></h3>
					<img src= "<?php echo $services['customer-type-image-front']; ?>">
					<button><?php echo $services['learn-button-front']; ?></button>
				</div>
				<?php
			}?>
</div>
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
<?php get_footer(); ?>
