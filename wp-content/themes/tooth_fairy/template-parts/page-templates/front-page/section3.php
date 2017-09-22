<div class="padding-lg row">
	<?php $dentalTeamHeader = get_post_meta( get_the_ID(), 'team-front'); ?>
		<h4>
			<?php echo($dentalTeamHeader[0]);?>
		</h4>
	<?php $frontForth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');
		foreach($frontForth[0] as $dentalTeam) { ?>
				<div class="flex direction-column">
					<h4 class="lg-blue-font"><?php echo $dentalTeam['team-name-front'];?></h4>
					<img class="align-self-center padding-med d-width-25" src= "<?php echo $dentalTeam['team-image-front']; ?>">
					<p><?php echo $dentalTeam['team-description']; ?></p>
				</div>
		<?php } ?>
				<div class="flex justify-around">
					<?php $frontFifth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
						foreach($frontFifth[0] as $dentalPartners) { ?>
								<div class="d-width-15">
									<img src= "<?php echo $dentalPartners['affiliations-image-front']; ?>">
								</div>
						<?php } ?>
				</div>
</div>
