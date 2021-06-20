/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./src/js/wishlist.js ***!
  \****************************/
$(document).ready(function () {
  var id = 'wishlist-product-detail-modal-script';
  $('#wishlist-product-detail').on('show.bs.modal', function () {
    var existingScript = document.getElementById(id);

    if (existingScript) {
      document.body.removeChild(existingScript);
    }

    var script = document.createElement('script');
    script.setAttribute('src', './js/detail.js');
    script.setAttribute('id', id);
    setTimeout(function () {
      document.body.appendChild(script);
    }, 300);
  });
});
/******/ })()
;