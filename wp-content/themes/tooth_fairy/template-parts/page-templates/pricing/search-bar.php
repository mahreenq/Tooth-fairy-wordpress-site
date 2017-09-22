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
      <input id="tags" class="width-100 d-width-25rem border-blue padding-sm" style="background-image: url('<?php echo get_template_directory_uri().'/assets/search.png'?>'); background-size: 2rem; background-repeat: no-repeat; background-position: 98%;">
    </div>
  <div id="result"><p id="accept" class="green-font"></p></div>
</div>


<!-- REMOVE THIS AND MOVE TO JS FILE -->


  <script>

jQuery(document).ready(function($){
    var providers = <?php echo "[".$providers."]"; ?>;
    $( "#tags" ).autocomplete({
      source: providers,

    });

    $(document).ready(function () {
        $(".ui-autocomplete").on("click",function (e){
            var inputVal = $("#tags").val()
            $("#accept").html("We accept plans from" + " " + inputVal + ".");
        });
    })
})
  </script>
  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="YourJquery source path"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
