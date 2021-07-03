/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************!*\
  !*** ./src/js/detail.js ***!
  \**************************/
$(document).ready(function () {
  // Definitions
  var thumbnails = $('#product-detail-gallery-thumbnails .product-detail-gallery-thumbnail-item');
  var slick = $('#product-detail-gallery');

  var setActiveThumbnail = function setActiveThumbnail(index) {
    thumbnails.each(function (itemIndex, item) {
      $(item).removeClass('active');

      if (index === itemIndex) {
        $(item).addClass('active');
      }
    });
  }; // Calls


  $("#product-detail-gallery").lightGallery({
    selector: '.product-detail-gallery-item',
    getCaptionFromTitleOrAlt: false
  });
  slick.slick({
    draggable: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Predchádzajúci"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',
    nextArrow: '<button class="slick-next" aria-label="Nasledujúci"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>'
  });
  slick.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
    setActiveThumbnail(nextSlide);
  });
  thumbnails.each(function (index, item) {
    $(item).on('click', function (e) {
      e.preventDefault();
      slick.slick('slickGoTo', index);
    });
  });
  setActiveThumbnail(slick.slick('slickCurrentSlide'));
});
/******/ })()
;