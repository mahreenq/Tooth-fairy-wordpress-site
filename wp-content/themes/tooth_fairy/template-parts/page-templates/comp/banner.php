
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
    if(sizeof($bannerRes[0]) > 0){
    	foreach($bannerRes[0] as $banner) { ?>
    		<div class="relative">
    		<div class="res-banner " style="background: url('<?php echo $banner['banner-img']; ?>'); background-size:cover;">
    			<h2 class="white-font text-center"> <?php echo $banner['banner-title'] ?> </h2>
    		</div>
    		<h2 class="grey-font zero-bottom home-padding absolute d-white-font"> <?php echo $banner['banner-subtitle'] ?></h2>
    		</div>
    		<?php
    	}} ?>
