<?php include_once('../php/config.php'); ?>
<?php $loggedIn = false; ?>
<?php $mainBgActive = true; ?>

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
                    <div class="col-xs-2 category-wrap">
                        <?php category('Šálky', 65, './img/category/category-5.jpg'); ?>
                    </div>

                    <div class="col-xs-2 category-wrap">
                        <?php category('Hrnčeky', 120, './img/category/category-3.jpg'); ?>
                    </div>

                    <div class="col-xs-2 category-wrap">
                        <?php category('Krígle na pivo', 12, './img/category/category-6.jpg'); ?>
                    </div>

                    <div class="col-xs-2 category-wrap">
                        <?php category('Krígle na pivo', 20, './img/category/category-7.jpg'); ?>
                    </div>

                    <div class="col-xs-2 category-wrap">
                        <?php category('Podložky pod myš', 5, './img/category/category-8.jpg'); ?>
                    </div>

                    <div class="col-xs-2 category-wrap">
                        <?php category('Materiály pre sublimáciu', 128, './img/category/category-2.jpg'); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="section section-padding-top-small">
        <div class="container">
            <div>
                1 - 32 z 1089 produktov
            </div>

            <div class="product-list-top">
                <div class="filters-cancel-list">
                    <button type="button" class="btn btn-bordered btn-sm filter-button-cancel-all">Zrušiť filter</button>

                    <button type="button" class="btn btn-bordered btn-sm">Hrnčeky</button>

                    <button type="button" class="btn btn-bordered btn-sm">Flašky</button>
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
                <div class="product-list-sidebar">
                    Sidebar
                </div>

                <div class="product-list-content">
                    <div class="product-list-item-row">
                        <?php for ($x = 1; $x <= (8); $x++): ?>
                        <div class="product-list-item-col">
                            <?php productListItem(12.75, 15.84, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
                        </div>

                        <div class="product-list-item-col">
                            <?php productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
                        </div>
                        <?php endfor; ?>
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
