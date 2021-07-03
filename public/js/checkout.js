/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./src/js/checkout.js ***!
  \****************************/
var searchCompanyInput = $('#register-search-company');
var searchCompanyCancel = $('#register-search-company-cancel');
var searchCompanyAutocomplete = $('#register-search-company-autocomplete');

var showAutocomplete = function showAutocomplete(length) {
  if (length >= 3) {
    searchCompanyAutocomplete.addClass('visible');
    searchCompanyCancel.addClass('visible');
  } else {
    searchCompanyAutocomplete.removeClass('visible');
    searchCompanyCancel.removeClass('visible');
  }
};

searchCompanyInput.on('input', function (e) {
  var length = e.target.value.length;
  showAutocomplete(length);
});
searchCompanyInput.on('focus', function (e) {
  var length = e.target.value.length;
  showAutocomplete(length);
});
searchCompanyInput.on('focusout', function (e) {
  searchCompanyAutocomplete.removeClass('visible');
});
searchCompanyCancel.on('click', function (e) {
  searchCompanyInput.val('');
  searchCompanyCancel.removeClass('visible');
});
/******/ })()
;