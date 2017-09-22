<?php
// =====================Payment===========================
$main_pricing_4 = get_post_meta( get_the_ID(), 'payment-methods-pricing');
    echo "<h2 class='text-center blue-font padding-bottom-sm'>".$main_pricing_4[0]."</h2>";
echo '<div class="padding-bottom-lg">';
echo '<div class="flex direction-column d-direction-row justify-between align-items-center">';
echo '<div>';
$main_pricing_4 = get_post_meta( get_the_ID(), 'payments-not-pricing');
    echo "<div class='padding-bottom-med'>".$main_pricing_4[0]."</div>";
$main_pricing_4 = get_post_meta( get_the_ID(), 'payments-pricing');
    echo "<div>".$main_pricing_4[0]."</div>";
$main_pricing_4 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');
    foreach($main_pricing_4[0] as $main_pricing_4) {
        echo $main_pricing_4['payments-type-pricing'];
        echo "</br>";
    }

echo '</div>';
?>

<?php
// ====================Payment Card Images=======================
echo '<div class="width-50 flex justify-end">';
$main_pricing_5 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
        echo "<div class='flex direction-row padding-bottom-med d-width-75'>";
        foreach($main_pricing_5[0] as $main_pricing_5) {
        	echo "<div><img src=".$main_pricing_5['payments-cards-pricing']."></div>";
         	}
        echo "</div>";

echo '</div>';
echo '</div>'
?>
