<?php /* Template Name: Pricing*/ ?>

<?php
get_header();

// About Pricing ===================================
    $price = get_post_meta( get_the_ID(), 'wiki_test_repeat_group');
    if(sizeof($price[0]) > 0){
        echo "<div>";
    foreach($price[0] as $main_pricing) {
    	echo "<h1 class='text-center'>";
        echo $main_pricing['pricing-title'];
        echo "</h1>";
        echo "<p>";
        echo $main_pricing['pricing-info'];
        echo "</p>";
        echo "<h2 class='text-center blue-font m-hide d-show'>";
        echo $main_pricing['savings-title'];
        echo "</h2>";
        }
        echo "</div>";
}
else{
    echo "no content";
}
?>



<?php
// Savings =========================================
echo "<div class='flex direction-row justify-between border-radius white-font med-blue-bkg padding-left-med padding-top-med padding-bottom-med'>";
$price_category = get_post_meta( get_the_ID(), 'category-title-pricing');
    echo "<h4>";
    echo $price_category[0];
    echo "</h4>";

$price_category = get_post_meta( get_the_ID(), 'our-price_title-pricing');
    echo "<h4 class='width-25 text-center'>";
    echo $price_category[0];
    echo "</h4>";

$price_category = get_post_meta( get_the_ID(), 'their-price-title-pricing');
    echo "<h4 class='m-hide d-show'>";
    echo $price_category[0];
    echo "</h4>";
echo "</div>";

$price_category = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
if(sizeof($price_category[0]) > 0){
    echo "<ul class='price-list lg-blue-bkg padding-left-med'>";
foreach($price_category[0] as $main_pricing_2) {
	echo "<li class='flex direction-row justify-between margin-top-med margin-bottom-med'>";
	echo "<div class='border-right-blue width-75'>";
    echo $main_pricing_2['category-pricing'];
    echo "</div>";
    echo "<div class='text-center width-25'>";
    echo $main_pricing_2['our-price-pricing'];
  	echo "</div>";
    echo "<div m-hide d-show>";
    echo $main_pricing_2['their-price-pricing'];
    echo "</div>";
    echo "</li>";
    }
    echo "</ul>";
}
else{
    echo "no content";
}
?>



<?php
// Insurance ====================================
$main_pricing_3 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
    if(sizeof($main_pricing_3[0]) > 0){
        echo "<div class='padding-top-lg'>";
    foreach($main_pricing_3[0] as $main_pricing_3) {
    	echo "<h2 class='text-center blue-font'>".
        $main_pricing_3['insurance-title-pricing']."</h2>";
        echo "<p class='padding-top-med'>".$main_pricing_3['insurance-info-pricing']."</p>";
        echo "<p><strong>".$main_pricing_3['search-bar-message-pricing']."</p></strong>";
    }
        echo "</div>";
}
else{
    echo "no content";
}
?>

<?php
//search bar ==========================================

$auto = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_search');
$providers = "";
$i = 0;
foreach ($auto[0] as $a) {
    $providers .= ($i === 0 ?'"' : ',"').$a['provider'].'"';
    $i++; 
}
?>

<div class="ui-widget flex justify-center direction-column padding-left-med">
    <div>
      <label for="tags"></label>
      <input id="tags" class="width-75 border-blue">
      <input type="submit" name="search" id="search_button">
    </div>
  <p id="result"></p>
</div>

  <script>
    var providers = <?php echo "[".$providers."]"; ?>;
    console.log(providers);
    $( "#tags" ).autocomplete({
      source: [<?php echo $providers;?>]
    });

    var search_button = document.getElementById('search_button'); 

    search_button.addEventListener("click", checkValue);

    function checkValue(){
        var input = document.getElementById('tags').value;
        console.log(input);
        if (input == '') {
            document.getElementById("result").innerHTML = "<p class='red-font'>Please specify your provider.</p>"
        }
        else if (providers.indexOf(input) > -1) {
            document.getElementById("result").innerHTML = "<p class='green-font'>We accept plans from" + " " +input + ".</p>";
        }
        else{
            document.getElementById("result").innerHTML = "<p class='red-font'>We do not accept plans from" + " " +input + ".</p>";
        }
    }

  </script>


<?php
// Payment ================================================
$main_pricing_4 = get_post_meta( get_the_ID(), 'payment-methods-pricing');
    echo "<h2 class='text-center blue-font padding-bottom-med'>";
    echo $main_pricing_4[0];
    echo "</h2>";

$main_pricing_4 = get_post_meta( get_the_ID(), 'payments-not-pricing');
    echo "<div class='padding-bottom-med'>";
    echo $main_pricing_4[0];
    echo "</div>";

$main_pricing_4 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');
if(sizeof($main_pricing_4[0]) > 0){
    foreach($main_pricing_4[0] as $main_pricing_4) {
        echo $main_pricing_4['payments-type-pricing'];
        echo "</br>";
    }
}
else{
    echo "no content";
}
?>



<?php
// Payment Card Images =============================
$main_pricing_5 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
if(sizeof($main_pricing_5[0]) > 0){
        echo "<div class='flex direction-row justify-center'>";
        foreach($main_pricing_5[0] as $main_pricing_5) {
        	echo "<div class='width-10'>";
            echo "<img src=".$main_pricing_5['payments-cards-pricing'].">";
            echo "</div>";
         	}
        echo "</div>";
}
else{
    echo "no content";
}

?>



<?php
// Discounts ====================================
$main_pricing_6 = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_6');
if(sizeof($main_pricing_6[0]) > 0){
foreach($main_pricing_6[0] as $main_pricing_6) {
	echo '</br>';
	echo "<h2 class='text-center blue-font'>";
    echo $main_pricing_6['discounts-title-pricing'];
    echo "</h2>";
    echo "</br>";
    echo $main_pricing_6['discounts-main-pricing'];
    // echo "</br>";
    // echo "<img src=".$main_pricing_6['discounts-image-pricing'].">";
    }
}
else{
    echo "no content";
}
?>

<?php get_footer() ?>