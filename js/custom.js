jQuery(document).ready(function() {
	
	"use strict";
    //$("#includedContent").load("newsContent.html");
    //$("#includedContent").load("newsContent915.html");
    //$("#includedContent").load("newsContent908.html");
     $('.newsingle').click(function(){
         var targetId = this.getAttribute('target');
         var fileName = "newsletter/newsContent"+targetId+".html";
         $("#includedContent").load(fileName);
        /*$('.targetDiv').hide();
        $('#includedContent'+jQuery(this).attr('target')).show();
        $(this).addClass('active').siblings().removeClass('active');*/
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



