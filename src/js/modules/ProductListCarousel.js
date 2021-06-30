import { mobileNavigationThreshold } from "./config";

$(document).ready(function() {
    if (window.innerWidth <= 767) {
        return;
    }

    // Definitions
    const slick = $('[data-type="product-list-carousel"]');
    let isSlickActive = false;

    const createSlick = () => {
        if (isSlickActive) {
            return;
        }

        slick.slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            draggable: false,
            arrows: true,
            dots: true,
            prevArrow: '<button class="slick-prev" aria-label="Predchádzajúci"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',
            nextArrow: '<button class="slick-next" aria-label="Nasledujúci"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>',
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

        isSlickActive = true;
    };

    createSlick();

    window.addEventListener('resize', (e) => {
        setTimeout(() => {
            if (window.innerWidth <= 767) {
                slick.slick('unslick');
                isSlickActive = false;
            } else {
                createSlick();
            }
        }, 500);
    });
});
