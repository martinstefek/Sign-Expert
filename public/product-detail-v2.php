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
                <div id="product-detail-gallery" class="product-detail-gallery">
                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>
                </div>

                <div id="product-detail-gallery-thumbnails" class="product-detail-gallery-thumbnails">
                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-thumbnail-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-thumbnail-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-thumbnail-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>

                    <a href="img/product-detail/product-detail.jpg" class="product-detail-gallery-thumbnail-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Product image">
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-offset-1 col-xl-5 product-detail-main-content">
                <div>
                    <h1 class="product-detail-title">SignFlex Screen Green 25</h1>

                    <div class="product-detail-description">
                        SignFlex Screen je 100% teplom transferovateľná polyuretánová fólia výnimočná svojim dizajnom… <span class="text-primary">Čítať viac</span>
                    </div>

                    <div class="product-detail-code">Kód: SXS GREEN25</div>

                    <form>
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
                                Dĺžka návinu:
                            </div>

                            <div class="product-parameter-box-list">
                                <?php productParameterBox('od 1m', 6.58); ?>
                                <?php productParameterBox('od 10m', 5.60); ?>
                                <?php productParameterBox('od 50m', 5.20); ?>
                            </div>
                        </div>

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
                                <div class="input-number-with-controls">
                                    <button class="button-minus" type="button" data-toggle="input-number-decrease" data-target="#product-detail-amount">
                                        <svg class="icon fill-primary"><use xlink:href="#sprite-minus"></use></svg>
                                    </button>

                                    <input id="product-detail-amount" type="number" min="1" value="9">

                                    <button class="button-plus" type="button" data-toggle="input-number-increase" data-target="#product-detail-amount">
                                        <svg class="icon fill-primary"><use xlink:href="#sprite-plus"></use></svg>
                                    </button>
                                </div>

                                <div class="product-detail-button-wrap">
                                    <div class="lucrative-offer-popup">Ihneď ušetrite 6,58 €</div>
                                    <a href="<?php href('checkout-login.php') ?>" class="btn btn-success product-detail-button" type="submit" id="add-to-cart">+ 1 meter do košíka </a>
                                </div>
                            </div>
                        </div>
                    </form>

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
            <button data-toggle="accordion" data-parent="#product-detail-accordion" data-target="#product-detail-info" class="btn product-detail-accordion-trigger">Popis produktu</button>
            <button data-toggle="accordion" data-parent="#product-detail-accordion" data-target="#product-detail-info-2" class="btn product-detail-accordion-trigger">Informácie o doprave</button>
        </div>
    </div>

    <?php productDetailAccordion('product-detail-info', true); ?>
    <?php productDetailAccordion('product-detail-info-2'); ?>
</section>

<?php productListCarousel('Súvisiace produkty:', 'product-list-carousel-section-detail'); ?>
<?php productListCarousel(); ?>

<?php newsletter(); ?>


<?php include_once('../php/layout/footer.php'); ?>
