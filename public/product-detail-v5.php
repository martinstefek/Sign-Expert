<?php

include_once('../php/config.php');

addFooterContent('<script src="./js/detail.js"></script>');

$loggedIn = false;
$mainBgActive = false;

?>

<?php include_once('../php/layout/header.php'); ?>

<?php breadcrumb([
    'Materiály',
    'Nažehľovacie fólie',
    'Flex',
    'SignFlex Screen',
    'SignFlex Screen Green 25',
]); ?>

<section class="product-detail">
    <div class="container">
        <div class="row row-align-start">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 mb-5">
                <?php productDetailGallery(); ?>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-offset-1 col-xl-5 product-detail-main-content">
                <div>
                    <h1 class="product-detail-title">SignFlex Screen Green 25</h1>

                    <div class="product-detail-description">
                        SignFlex Screen je 100% teplom transferovateľná polyuretánová fólia výnimočná svojim dizajnom… <span class="text-primary">Čítať viac</span>
                    </div>

                    <div class="product-detail-code">Kód: SXS GREEN25</div>

                    <form action="<?php href('checkout-login.php') ?>" id="product-detail-form">
                        <div class="product-parameter">
                            <div class="product-parameter-label">
                                Farba:
                                <span class="font-weight-normal">Green 25</span>
                            </div>

                            <div class="product-parameter-color-list">
                                <?php productParameterColor('#61a375'); ?>
                                <?php productParameterColor('#F66A2E'); ?>
                                <?php productParameterColor('#DDC17F'); ?>
                                <?php productParameterColor('#B80D3B'); ?>
                                <?php productParameterColor('#404D63'); ?>
                                <?php productParameterColor('#F8FAF7'); ?>
                                <?php productParameterColor('#DDC17F'); ?>
                                <?php productParameterColor('#EFD402'); ?>
                                <?php productParameterColor('#FFCE2E'); ?>
                                <?php productParameterColor('#00568D'); ?>
                                <span class="product-parameter-color-more">+ 12 farieb</span>
                            </div>
                        </div>

                        <div class="product-parameter">
                            <div class="product-parameter-label">
                                Druh náplne:
                            </div>

                            <div class="product-parameter-box-list">
                                <?php productParameterBox('Cartrige', false, '440 ml', true); ?>
                                <?php productParameterBox('Fľaša', false, '440 ml / 1000 ml', true); ?>
                                <?php productParameterBox('Bag', false, '440 ml / 1000 ml', true); ?>
                            </div>
                        </div>

                        <div class="product-parameter">
                            <div class="product-parameter-label">
                                Množstvo v ml:
                            </div>

                            <div class="product-parameter-box-list">
                                <?php productParameterBox('440 ml', false, '58,50 €', true); ?>
                                <?php productParameterBox('1000 ml', false, '100,50 €', true); ?>
                            </div>
                        </div>
                    </form>

                    <div class="product-parameter">
                        <div class="product-parameter-label">
                            Cena za meter:
                        </div>

                        <div class="product-detail-price">
                            6,58 €
                            <span class="product-detail-price-faded">bez DPH</span>
                        </div>
                        <div class="product-detail-price-with-vat">
                            7,89 €
                            <span class="product-detail-price-faded">s DPH</span>
                        </div>
                    </div>

                    <div class="product-parameter">
                        <div class="product-parameter-label">
                            Počet metrov:
                        </div>

                        <div class="product-detail-add-to-cart-section">
                            <?php inputNumberWithControls('product-detail-amount') ?>

                            <div class="product-detail-button">
                                <button class="btn btn-success product-detail-button" form="product-detail-form" type="submit" id="add-to-cart">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-detail-availability">
                        <div class="product-detail-additional-info text-success">
                            <svg class="icon stroke-success"><use xlink:href="#sprite-check-circled"></use></svg>
                            Dostupnosť 245 metrov
                        </div>

                        <div class="product-detail-availability-btn">
                            <a href="<?php href('checkout-login.php') ?>" class="btn btn-bordered btn-icon-right" data-toggle="tooltip" data-placement="bottom" title="Pri objednávke viac ako 245 metrov doba dodania tovaru sa zmení z 48 hod. na 2 týždňa.">
                                Objednať viac ako 245 metrov
                                <svg class="icon fill-gray-dark"><use xlink:href="#sprite-info"></use></svg>
                            </a>
                        </div>
                    </div>

                    <div class="product-detail-additional-info text-success">
                        <svg class="icon stroke-success"><use xlink:href="#sprite-car"></use></svg>
                        Doručíme do 48 hod
                    </div>

                    <div class="product-detail-additional-info product-detail-wishlist">
                        <a href="<?php href('account-wishlist.php') ?>">
                            <svg class="icon stroke-gray-dark fill-none"><use xlink:href="#sprite-heart"></use></svg>
                            Pridať do nákupného zoznamu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="product-detail-accordion" class="product-detail-additional-content" data-type="accordion">
    <div class="product-detail-additional-content-header">
        <div class="container">
            <button data-toggle="accordion" data-parent="#product-detail-accordion" data-target="#product-detail-info" aria-controls="product-detail-info" class="btn product-detail-accordion-trigger">Popis produktu</button>
            <button data-toggle="accordion" data-parent="#product-detail-accordion" data-target="#product-detail-info-2" aria-controls="product-detail-info-2" class="btn product-detail-accordion-trigger">Informácie o doprave</button>
        </div>
    </div>

    <?php productDetailAccordion('product-detail-info', true); ?>
    <?php productDetailAccordion('product-detail-info-2'); ?>
</section>

<?php productListCarousel('Súvisiace produkty:', 'product-list-carousel-section-detail'); ?>
<?php productListCarousel(); ?>

<?php newsletter(); ?>


<?php include_once('../php/layout/footer.php'); ?>
