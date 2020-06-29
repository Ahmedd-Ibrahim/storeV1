(function($) {
    "use strict"; // Start of use strict
    $('.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });

    /**toggle between login form and signup form */

    $('.login-page h2 span').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('.login-page form').hide();
        $('.' + $(this).data('class')).fadeIn(100);
     });

 /** scroll to top* */
 $('.fa-arrow-circle-up').each(function(){
    $(this).click(function(){
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});


  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
})(jQuery); // End of use strict
