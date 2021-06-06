<?php

const PATH = './';
const LOGGED_IN = false;

function path($assetToPath) {
    return PATH . $assetToPath;
}

function asset($assetToPath) {
    echo path($assetToPath);
}

include_once('components/navigation/topLevelItem.php');
include_once('components/productListItem/ProductListItem.php');