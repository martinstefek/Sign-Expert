<?php

const PATH = './';
const USE_HTML_EXTENSION = false;

global $loggedIn;
$loggedIn = false;

global $mainBgActive;
$mainBgActive = false;

global $footerContent;
$footerContent = '';

global $accountNavSelectedIndex;
$accountNavSelectedIndex = 0;

global $checkoutActiveIndex;
$checkoutActiveIndex = 0;

global $checkoutProgressBar;
$checkoutProgressBar = true;

function path($pathToAsset) {
    return PATH . $pathToAsset;
}

function asset($pathToAsset) {
    echo path($pathToAsset);
}

function href($path) {
    echo path(
        USE_HTML_EXTENSION
            ? str_replace('.php', '.html', $path)
            : $path
    );
}

function productListHref() {
    href('product-list.php');
}

function indexHref() {
    href('index.php');
}

function addFooterContent($content) {
    global $footerContent;
    $footerContent = $footerContent . $content;
}

include_once('components/form/Radio.php');
include_once('components/form/Checkbox.php');
include_once('components/form/Input.php');
include_once('components/form/Select.php');
include_once('components/form/inputNumberWithControls.php');
include_once('components/navigation/topLevelItem.php');
include_once('components/productList/ProductListItem.php');
include_once('components/productList/ProductListCarousel.php');
include_once('components/productList/FilterCheckbox.php');
include_once('components/productList/Pagination.php');
include_once('components/service.php');
include_once('components/homeTechs/homeTechButton.php');
include_once('components/homeTechs/homeTechAccordion.php');
include_once('components/category.php');
include_once('components/article.php');
include_once('components/Newsletter.php');
include_once('components/Breadcrumb.php');
include_once('components/ProductParameterColor.php');
include_once('components/ProductParameterBox.php');
include_once('components/ProductParameterBoxLarge.php');
include_once('components/productDetail/productDetailAccordion.php');
include_once('components/productDetail/productDetailGallery.php');
include_once('components/productDetail/productDetailMainContent.php');
include_once('components/order.php');
include_once('components/checkout/checkoutProgress.php');
include_once('components/checkout/checkoutFooterAction.php');
include_once('components/checkout/thankyouBottomButtons.php');
