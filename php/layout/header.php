<?php
    include_once('../config.php');
    include_once('headerSearch.php');
?>

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

<header>
    <div id="main-header" class="main-header">
        <div class="mobile-navigation-header">
            <div class="mobile-navigation-title">Menu</div>

            <button id="mobile-nav-close" type="button" class="btn btn-transparent btn-icon-only">
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
                <a href="/" class="logo">
                    <svg class="icon">
                        <use xlink:href="#sprite-logo"></use>
                    </svg>
                </a>

                <?php headerSearch('header-search'); ?>

                <div class="mid-header-actions">
                    <div class="dropdown language">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                            <img class="icon" src="./img/SK.png" alt="Slovak language">
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
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Čeština - CZ</span>
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Magyar - HUN</span>
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>English - EN</span>
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="btn btn-action login-button" type="button">
                        <svg class="icon fill-primary">
                            <use xlink:href="#sprite-avatar"></use>
                        </svg>
                        <span class="login-button-label">
                        <span>Prihlásenie</span>
                        <span>Registrácia</span>
                    </span>
                    </a>

                    <a href="#" class="btn btn-action" type="button">
                        <svg class="icon fill-primary">
                            <use xlink:href="#sprite-avatar"></use>
                        </svg>
                        <span>Košík</span>
                    </a>
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
                                <use xlink:href="#sprite-avatar"></use>
                            </svg>
                            Blog
                        </a>

                        <a href="#" class="quick-nav-item">
                            <svg class="icon">
                                <use xlink:href="#sprite-avatar"></use>
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

<main>

