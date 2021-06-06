<?php include_once('../config.php'); ?>

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

<header id="main-header" class="main-header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 top-header-list">
                    <div class="list-item">
                        <span class="dark-theme-text-dark">Podpora:</span> +421 948 048 448
                    </div>

                    <div class="list-item">
                        <span class="dark-theme-text-dark">E-mail:</span> info@signexpert.sk
                    </div>
                </div>

                <div class="col-xs-6 top-header-list socials-list">
                    <div class="list-item">
                        <a href="#">
                            <svg><use xlink:href="#sprite-facebook"></use></svg> Facebook
                        </a>
                    </div>

                    <div class="list-item">
                        <a href="#">
                            <svg><use xlink:href="#sprite-youtube"></use></svg> YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mid-header">
        <div class="container">
            <a href="/" class="logo">
                <svg class="icon"><use xlink:href="#sprite-logo"></use></svg>
            </a>

            <form id="header-search" class="search">
                <div class="search-wrap">
                    <label for="header-search-input">
                        <svg class="icon"><use xlink:href="#sprite-lens"></use></svg>
                    </label>

                    <input id="header-search-input" type="text" autocomplete="off" placeholder="Zadajte hľadaný výraz">

                    <button type="submit" class="btn">
                        <span class="button-label">Hľadať</span>
                    </button>
                </div>

                <div id="header-search-autocomplete" class="search-autocomplete">
                    <div class="search-autocomplete-col">
                        <div class="mb-3">
                            <h6>Frázy</h6>
                            <a href="#" class="label label-primary">Sublimácia</a>
                            <a href="#" class="label label-primary">Subli-Light</a>
                            <a href="#" class="label label-primary">Subli-flex</a>
                        </div>

                        <div>
                            <h6>Kategórie</h6>
                            <ul class="link-list">
                                <li><a href="#"><span class="matched-phrase">Sub</span>limácia</a></li>
                                <li><a href="#">Zariadenia pre <span class="matched-phrase">sub</span>limáciu</a></li>
                                <li><a href="#">Materiály pre <span class="matched-phrase">sub</span>limáciu</a></li>
                                <li><a href="#">Predmety pre <span class="matched-phrase">sub</span>limáciu</a></li>
                                <li><a href="#"><span class="matched-phrase">Sub</span>limačné tlačiarne</a></li>
                                <li><a href="#"><span class="matched-phrase">Sub</span>limačné atramenty</a></li>
                                <li><a href="#"><span class="matched-phrase">Sub</span>limačný papier</a></li>
                                <li><a href="#"><span class="matched-phrase">Sub</span>limácia na bavlnu</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="search-autocomplete-col">
                        <h6>Top produkt</h6>
                    </div>

                    <div class="search-autocomplete-col-2">
                        <div class="search-autocomplete-col-product-header">
                            <h6>Produkty</h6>
                        </div>

                        <div class="search-autocomplete-product-list">
                            <?php for ($x = 1; $x <= 6; $x++): ?>
                            <a href="#" class="search-autocomplete-product-item">
                                <img src="img/product-list-image.jpg" alt="Poruct list image">

                                <div class="search-autocomplete-product-item-info">
                                    <div class="search-autocomplete-product-item-title">Sublimačná tlačiareň Epson SureColor SC-F100</div>
                                    <div class="search-autocomplete-product-item-price">
                                        560,72 €
                                        <span>s DPH</span>
                                    </div>
                                </div>
                            </a>
                            <?php endfor; ?>
                        </div>

                        <div class="search-autocomplete-col-product-footer">
                            <a href="#" class="btn btn-primary">
                                Zobraziť všetky produkty (365)

                                <svg class="icon"><use xlink:href="#sprite-detail-chevron-right"></use></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="mid-header-actions">
                <div class="dropdown language">
                    <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
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
                    <svg class="icon"><use xlink:href="#sprite-avatar"></use></svg>
                    <span class="login-button-label">
                        <span>Prihlásenie</span>
                        <span>Registrácia</span>
                    </span>
                </a>

                <a href="#" class="btn btn-action" type="button">
                    <svg class="icon"><use xlink:href="#sprite-avatar"></use></svg> <span>Košík</span>
                </a>
            </div>
        </div>
    </div>

    <div class="bottom-header">
        <div class="container">
            <div class="bottom-header-content-wrap">
                <div id="main-nav" class="navigation">
                    <?php navigationTopLevelItem('Podľa technológie', 0) ?>
                    <?php navigationTopLevelItem('Zariadenia', 1) ?>
                    <?php navigationTopLevelItem('Materiály', 2) ?>
                </div>

                <div class="quick-nav">
                    <a href="#" class="quick-nav-item">
                        <svg class="icon"><use xlink:href="#sprite-avatar"></use></svg>
                        Blog
                    </a>

                    <a href="#" class="quick-nav-item">
                        <svg class="icon"><use xlink:href="#sprite-avatar"></use></svg>
                        Kontakty
                    </a>
                </div>
            </div>
        </div>
    </div>











    <div class="container">
        <a href="/" class="logo">
            <svg class="icon"><use xlink:href="#sprite-logo"></use></svg>
        </a>

        <div class="mobile-header-icon-buttons">
            <button id="search-toggle-mobile" class="btn-icon-only icon-button-mobile">
                <svg class="icon"><use xlink:href="#sprite-lens"></use></svg>
            </button>
        </div>

        <button id="main-nav-toggle-mobile" class="btn-icon menu-button">
            <svg class="icon-open"><use xlink:href="#sprite-menu"></use></svg>
            <svg class="icon-close"><use xlink:href="#sprite-cancel"></use></svg>
            <span class="content">Menu</span>
        </button>

        <div class="mobile-navigation-wrap">
            <div class="mobile-account">
                <a href="#" class="btn btn-lighter login-button" type="button">
                    Prihlásenie
                </a>

                <a href="#" class="btn btn-lighter login-button" type="button">
                    Registrácia
                </a>
            </div>

            <div class="main-nav-wrap">
                <button id="main-nav-toggle-desktop" class="btn-icon menu-button">
                    <svg class="icon-open"><use xlink:href="#sprite-menu"></use></svg>
                    <svg class="icon-close"><use xlink:href="#sprite-cancel"></use></svg>
                    <span class="content">Menu</span>
                </button>

                <nav id="main-nav" class="main-nav">
                    <ul class="main-nav-level">
                        <li class="main-nav-menu-item">
                            <a class="main-nav-menu-item-link" href="#" data-toggle="main-nav-next-level">IVECO</a>

                            <ul class="main-nav-level main-nav-sub-level">
                                <li class="main-nav-menu-item main-nav-menu-item-back">
                                    <a href="#" class="main-nav-menu-item-link" data-toggle="main-nav-prev-level">
                                        <svg class="icon"><use xlink:href="#sprite-arrow-left-short"></use></svg>
                                        IVECO
                                    </a>
                                </li>
                                <li class="main-nav-menu-item main-nav-menu-item-current-level">
                                    <a href="#" class="main-nav-menu-item-link">
                                        <svg class="icon"><use xlink:href="#sprite-home"></use></svg>
                                        IVECO
                                    </a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO DAILY 2000</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#" data-toggle="main-nav-next-level">IVECO DAILY 2006</a>

                                    <ul class="main-nav-level main-nav-sub-level">
                                        <li class="main-nav-menu-item main-nav-menu-item-back">
                                            <a href="#" class="main-nav-menu-item-link" data-toggle="main-nav-prev-level">
                                                <svg class="icon"><use xlink:href="#sprite-arrow-left-short"></use></svg>
                                                IVECO DAILY 2006
                                            </a>
                                        </li>
                                        <li class="main-nav-menu-item main-nav-menu-item-current-level">
                                            <a href="#" class="main-nav-menu-item-link">
                                                <svg class="icon"><use xlink:href="#sprite-home"></use></svg>
                                                IVECO DAILY 2006
                                            </a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">BRZDY</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">KAROSÉRIA</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">FILTRE</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">MOTOR</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">PODVOZOK</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">ŠTARTÉR , ALTERNÁTOR</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">NEZARADENÉ</a>
                                        </li>
                                        <li class="main-nav-menu-item">
                                            <a class="main-nav-menu-item-link" href="#">AKUMULÁTOR</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO EUROCARGO</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO STRALIS</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO TRAKKER</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO TURBODAILY</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">KAROSÉRIA</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">TESNENIA</a>
                                </li>
                                <li class="main-nav-menu-item">
                                    <a class="main-nav-menu-item-link" href="#">IVECO</a>
                                </li>
                            </ul>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">DAF</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">FIAT</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">FORD</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">MAN</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">MERCEDES</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">RENAULT</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">SCANIA</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">VOLVO</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">BPW</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">LED SVETLÁ</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">UNIVERZÁLNE DIELY</a>
                        </li>
                        <li class="main-nav-menu-item">
                            <a href="#" class="main-nav-menu-item-link">OLEJ/KVAPALINY</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <form class="search">
                <input id="header-search-input" type="text" placeholder="Hľadať podľa OE čísla">

                <button type="submit" class="btn btn-icon">
                    <svg><use xlink:href="#sprite-lens"></use></svg>
                    <span class="button-label">Hľadať</span>
                </button>

                <div class="search-cancel" data-toggle="search-reset" data-target="#header-search-input">
                    <svg class="icon"><use xlink:href="#sprite-cancel"></use></svg>
                    <span class="search-cancel-label">Zrušiť</span>
                </div>
            </form>

            <div class="double-floor-section">
                <div class="site-settings">
                    <div class="dropdown header-dropdown language">
                        <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <img class="icon" src="./img/SK.png" alt="Slovak language">
                            <span>SK</span>
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu list-of-languages">
                            <li>
                                <a class="dropdown-item">
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                    <span>SK</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                    <span>SK</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <img class="icon" src="./img/SK.png" alt="Slovak language">
                                    <span>SK</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="btn btn-lighter login-button" type="button">
                        <svg class="icon fill-primary"><use xlink:href="#sprite-avatar"></use></svg> <span>Prihlásiť/registrovať</span>
                    </a>
                </div>

                <nav class="quick-menu">
                    <ul>
                        <li><a href="#">O nás</a></li>
                        <li><a href="#">Výhodý</a></li>
                        <li><a href="#">Ako nakupovať</a></li>
                        <li><a href="#">Kontakty</a></li>
                    </ul>
                </nav>

                <div class="dropdown header-dropdown mobile-language">
                    <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        <img class="icon" src="./img/SK.png" alt="Slovak language">
                        <span>Slovenský jazyk</span>
                        <span class="mobile-language-open-button">Zmeniť</span>
                    </button>

                    <ul class="dropdown-menu list-of-languages">
                        <li>
                            <a class="dropdown-item">
                                <img class="icon" src="./img/SK.png" alt="Slovak language">
                                <span>Slovenský jazyk</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item">
                                <img class="icon" src="./img/SK.png" alt="Slovak language">
                                <span>Slovenský jazyk</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item">
                                <img class="icon" src="./img/SK.png" alt="Slovak language">
                                <span>Slovenský jazyk</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<main>

