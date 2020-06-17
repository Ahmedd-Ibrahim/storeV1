$(document).ready(function(){
//jq code

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
/** toggle active scroll* */
//  window.addEventListener('scroll', function(){
//      if(!('body').scrollTop > 50){
//          $('.scrolling a .fa-arrow-circle-up')CSS('colo', 'blue');
//      }
//  });
});