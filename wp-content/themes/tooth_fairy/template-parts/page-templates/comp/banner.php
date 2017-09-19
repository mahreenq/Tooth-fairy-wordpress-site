
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


<?php
$bannerCorp = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');

if(!empty($bannerCorp[0])){


 foreach($bannerCorp[0] as $banner) { ?>

   <div style="background: url('<?php echo $banner['image-banner-corp']; ?>'); background-size:cover; height:80vh;">

     <h2> <?php echo $banner['title-banner-corp'] ?> </h2>


      <h2> <?php echo $banner['description-banner-corp'] ?> </h2>
   </div>


   <?php

 }
  }?>
