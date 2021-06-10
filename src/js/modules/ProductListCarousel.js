import { mobileNavigationThreshold } from "./config";

$(document).ready(function() {
    if (window.innerWidth <= 767) {
        return;
    }

    // Definitions
    const slick = $('[data-type="product-list-carousel"]');

    slick.slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        draggable: false,
        arrows: true,
        dots: true,
        prevArrow: '<button class="slick-prev"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slick-next"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>',
        responsive: [
            {
                breakpoint: mobileNavigationThreshold,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }
        ]
    });
});
