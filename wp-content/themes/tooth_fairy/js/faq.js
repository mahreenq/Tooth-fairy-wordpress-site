var jqc = document.createElement('script');
jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
document.getElementsByTagName('head')[0].appendChild(jqc);

$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var $pane = $('#pane1');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 440) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            $pane.jScrollPane({
               scrollbarWidth:15, 
               scrollbarMargin:52
            });
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});
