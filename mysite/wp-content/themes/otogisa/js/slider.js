(function($) {
  $('img').on('dragstart', function(event) { event.preventDefault(); });
  
  $(".slide img").swipe({

    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

      if (direction == 'left') $(".slide-btn:checked + .slide-container .nav-btns label.next").click();
      if (direction == 'right') $(".slide-btn:checked + .slide-container .nav-btns label.prev").click();

    },
    allowPageScroll:"vertical"

  });
  
})(jQuery);