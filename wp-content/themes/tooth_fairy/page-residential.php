<?php /* Template Name: Residential*/ ?>
<?php
get_header();
?>
<?php
$bannerRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($bannerRes[0]) > 0){
	foreach($bannerRes[0] as $banner) { ?>
		<div class="relative">
		<div class="res-banner " style="background: url('<?php echo $banner['image-banner-res']; ?>'); background-size:cover;">
			<h2 class="white-font text-center"> <?php echo $banner['title-banner-res'] ?> </h2>
		</div>
		<h2 class="grey-font zero-bottom home-padding absolute "> <?php echo $banner['description-banner-res'] ?></h2>
		</div>
		<?php
	}} ?>

<?php
$i = 2;
while($i < 4) {
	if($i === 2){ ?>
	<div class="padding-med flex text-center direction-column">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_'.$i); ?>
    	<h3><?php	print_r($servicesTitle[0]); ?> </h3>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);
  foreach($serviceRes[0] as $services) { ?>
		<div>
			<img class="width-10 margin-auto" src= "<?php echo $services['image-res']; ?>">
			<h4 class="yellow-font"><?php echo $services['title-res'];?></h4>
		<div class="width-50 margin-auto">
			<p><?php echo $services['description-1']; ?></p>
      <p><?php echo $services['description-2']; ?></p>
      <p><?php echo $services['description-3']; ?></p>
		</div>
		</div>
		<?php
	} ?>
</div>
<?php }elseif ($i === 3){?>
	<div class="padding-lg lg-yellow-bkg flex text-center direction-column">
	<?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_'.$i); ?>
			<h3 class="margin-auto"><?php	print_r($servicesTitle[0]); ?> </h3>
	<?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);
	foreach($serviceRes[0] as $services) { ?>
		<div class="flex align-items-center">
			<div class="width-25">
				<img src= "<?php echo $services['image-res']; ?>">
			</div>
			<div data-collapse>
				<div class="flex">
			<h4 class="padding-left-med black-font"><?php echo $services['title-res'];?>
			<i class="fa fa-angle-down padding-left-sm" aria-hidden="true"></i>
		</h4>
		</div>
		<div class="direction-column" >
			<p><?php echo $services['description-1']; ?></p>
			<p><?php echo $services['description-2']; ?></p>
			<p><?php echo $services['description-3']; ?></p>
		</div>
	</div>
</div>
		<?php
	} ?>

<?php }
$i++;} ?>
<?php
    $bookRes = get_post_meta( get_the_ID(), 'scheduleApp');?>
          <button class="white-font yellow-bkg"> <?php echo $bookRes[0]?> </button>
<?php
    $bookCorp = get_post_meta( get_the_ID(), 'corpApp');?>
    <p> <?php echo $bookCorp[0]?></p>
</div>
<?php get_footer(); ?>


<script type="text/javascript">

          jQuery(document).ready(function() {
           if (jQuery(window).width() < 480){
               var jqc = document.createElement('script');
            jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
             document.getElementsByTagName('head')[0].appendChild(jqc);

           }
       });
   </script>
