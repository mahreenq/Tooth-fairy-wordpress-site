console.log('hi');
jQuery(document).ready(function($){

$(".show").on("click",function() {
	var toggle = $(this).data("toggle");
	$("#"+toggle).toggle();

});
});