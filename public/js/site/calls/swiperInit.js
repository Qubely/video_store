$(document).ready(function(){
    new Swiper(".top-swiper", {
        speed: 200,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
    });
    new Swiper(".card-swiper", {
        speed: 200,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
    });


})
