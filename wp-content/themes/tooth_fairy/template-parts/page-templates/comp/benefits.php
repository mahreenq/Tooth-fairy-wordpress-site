<?php if (is_page('residential')) { ?>

  <div class="padding-med flex text-center direction-column">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_2'); ?>
    	<h3><?php	print_r($servicesTitle[0]); ?> </h3>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
  foreach($serviceRes[0] as $services) { ?>
		<div>
			<img class="width-10 margin-auto" src= "<?php echo $services['image-res']; ?>">
			<h4 class="yellow-font"><?php echo $services['title-res'];?></h4>
		<div class="width-50 margin-auto">
			<p><?php echo $services['description-1']; ?></p>
      <p><?php echo $services['description-2']; ?></p>
      <p><?php echo $services['description-3']; ?></p>
			<?php $pricinglink = get_post_meta( get_the_ID(), 'service-prices'); ?>
					<a href="#"><p class="med-blue-font"><?php	print_r($pricinglink[0]); ?> </p></a>
		</div>
		</div>
		<?php
	} ?>
</div>
<?php } else { ?>
  <div class="padding-med flex text-center direction-column">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_2'); ?>
    	<h3><?php	print_r($servicesTitle[0]); ?> </h3>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
  foreach($serviceRes[0] as $services) { ?>
		<div>
			<img class="width-10 margin-auto" src= "<?php echo $services['image-res']; ?>">
			<h4 class="yellow-font"><?php echo $services['title-res'];?></h4>
		<div class="width-50 margin-auto">
			<p><?php echo $services['description-1']; ?></p>
      <p><?php echo $services['description-2']; ?></p>
      <p><?php echo $services['description-3']; ?></p>
			<?php $pricinglink = get_post_meta( get_the_ID(), 'service-prices'); ?>
					<a href="#"><p class="med-blue-font"><?php	print_r($pricinglink[0]); ?> </p></a>
		</div>
		</div>
		<?php
	} } ?>
</div>
