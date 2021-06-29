<?php
    include_once('../config.php');
    include_once('headerSearch.php');
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title>SignExpert</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="sk">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="<?php asset('css/app.css') ?>" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php asset('img/favicon.ico') ?>">
</head>
<body>
<div style="opacity: 0; width: 0; height: 0; overflow: hidden;">
    <?php include_once(path('img/sprite.svg')) ?>
</div>

<header class="main-header-overlay">
    <div id="main-header" class="main-header">
        <div class="mobile-navigation-header">
            <div class="mobile-navigation-title">Menu</div>
            <div class="mobile-navigation-title-second-level">
                <button type="button" id="mobile-navigation-second-level-back" class="btn btn-icon-only btn-transparent" aria-label="Späť">
                    <svg><use xlink:href="#sprite-arrow-left"></use></svg>
                </button>

                <span id="mobile-navigation-title-second-level">Menu</span>
            </div>

            <button id="mobile-nav-close" type="button" class="btn btn-transparent btn-icon-only mobile-nav-close" aria-label="Zatvoriť">
                <svg><use xlink:href="#sprite-cancel"></use></svg>
            </button>
        </div>

        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 top-header-list">
                        <div class="list-item">
                            <span class="dark-theme-text-dark">Podpora:</span> +421 948 048 448
                        </div>

                        <div class="list-item">
                            <span class="dark-theme-text-dark">E-mail:</span> info@signexpert.sk
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 top-header-list socials-list">
                        <div class="list-item">
                            <a href="#">
                                <svg>
                                    <use xlink:href="#sprite-facebook"></use>
                                </svg>
                                Facebook
                            </a>
                        </div>

                        <div class="list-item">
                            <a href="#">
                                <svg>
                                    <use xlink:href="#sprite-youtube"></use>
                                </svg>
                                YouTube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mid-header">
            <div class="container">
                <a href="<?php indexHref() ?>" class="logo" aria-label="Logo">
                    <svg class="icon">
                        <use xlink:href="#sprite-logo"></use>
                    </svg>
                </a>

                <?php headerSearch('header-search'); ?>

                <div class="mid-header-actions">
                    <div class="dropdown language">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="icon-wrap">
                                <img src="./img/language/lang-sk.svg" alt="Slovak language">
                            </span>

                            <span>SK</span>
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li class="dropdown-header">
                                Zmeniť jazyk
                            </li>
                            <li>
                                <a class="dropdown-item active">
                                    <span>Slovenčina - SK</span>
                                    <img class="icon" src="./img/language/lang-sk.svg" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Čeština - CZ</span>
                                    <img class="icon" src="./img/language/lang-cz.svg" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Magyar - HUN</span>
                                    <img class="icon" src="./img/language/lang-hu.svg" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>English - EN</span>
                                    <img class="icon" src="./img/language/lang-gb.svg" alt="Slovak language">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <?php include_once('loginButtonAndShoppingCart.php'); ?>
                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container">
                <div class="bottom-header-content-wrap">
                    <nav id="main-nav" class="navigation">
                        <?php navigationTopLevelItem('Podľa technológie', 0) ?>
                        <?php navigationTopLevelItem('Zariadenia', 1) ?>
                        <?php navigationTopLevelItem('Materiály', 2) ?>
                    </nav>

                    <div class="quick-nav">
                        <a href="<?php href('blog-list.php'); ?>" class="quick-nav-item">
                            <svg class="icon">
                                <use xlink:href="#sprite-book-circled"></use>
                            </svg>
                            Blog
                        </a>

                        <a href="<?php href('contact.php'); ?>" class="quick-nav-item">
                            <svg class="icon">
                                <use xlink:href="#sprite-phone-circled"></use>
                            </svg>
                            Kontakty
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('mobileHeader.php'); ?>
</header>

<?php include_once('loginModal.php'); ?>
<?php include_once('loginModal.php'); ?>
<?php include_once('shoppingCartModal.php'); ?>

<main class="<?php echo !empty($mainBgActive) ? 'main-background' : '' ?>">

