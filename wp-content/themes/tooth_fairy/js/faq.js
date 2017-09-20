               jQuery(document).ready(function() {
        if (jQuery(window).width() < 600){
          var jqc = document.createElement('script');
             jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
              document.getElementsByTagName('head')[0].appendChild(jqc);
        }
      });

