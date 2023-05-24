
(function($) {
  "use strict";

  // COUNTER NUMBERS
  $('.counter-thumb').appear(function() {
    $('.counter-number').countTo();
  });

  // CUSTOM LINK
  $('.smoothscroll').click(function(event) {
    event.preventDefault();
    var target = $(this).attr('href');
    var targetOffset = $(target).offset().top;
    var headerHeight = $('.navbar').height();

    $('html, body').animate({
      scrollTop: targetOffset - headerHeight
    }, 300);
  });

})(jQuery);


