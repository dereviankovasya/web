$(document).ready(function () {
    var swiper1 = new Swiper('.slider-block .swiper-container', {

        slidesPerView: 1,
        spaceBetween: 20,
        speed: 600,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.slider-block .swiper-button-next',
            prevEl: '.slider-block .swiper-button-prev',

        },
        pagination: {
            el: '.slider-block .swiper-pagination',
            clickable: true,
        },
        on: {
            init: function () {
                var totalItems = $('.slider-block .swiper-slide').length;
                console.log(totalItems);
                $('.slider-block .all-slide').text(totalItems);
            },
            slideChange: function () {
                var activePage = swiper1.activeIndex+1;
                $('.slider-block .active-slide').text(swiper1.activeIndex+1);
            },
        },
    })});
$(document).ready(function () {
    var swiper2 = new Swiper('.reviews .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,

        speed: 600,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.reviews .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.reviews .swiper-button-next',
            prevEl: '.reviews .swiper-button-prev',
        },
    })

});



$(document).ready(function () {
    var swiper = new Swiper('.favour .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 25,
        speed: 600,
        autoplay: {
            delay: 5000,
        },

        pagination: {
            el: '.favour .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }
    })});

AOS.init();


$(document).ready(function(){
    $('.search-button').click(function () {
        $(".search-block").toggle(300);
    });
});

