<?php
//==================Insurance=====================
$main_pricing_3 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
    if(sizeof($main_pricing_3[0]) > 0){
        echo "<div class='padding-top-lg'>";
    foreach($main_pricing_3[0] as $main_pricing_3) {
    	echo "<h2 class='text-center blue-font padding-bottom-sm'>".
        $main_pricing_3['insurance-title-pricing']."</h2>";
        echo "<p class='padding-bottom-med d-text-center'>".$main_pricing_3['insurance-info-pricing']."</p>";
        echo "<p class='d-text-center'><strong>".$main_pricing_3['search-bar-message-pricing']."</p></strong>";
    }
        echo "</div>";
}
else{
    echo "no content";
}
?>