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
    $('.menu-icon').on("click",function(){
        $(".probootstrap-side-menu").toggleClass( "hide" );
    });

   /* $(window).on("scroll",function(){
        if($(window).scrollTop()){
            $('nav').addClass('fixedtop');
        }
        else{
            $('nav').removeClass('fixedtop');
        }
    })*/
});


