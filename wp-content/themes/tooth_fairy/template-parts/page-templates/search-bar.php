<?php
//=================search bar=========================

$auto = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_search');
$providers = "";
$i = 0;
foreach ($auto[0] as $a) {
    $providers .= ($i === 0 ?'"' : ',"').$a['provider'].'"';
    $i++; 
}
?>

<div class="ui-widget flex direction-column padding-bottom-xlg text-center">
    <div class="flex direction-row justify-center padding-md">
      <input id="tags" class="width-100 d-width-25rem border-blue padding-sm" style="background-image: url('http://localhost:8888/tooth_fairy/wp-content/themes/tooth_fairy/assets/search.svg'); background-size: 2rem; background-repeat: no-repeat; background-position: 98%;">
    </div>
  <div id="result"><p id="accept" class="green-font"></p></div>
</div>

  <script>
    var providers = <?php echo "[".$providers."]"; ?>;
    $( "#tags" ).autocomplete({
      source: providers,
      
    });

    $(document).ready(function () {
      console.log(1);
        $(".ui-autocomplete").on("click",function (e){
            var inputVal = $("#tags").val()
            $("#accept").html("We accept plans from" + " " + inputVal + ".");
        })
    })

  </script>