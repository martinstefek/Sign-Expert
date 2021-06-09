$(document).ready(function() {
    // Definitions
    const slick = $('#home-banner-slider');

    slick.slick({
        draggable: false,
        arrows: true,
        dots: true,
        prevArrow: '<button class="slick-prev"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slick-next"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>',
    });
});
