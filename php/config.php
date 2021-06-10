<?php

const PATH = './';
const LOGGED_IN = false;

global $loggedIn;
$loggedIn = false;

function path($assetToPath) {
    return PATH . $assetToPath;
}

function asset($assetToPath) {
    echo path($assetToPath);
}

include_once('components/navigation/topLevelItem.php');
include_once('components/productList/ProductListItem.php');
include_once('components/productList/ProductListCarousel.php');
include_once('components/service.php');
include_once('components/homeTechs/homeTechButton.php');
include_once('components/homeTechs/homeTechAccordion.php');
include_once('components/category.php');
include_once('components/article.php');
include_once('components/Newsletter.php');