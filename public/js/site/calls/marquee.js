$(document).ready(function(){
    $('.marquee').marquee({
        duration: 20000,
        gap: 50,
        delayBeforeStart: 1000,
        direction: 'left',
        duplicated: false
    });

     $('.tag-marquee-one').marquee({
        duration: 20000,
        gap: 50,
        delayBeforeStart: 1000,
        direction: 'left',
        duplicated: false,
    });
    $('.tag-marquee-two').marquee({
        duration: 20000,
        gap: 50,
        delayBeforeStart: 1000,
        direction: 'right',
        duplicated: false,
    });
    $('.tag-marquee-three').marquee({
        duration: 20000,
        gap: 50,
        delayBeforeStart: 1000,
        direction: 'left',
        duplicated: false,
    });

    const $toTop = $('#to-top');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $toTop.fadeIn();
      } else {
        $toTop.fadeOut();
      }
    });
    $toTop.click(function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 600);
    });

    $(".close-btn").on("click",function(){
        $(this).parent().remove();
    })

});
