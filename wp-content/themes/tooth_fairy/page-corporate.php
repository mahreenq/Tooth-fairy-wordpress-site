<?php /* Template Name: Corporate*/ ?>
<?php
get_header();
?>
<?php
$bannerCorp = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
if(sizeof($bannerCorp[0]) > 0){
 foreach($bannerCorp[0] as $banner) { ?>
   <div style="background: url('<?php echo $banner['image-banner-corp']; ?>'); background-size:cover; height:80vh;">
     <h2> <?php echo $banner['title-banner-corp'] ?> </h2>
      <h2> <?php echo $banner['description-banner-corp'] ?> </h2>
   </div>
   <?php
 } }?>
<?php
  $i = 2;
    while($i < 4) {
      if ($i===2) {
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
    		<?php }} else if ($i===3) { ?>

            <div class ="lg-blue-bkg">

      <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_'.$i); ?>
          <h3> <?php	print_r($servicesTitle[0]); ?> </h3>
       <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);

      foreach($serviceRes[0] as $services) { ?>

          <img src= "<?php echo $services['image-corp']; ?>">
          <div data-collapse>
              <div>
               <h4 class="showdesc black-font"><?php echo $services['description-1'];?> <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
             </div>

             <div class="hidedesc">
                  <p ><?php echo $services['description-2']; ?></p>
                  <p ><?php echo $services['description-3']; ?></p>
                  <p ><?php echo $services['description-4']; ?></p>
            </div>

          </div>


      <?php  } ?>



  <?php    }
      $i++;
    }?>

<?php
    $bookCorp = get_post_meta( get_the_ID(), 'scheduleAppCorp');?>
          <button> <?php echo $bookCorp[0]?> </button>
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
