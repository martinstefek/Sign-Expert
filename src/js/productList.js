import {clickEvent} from "./modules/config";

const filterPrice = $('#filter-price-element');

const min = filterPrice.data('min');
const max = filterPrice.data('max');
const initialValues = filterPrice.data('initialValue');

const filterPriceSlider = filterPrice.slider({
    min,
    max,
    step: 10,
    precision: 0,
    orientation:'horizontal',
    value: initialValues,
    range: true,
})
.on('change', (a) => {
    $('#filter-price-input-min').val(a.value.newValue[0]);
    $('#filter-price-input-max').val(a.value.newValue[1]);
})
.on('slideEnabled', (a) => {
    $('#filter-price-input-min').val(a.value.newValue[0]);
    $('#filter-price-input-max').val(a.value.newValue[1]);
});

const inputMin = $('#filter-price-input-min');
const inputMax = $('#filter-price-input-max');

inputMin.on('change', (e) => {
    const minVal = Number(e.target.value || 0);
    const maxVal = Number(inputMax.val() || 0);

    filterPriceSlider.slider('setValue', [minVal, maxVal]);
});

inputMax.on('change', (e) => {
    const minVal = Number(inputMin.val() || 0);
    const maxVal = Number(e.target.value) || 0;

    filterPriceSlider.slider('setValue', [minVal, maxVal]);
});

document.getElementById('product-list-sidebar-overlay').addEventListener(clickEvent, (e) => {
    document.body.classList.remove('mobile-filters-visible')
});

document.getElementById('mobile-filters-button-close').addEventListener(clickEvent, (e) => {
    document.body.classList.remove('mobile-filters-visible')
});

document.getElementById('mobile-filters-button-open').addEventListener(clickEvent, (e) => {
    document.body.classList.add('mobile-filters-visible')
});
