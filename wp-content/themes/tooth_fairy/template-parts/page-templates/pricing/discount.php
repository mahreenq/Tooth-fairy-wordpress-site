<?php
// ====================Discounts========================
echo '<div class="padding-bottom-lg">';
$main_pricing_6 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_6');
foreach($main_pricing_6[0] as $main_pricing_6) {
	echo "<h2 class='text-center blue-font padding-bottom-sm'>".$main_pricing_6['discounts-title-pricing']."</h2>";
    echo "<div class='flex direction-row'>";
    echo "<div class='m-hide d-show padding-right-lg'><img src=".$main_pricing_6['discounts-image-pricing']."></div>";
    echo "<p class='padding-bottom-med'>".$main_pricing_6['discounts-main-pricing']."</p>";
    echo "</div>";
    }

echo '</div>';
echo '</div>';
?>
