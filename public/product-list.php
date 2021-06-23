<?php

include_once('../php/config.php');

addFooterContent('<script src="./js/productList.js"></script>');

$loggedIn = false;
$mainBgActive = true;

?>

<?php include_once('../php/layout/header.php'); ?>

<?php breadcrumb([
    'Sublimácia',
    'Predmety pre sublimáciu'
]); ?>

<div class="product-list">
    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-title">Predmety pre sublimáciu</div>
                <div class="section-description">
                    <small>
                        Techniku transferovej tlače, ktorá sa hovorovo v tlačovom prostredí nazýva farbenie. Táto metóda, ako zdôrazňujú špecialisti, je veľmi jednoduchá, ale účinná metóda digitálnej tlače…
                        <a href="#">Zobraziť viac</a>
                    </small>
                </div>
            </div>

            <div class="row">
                <?php for ($x = 1; $x <= (2); $x++): ?>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Šálky', 65, './img/category/category-5.jpg'); ?>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Hrnčeky', 120, './img/category/category-3.jpg'); ?>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Krígle na pivo', 12, './img/category/category-6.jpg'); ?>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Krígle na pivo', 20, './img/category/category-7.jpg'); ?>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Podložky pod myš', 5, './img/category/category-8.jpg'); ?>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 category-wrap">
                        <?php category('Materiály pre sublimáciu', 128, './img/category/category-2.jpg'); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="section section-padding-top-small">
        <div class="container">
            <div class="mb-2">
                1 - 32 z 1089 produktov
            </div>

            <div class="product-list-top">
                <button type="button" id="mobile-filters-button-open" class="btn btn-sm btn-bordered mr-2 mobile-filters-button-open">Filtrovať</button>

                <div class="filters-cancel-list">
                    <button type="button" class="btn btn-bordered btn-sm filter-button-cancel-all">Zrušiť filter</button>

                    <button type="button" class="btn btn-bordered btn-sm btn-icon-right">
                        Hrnčeky

                        <svg class="icon">
                            <use xlink:href="#sprite-cancel"></use>
                        </svg>
                    </button>

                    <button type="button" class="btn btn-bordered btn-sm btn-icon-right">
                        Flašky

                        <svg class="icon">
                            <use xlink:href="#sprite-cancel"></use>
                        </svg>
                    </button>
                </div>

                <div class="product-list-top-actions">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle font-weight-medium" type="button" data-toggle="dropdown" aria-expanded="false">
                            <span>Najobľúbenejšie</span>
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item active">
                                    <span>Najobľúbenejšie</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Najdrahšie</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item">
                                    <span>Najlacnejšie</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <?php pagination(); ?>
                </div>
            </div>

            <div class="product-list-container">
                <div id="product-list-sidebar-overlay" class="product-list-sidebar-overlay"></div>
                <div class="product-list-sidebar">
                    <div class="product-list-sidebar-header">
                        <div class="product-list-sidebar-title">
                            Filter
                        </div>

                        <button id="mobile-filters-button-close" type="button" class="btn btn-sm btn-white">
                            <svg class="icon">
                                <use xlink:href="#sprite-cancel"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="product-list-filters-list">
                        <?php filterCheckbox('Podľa kategórie', 15, 'category', true, [
                            'Šálky',
                            'Hrnčeky',
                            'Krígle na pivo',
                            'Vankúše a poťahy',
                            'Podložky pod myš',
                            'Pazzle',
                            'Bridlice',
                            'Prívesky na kľúče',
                            'Dáždniky',
                            'Flašky',
                            'Kozmetické zrkadlo',
                            'Dosky na krájanie',

                            'Šálky',
                            'Hrnčeky',
                            'Krígle na pivo',
                            'Vankúše a poťahy',
                            'Podložky pod myš',
                            'Pazzle',
                            'Bridlice',
                            'Prívesky na kľúče',
                            'Dáždniky',
                            'Flašky',
                            'Kozmetické zrkadlo',
                            'Dosky na krájanie',
                        ]); ?>

                        <?php filterCheckbox('Podľa materiálu', 9, 'material', true, [
                            'Keramika',
                            'Papier',
                            'Drevo',
                            'Sklo',
                            'Kovové predmety',
                            'Plastové predmety',
                            'Magnetické predmety',
                            'Kameň',
                            'Textil',
                        ]); ?>

                        <?php filterCheckbox('Podľa farby', 16, 'color', false, [
                            'Keramika',
                            'Papier',
                            'Drevo',
                            'Sklo',
                            'Kovové predmety',
                            'Plastové predmety',
                            'Magnetické predmety',
                            'Kameň',
                            'Textil',
                        ]); ?>

                        <?php filterCheckbox('Podľa značky', 8, 'brand', false, [
                            'Keramika',
                            'Papier',
                            'Drevo',
                            'Sklo',
                            'Kovové predmety',
                            'Plastové predmety',
                            'Magnetické predmety',
                            'Kameň',
                            'Textil',
                        ]); ?>

                        <div id="parent-filter-price" data-type="accordion" class="product-list-filter product-filter-price">
                            <h6
                                    data-toggle="accordion"
                                    data-parent="#parent-filter-price"
                                    data-target="#filter-price"
                            >
                                Cena

                                <svg class="icon">
                                    <use xlink:href="#sprite-chevron-right"></use>
                                </svg>
                            </h6>

                            <div class="product-list-filter-content" id="filter-price" data-type="accordion-item" data-allow-close="true">
                                <div class="filter-price-flex">
                                    <input id="filter-price-input-min" type="number" min="0" value="0" class="form-control">

                                    <div class="filter-price-input-separator"></div>

                                    <input id="filter-price-input-max" type="number" max="1240" value="1240" class="form-control">

                                    <button type="button" class="btn filter-price-btn">Ok</button>
                                </div>

                                <div id="filter-price-element" data-min="0" data-max="1240" data-initial-value="[0, 1240]"></div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-sm btn-filter">Aplikovať filter</button>
                </div>

                <div class="product-list-content">
                    <div class="product-list-item-row">
                        <?php for ($x = 1; $x <= (8); $x++): ?>
                        <div class="product-list-item-col">
                            <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie', './img/product-list/product-list-image-1.jpg', false, hrefReturn('product-detail.php')); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(78.75, null, 8, false, false, 'Aplikačná fólia 3M IAT papierová', 'Plotrové fólie', './img/product-list/product-list-image-2.jpg', false, hrefReturn('product-detail-v2.php')); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(null, null, 0, false, false, 'Laserová gravírka HSG Z4030 RF', 'Gravírky laserové', './img/product-list/product-list-image-3.jpg', false, hrefReturn('product-detail-v3.php')); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(null, null, 2, false, false, 'Dvojhlavová sublimačná tlačiareň XpertJet 1682WR', 'Sublimačné tlačiarne', './img/product-list/product-list-image-4.jpg', false, hrefReturn('product-detail-v4.php')); ?>
                        </div>
                        <?php endfor; ?>
                    </div>

                    <div class="product-list-bottom">
                        <div class="product-list-progressbar">
                            Pozreli ste 32 z 1089 produktov

                            <div class="product-list-progressbar-tack">
                                <div class="product-list-progressbar-track-active" style="width: 12%;"></div>
                            </div>
                        </div>

                        <div class="product-list-bottom-right">
                            <button class="btn btn-primary">Zobraziť viac</button>

                            <?php pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<?php productListCarousel(); ?>

<?php newsletter(); ?>

<!--<div class="container">-->
<!--    This is Index!-->
<!---->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!---->
<!---->
<!--    <div class="product-list-item-row">-->
<!--        --><?php //for ($x = 1; $x <= (3); $x++): ?>
<!--        <div class="product-list-item-col">-->
<!--            --><?php //productListItem(12.75, 15.84, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
<!--        </div>-->
<!---->
<!--        <div class="product-list-item-col">-->
<!--            --><?php //productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
<!--        </div>-->
<!--        --><?php //endfor; ?>
<!--    </div>-->
<!---->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!--</div>-->


<?php include_once('../php/layout/footer.php'); ?>
