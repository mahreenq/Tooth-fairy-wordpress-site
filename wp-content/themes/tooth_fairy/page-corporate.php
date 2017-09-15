<?php /* Template Name: Corporate*/ ?>
<?php
get_header();
?>
<?php
$bannerCorp = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
 foreach($bannerCorp[0] as $banner) { ?>
   <div style="background: url('<?php echo $banner['image-banner-corp']; ?>'); background-size:cover; height:80vh;">
     <h2> <?php echo $banner['title-banner-corp'] ?> </h2>
      <h2> <?php echo $banner['description-banner-corp'] ?> </h2>
   </div>
   <?php
    } ?>
<?php
  $i = 2;
    while($i < 4) {
      $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_'.$i);
        		print_r($servicesTitle[0]);
      $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);
      foreach($serviceRes[0] as $services) { ?>
    		<div>
    			<img src= "<?php echo $services['image-corp']; ?>">
    			<h3><?php echo $services['description-1'];?></h3>
    			<p><?php echo $services['description-2']; ?></p>
          <p><?php echo $services['description-3']; ?></p>
          <p><?php echo $services['description-4']; ?></p>
    		</div>
    		<?php
    	}
      $i++;
    }?>
  <?php  ?>
<?php
    $bookCorp = get_post_meta( get_the_ID(), 'scheduleAppCorp');?>
          <button> <?php echo $bookCorp[0]?> </button>
