<div class="padding-right-lg padding-left-lg">
<?php
//================About Pricing===================


    $price = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');

        echo "<div>";
    foreach($price[0] as $main_pricing) {
    	echo "<h1 class='text-center'>".$main_pricing['pricing-title']."</h1>";
        echo "<p class='padding-bottom-lg d-text-center'>".$main_pricing['pricing-info']."</p>";
        }
        echo "</div>";
?>

<?php
//==================Savings=======================
$price_category = get_post_meta( get_the_ID(), 'savings-title');
echo "<h2 class='text-center blue-font m-hide d-show padding-bottom-sm'>".$main_pricing['savings-title']."</h2>";
echo '<div class="padding-bottom-lg">';
echo "<div class='flex direction-row justify-between border-radius white-font med-blue-bkg padding-left-med padding-top-med padding-bottom-med'>";
$price_category = get_post_meta( get_the_ID(), 'category-title-pricing');
    echo "<h4 class='width-40'>".$price_category[0]."</h4>";

$price_category = get_post_meta( get_the_ID(), 'our-price_title-pricing');
    echo "<h4 class='width-25 text-center width-30'>".$price_category[0]."</h4>";

$price_category = get_post_meta( get_the_ID(), 'their-price-title-pricing');
    echo "<h4 class='m-hide d-show text-center width-30'>".$price_category[0]."</h4>";
echo "</div>";

$price_category = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
if(sizeof($price_category[0]) > 0){
    echo "<ul class='price-list lg-blue-bkg padding-left-med'>";
foreach($price_category[0] as $main_pricing_2) {
	echo "<li class='flex direction-row justify-between'>";
	echo "<div class='border-right-blue width-75 padding-top-med padding-bottom-med width-40'>".$main_pricing_2['category-pricing']."</div>";
    echo "<div class='text-center width-25 padding-top-med padding-bottom-med width-30'>".$main_pricing_2['our-price-pricing']."</div>";
    echo "<div class='m-hide d-show padding-top-med padding-bottom-med text-center width-30 border-left-blue'>".$main_pricing_2['their-price-pricing']."</div>";
    echo "</li>";
    }
    echo "</ul>";
}
else{
    echo "no content";
}

echo '</div>';
?>
