<div class="lg-blue-bkg">
		<div class="row flex home-padding">
			<?php
			$frontServices = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
					$i =1;
					$a = '<a href>';
					foreach($frontServices[0] as $services) {
							$icon_color = "med-blue-bkg";
							$button_link =' href="'.get_site_url().'?page_id=115"';

							if ($i === 1){$icon_color = "yellow-bkg";
							$button_link = 'href='.get_site_url().'?page_id=73'; $i+=1;}?>
								<div class="flex direction-column width-50 align-items-center">
									<h4><?php echo $services['customer-front'];?></h4>
									<img class="width-50" src= "<?php echo $services['customer-type-image-front']; ?>">

								<a <?php echo $button_link ?>> <button class=" white-font <?php echo $icon_color?>"><?php echo $services['learn-button-front']; ?></button>
</a>
								</div>
					<?php }?>
		</div>
</div>
