/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/modules/config.js":
/*!**********************************!*\
  !*** ./src/js/modules/config.js ***!
  \**********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "clickEvent": function() { return /* binding */ clickEvent; },
/* harmony export */   "mobileNavigationThreshold": function() { return /* binding */ mobileNavigationThreshold; }
/* harmony export */ });
var clickEvent = 'ontouchend' in document ? 'touchend' : 'click';
var mobileNavigationThreshold = 991;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!*******************************!*\
  !*** ./src/js/productList.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_config__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/config */ "./src/js/modules/config.js");

var filterPrice = $('#filter-price-element');
var min = filterPrice.data('min');
var max = filterPrice.data('max');
var initialValues = filterPrice.data('initialValue');
var filterPriceSlider = filterPrice.slider({
  min: min,
  max: max,
  step: 10,
  precision: 0,
  orientation: 'horizontal',
  value: initialValues,
  range: true
}).on('change', function (a) {
  $('#filter-price-input-min').val(a.value.newValue[0]);
  $('#filter-price-input-max').val(a.value.newValue[1]);
}).on('slideEnabled', function (a) {
  $('#filter-price-input-min').val(a.value.newValue[0]);
  $('#filter-price-input-max').val(a.value.newValue[1]);
});
var inputMin = $('#filter-price-input-min');
var inputMax = $('#filter-price-input-max');
inputMin.on('change', function (e) {
  var minVal = Number(e.target.value || 0);
  var maxVal = Number(inputMax.val() || 0);
  filterPriceSlider.slider('setValue', [minVal, maxVal]);
});
inputMax.on('change', function (e) {
  var minVal = Number(inputMin.val() || 0);
  var maxVal = Number(e.target.value) || 0;
  filterPriceSlider.slider('setValue', [minVal, maxVal]);
});
document.getElementById('product-list-sidebar-overlay').addEventListener(_modules_config__WEBPACK_IMPORTED_MODULE_0__.clickEvent, function (e) {
  document.body.classList.remove('mobile-filters-visible');
});
document.getElementById('mobile-filters-button-close').addEventListener(_modules_config__WEBPACK_IMPORTED_MODULE_0__.clickEvent, function (e) {
  document.body.classList.remove('mobile-filters-visible');
});
document.getElementById('mobile-filters-button-open').addEventListener(_modules_config__WEBPACK_IMPORTED_MODULE_0__.clickEvent, function (e) {
  document.body.classList.add('mobile-filters-visible');
});
}();
/******/ })()
;