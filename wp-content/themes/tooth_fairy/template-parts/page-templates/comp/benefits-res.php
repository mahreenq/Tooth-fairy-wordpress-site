<div class="padding-med text-center">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_2'); ?>
    	<h3 class="padding-bottom-med"><?php	print_r($servicesTitle[0]); ?> </h3>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
?>
  <?php  $i=1;
  foreach($serviceRes[0] as $services) {
    $group="d-direction-row";
    $content="d-text-start";
  if($i % 2 === 0){$group ="d-direction-row-reverse"; $content="d-text-end";}  ?>
		<div class="res-wrap padding-bottom-med flex  <?php echo $group ?> ">
      <div class="width-100 padding-med ">
			     <img class=" margin-auto" src= "<?php echo $services['image-res']; ?>">
      </div>
      <div class="margin-auto width-100 <?php echo $content ?>">
			     <h4 class="yellow-font padding-bottom-med"><?php echo $services['title-res'];?></h4>
			        <p class="padding-sm"><?php echo $services['description-1']; ?></p>
              <p class="padding-sm"><?php echo $services['description-2']; ?></p>
              <p class="padding-sm"><?php echo $services['description-3']; ?></p>
              <p class="padding-sm"><?php echo $services['description-4']; ?></p>
		</div>
		</div>
		<?php
	$i+=1;}
  $pricinglink = get_post_meta( get_the_ID(), 'service-prices'); ?>
      <a href="#"><p class="med-blue-font padding-bottom-lg"><?php	print_r($pricinglink[0]); ?> </p></a>
</div>
