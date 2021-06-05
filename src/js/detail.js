$(document).ready(function() {
    // Definitions
    const thumbnails = $('#product-detail-gallery-thumbnails .product-detail-gallery-thumbnail-item');

    const slick = $('#product-detail-gallery');

    const setActiveThumbnail = (index) => {
        thumbnails.each((itemIndex, item) => {
            $(item).removeClass('active');

            if (index === itemIndex) {
                $(item).addClass('active');
            }
        });
    };

    // Calls
    $("#product-detail-gallery").lightGallery({
        selector: '.product-detail-gallery-item',
        getCaptionFromTitleOrAlt: false,
    });

    slick.slick({
        draggable: false,
        arrows: true,
        prevArrow: '<button class="slick-prev"><svg class="icon"><use xlink:href="#sprite-detail-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slick-next"><svg class="icon"><use xlink:href="#sprite-detail-chevron-right"></use></svg></button>',
    });

    slick.on('beforeChange', (e, slick, currentSlide, nextSlide) => {
        setActiveThumbnail(nextSlide);
    });

    thumbnails.each((index, item) => {
        $(item).on('click', (e) => {
            e.preventDefault();
            slick.slick('slickGoTo', index);

        });
    });

    setActiveThumbnail(slick.slick('slickCurrentSlide'));
});
