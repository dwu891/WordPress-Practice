(function($) {
  $("#nav-icon").on("click", function() {
    if($(this).hasClass("open")) {
      $(".sub-menu").hide();
    }
    $(this).toggleClass("open");
    $("#menu-top-menu").slideToggle();
  });
  
  
  $(window).resize(function() {
    if($(window).width() > 1024) {
      $("#menu-top-menu").show();
      $(".sub-menu").css("display","");
    } else {
      $("#menu-top-menu").hide();
      $("#nav-icon").removeClass("open");
    }
  });
  
  $(".menu-item").on("click", function(event) {
    if($(window).width() <= 1025) {
      if($(this).find('.sub-menu').length != 0) {
        event.preventDefault();
        if($(this).find('.sub-menu').is(':visible')) {
          $(this).find('.sub-menu').slideUp();
        } else {
          $(this).find('.sub-menu').slideDown();
        }
      }
    } else {
      if($(this).find('.sub-menu').length != 0) {
        event.preventDefault();
      }
    }
  });
  
  $(".menu-item").click(function(e) {
    e.stopPropagation();
  })

})(jQuery);