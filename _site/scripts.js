function init() {
   if($(window).width() > 2200) {
      $("body").removeClass();
      $("body").addClass("xl");
   } else if($(window).width() > 1700) {
      $("body").removeClass();
      $("body").addClass("l");      
   } else if($(window).width() > 1080) {
      $("body").removeClass();
      $("body").addClass("m");      
   } else if($(window).width() > 760) {
      $("body").removeClass();
      $("body").addClass("s"); 
   } else {
      $("body").removeClass();
      $("body").addClass("mobile");
      if($(window).width() < 400) {
         $("body").addClass("tiny");
      }
   }
}

$(document).ready(function() {
   init();
   $(window).resize(function() {
      init();
   });
});