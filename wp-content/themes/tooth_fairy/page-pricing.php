<?php /* Template Name: Pricing*/ ?>


<?php
get_header();

// About Pricing

$price = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
echo "<div>";
foreach($price[0] as $main_pricing) {
	echo "<h1>";
    echo $main_pricing['pricing-title'];
    echo "</h1>";
    echo "<p>";
    echo $main_pricing['pricing-info'];
    echo "</p>";
    echo "<h2>";
    echo $main_pricing['savings-title'];
    echo "</h2>";
    }
echo "</div>";
?>



<?php
// Savings

$price_category = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');

foreach($price_category[0] as $main_pricing_2) {
	echo "<li>";
	echo "<div>";
    echo $main_pricing_2['category-pricing'];
    echo "</div>";
    echo "<div>";
    echo $main_pricing_2['our-price-pricing'];
  	echo "</div>";
    echo "<div>";
    echo $main_pricing_2['their-price-pricing'];
    echo "</div>";
    echo "</li>";
    }
    echo "</div>";
?>



<?php
// Insurance
$main_pricing_3 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');

foreach($main_pricing_3[0] as $main_pricing_3) {
	echo "<h2>";
    echo $main_pricing_3['insurance-title-pricing'];
    echo "</h2>";
    echo "<p>";
    echo $main_pricing_3['insurance-info-pricing'];
    echo "</p>";
    echo "<p>";
    echo $main_pricing_3['search-bar-message-pricing'];
    echo "</p>";
    }
?>



<?php
// Payment
$main_pricing_4 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');

foreach($main_pricing_4[0] as $main_pricing_4) {
	echo "<h2>";
    echo $main_pricing_4['payment-methods-pricing'];
    echo "</h2>";
    echo "</br>";
    echo $main_pricing_4['payments-not-pricing'];
    echo "</br>";
    echo $main_pricing_4['payments-pricing'];
    }
?>



<?php
// Payment Card Images
$main_pricing_5 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
echo "<div>";
foreach($main_pricing_5[0] as $main_pricing_5) {
	echo "<div>";
    echo "<img src=".$main_pricing_5['payments-cards-pricing'].">";
    echo "</div>";
 	}
echo "</div>";
?>



<?php
// Discounts
$main_pricing_6 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_6');

foreach($main_pricing_6[0] as $main_pricing_6) {
	echo '</br>';
	echo "<h3>";
    echo $main_pricing_6['discounts-title-pricing'];
    echo "</h3>";
    echo "</br>";
    echo $main_pricing_6['discounts-main-pricing'];
    echo "</br>";
    echo $main_pricing_6['discounts-image-pricing'];
    }
?>

<?php get_footer() ?>