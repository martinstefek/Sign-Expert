$(document).ready(function() {
    // Definitions
    const slick = $('#home-banner-slider');

    slick.slick({
        draggable: false,
        arrows: true,
        dots: true,
        prevArrow: '<button class="slick-prev" aria-label="Predchádzajúci"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slick-next" aria-label="Nasledujúci"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>',
    });
});
