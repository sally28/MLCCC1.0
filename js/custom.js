jQuery(document).ready(function() {
	
	"use strict";
    $("#includedContent").load("newsContent.html");
    $("#includedContent").load("newsContent915.html");

     $('.showSingle').click(function(){
        $('.targetDiv').hide();
        $('#includedContent'+jQuery(this).attr('target')).show();
        $(this).addClass('active').siblings().removeClass('active');
    });

      $('.showSingle').click(function(){
        $('.targetDiv').hide();
        $('#div'+jQuery(this).attr('target')).show();
        $(this).addClass('active').siblings().removeClass('active');
    });

});
