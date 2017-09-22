<div class="lg-blue-bkg">
		<div class="row flex home-padding">
			<?php
			$frontServices = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
					$i =1;
					foreach($frontServices[0] as $services) {
							$icon_color = "med-blue-bkg";
							if ($i === 1){$icon_color = "yellow-bkg"; $i+=1;}?>
								<div class="flex direction-column width-50 align-items-center">
									<h4><?php echo $services['customer-front'];?></h4>
									<img class="width-50" src= "<?php echo $services['customer-type-image-front']; ?>">
									<button class=" white-font <?php echo $icon_color?>"><?php echo $services['learn-button-front']; ?></button>
								</div>
					<?php }?>
		</div>
</div>
