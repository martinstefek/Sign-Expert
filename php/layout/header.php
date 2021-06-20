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
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
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
                <button type="button" id="mobile-navigation-second-level-back" class="btn btn-icon-only btn-transparent">
                    <svg><use xlink:href="#sprite-arrow-left"></use></svg>
                </button>

                <span id="mobile-navigation-title-second-level">Menu</span>
            </div>

            <button id="mobile-nav-close" type="button" class="btn btn-transparent btn-icon-only mobile-nav-close">
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
                <a href="<?php indexHref() ?>" class="logo">
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
                        <a href="#" class="quick-nav-item">
                            <svg class="icon">
                                <use xlink:href="#sprite-book-circled"></use>
                            </svg>
                            Blog
                        </a>

                        <a href="#" class="quick-nav-item">
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

<div class="modal modal-login-register fade" id="login-register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-no-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg class="icon icon-close">
                        <use xlink:href="#sprite-cancel"></use>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <div id="login-register-tabs">
                    <ul>
                        <li><a href="#login-tab">Prihlásenie</a></li>
                        <li><a href="#register-tab">Registrácia</a></li>
                    </ul>

                    <div id="login-tab">
                        <form>
                            <div class="form-group">
                                <?php input('login-email', 'E-mail'); ?>
                            </div>

                            <div class="form-group">
                                <?php input('login-password', 'Heslo'); ?>
                            </div>

                            <button type="submit" class="btn btn-full btn-success btn-icon-right mt-4 mb-3">
                                Prihlasiť sa
                                <svg class="icon stroke-white">
                                    <use xlink:href="#sprite-chevron-right"></use>
                                </svg>
                            </button>

                            <div class="text-center">
                                <a href="#">Zabudnuté heslo</a>
                            </div>
                        </form>
                    </div>

                    <div id="register-tab">
                        <form>
                            <?php select('address_country', 'Krajina', 'sk', [
                                'sk' => [
                                    'img' => 'img/language/lang-sk.svg',
                                    'text' => 'Slovenska Republika',
                                ],
                                'cz' => [
                                    'img' => 'img/language/lang-cz.svg',
                                    'text' => 'Česká Republika',
                                ],
                                'en' => [
                                    'img' => 'img/language/lang-gb.svg',
                                    'text' => 'Veľká Británia',
                                ],
                            ]) ?>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <svg class="icon">
                                            <use xlink:href="#sprite-lens"></use>
                                        </svg>
                                    </span>

                                    <input id="register-search-company"
                                           type="text"
                                           class="form-control"
                                           placeholder="Vyhľadať firmu podľa názvu alebo IČO"
                                    >
                                    <label for="register-search-company" class="form-label text-default">Vyhľadať firmu podľa názvu alebo IČO</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group text-center">
                                    <a href="#">Zadať firemne údaje ručne</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <?php input('register-firstname', 'Meno') ?>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <?php input('register-lastname', 'Priezvisko') ?>
                                </div>
                            </div>

                            <?php input('register-phone', 'Telefónne číslo') ?>
                            <div class="text-faded small mb-3">Vzor: +421 944 111 222</div>

                            <?php input('register-email', 'E-mail na zasielanie faktúr') ?>

                            <?php input('register-email-login', 'E-mail pre prihlasenie') ?>

                            <?php input('register-password', 'Heslo') ?>

                            <button type="submit" class="btn btn-full btn-success btn-icon-right mt-4">
                                Vytvoriť konto
                                <svg class="icon stroke-white">
                                    <use xlink:href="#sprite-chevron-right"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="<?php echo !empty($mainBgActive) ? 'main-background' : '' ?>">

