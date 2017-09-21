<div class="padding-lg row">
<?php $bannerFront = get_post_meta( get_the_ID(), 'reasons-title');?>
		<h3 class="padding-bottom-med"> <?php print_r($bannerFront[0]); ?> </h3>
		<?php
		$whyGTA = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
			foreach($whyGTA[0] as $whyTF) { ?>
					<div class="flex">
						<div class="icon-home">
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
