
<?php

/*
-- template part
-- currently in use for any page that needs a banner
-- (home, res, corp)
-- will check and return a banner if the meta fields are complete
!!! TODO !!!
-- need to check to make sure title exsists to show the rest of the Informatiom
*/
?>
  <?php $bannerRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
    $font_color="grey-font";
    $sub_bkg_color="med-blue-bkg-50";
      if (is_page('home')) {$font_color="blue-font"; $sub_bkg_color="";} ?>
      <?php foreach($bannerRes[0] as $banner) { ?>
    		<div class="relative">
    		   <div class="res-banner flex justify-center align-items-center" style="background: url('<?php echo $banner['banner-img']; ?>'); background-size:cover;">
    			     <h2 class="white-font text-center "> <?php echo $banner['banner-title'] ?> </h2>
    	     </div>
    		       <h2 class="zero-bottom subtitle-padding absolute d-white-font width-100 text-center <?php echo $font_color?> <?php echo $sub_bkg_color ?>">
                 <?php echo $banner['banner-subtitle'] ?>
                </h2>
    		</div>
    		<?php
    	} ?>
