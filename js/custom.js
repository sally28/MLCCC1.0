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

     $(".flip").click(function(){
    $(this).siblings(".panel").fadeToggle("slow");
  });

  /*  $("h4#teacherName").click(function(){
    $(".probootstrap-side-menu").toggle(1000);
  });

    $("h4.brname").click(function(){
    $(this).siblings(".probootstrap-side-menu").toggle(1000);
  });*/
     $(".expandableCollapsibleDiv > img").click(function (e) {
      var showElementDescription =
        $(this).parents(".expandableCollapsibleDiv").find("ul");

      if ($(showElementDescription).is(":visible")) {
        showElementDescription.hide("fast", "swing");
        $(this).attr("src", "img/up-arrow.png");
      } else {
        showElementDescription.show("fast", "swing");
        $(this).attr("src", "img/down-arrow.png");
      }
    });
});


