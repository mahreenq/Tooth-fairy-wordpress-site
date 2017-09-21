<?php $background_color = "lg-blue-bkg"; ?>
<?php $button_color ="med-blue-bkg"; ?>
<?php if (is_page('residential')) {$background_color = "lg-yellow-bkg"; $button_color="yellow-bkg";} ?>

	<div class="padding-lg flex direction-column  <?php echo $background_color?>">



	<?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_3'); ?>
			<h3 class="margin-auto text-center padding-bottom-lg"> <?php	print_r($servicesTitle[0]); ?> </h3>


	<?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3'.$i);
	foreach($serviceRes[0] as $key => $services) { ?>


<div class="flex">
<div><img src= "<?php echo $services['image-res']; ?>"></div>

		<div  class="flex direction-column">
		 <div class="flex">

			<div><h4 class="padding-left-med black-font show" data-toggle="service<?php echo $key ?>"><?php echo $services['title-res'];?>
			<i class="fa fa-angle-down padding-left-sm d-hide" aria-hidden="true"></i>
    </h4>
      </div>

		</div>

		<div class="text-left padding-lg hideservices" id="service<?php echo $key ?>" >

			<p><?php echo $services['description-1']; ?></p>
			<p><?php echo $services['description-2']; ?></p>
			<p><?php echo $services['description-3']; ?></p>

		</div>
	</div>
</div>

	<?php } ?>
<?php
    $bookRes = get_post_meta( get_the_ID(), 'scheduleApp');?>
    <button class="white-font  align-self-center justify-center  <?php echo $button_color ?>"> <?php echo $bookRes[0]?> </button>
<?php
    $bookCorp = get_post_meta( get_the_ID(), 'corpApp');?>
    <p> <?php echo $bookCorp[0]?></p>

</div>



<script type="text/javascript">

$(".show").on("click",function() {

	var toggle = $(this).data("toggle");
	$("#"+toggle).toggle();

});

   </script>
