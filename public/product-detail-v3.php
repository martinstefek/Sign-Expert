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

                    <form action="<?php href('checkout-login.php') ?>" id="product-detail-form">
                        <div class="product-parameter">
                            <div class="product-parameter-label">
                                Farba:
                                <span class="font-weight-normal">Green 25</span>
                            </div>

                            <div class="product-parameter-color-list">
                                <?php productParameterColor('#61a375', false); ?>
                                <?php productParameterColor('#F66A2E', false); ?>
                                <?php productParameterColor('#DDC17F', false); ?>
                                <?php productParameterColor('#B80D3B', false); ?>
                                <?php productParameterColor('#404D63', false); ?>
                                <?php productParameterColor('#F8FAF7', false); ?>
                                <?php productParameterColor('#DDC17F', false); ?>
                                <?php productParameterColor('#EFD402', false); ?>
                                <?php productParameterColor('#FFCE2E', false); ?>
                                <?php productParameterColor('#00568D', false); ?>
                                <span class="product-parameter-color-more">+ 12 farieb</span>
                            </div>
                        </div>

                        <div class="product-parameter">
                            <div class="product-parameter-label">
                                Dĺžka návinu:
                            </div>

                            <div class="product-parameter-box-list">
                                <?php productParameterBoxLarge('1 kus', 3); ?>
                                <?php productParameterBoxLarge('Balenie - 36 kusov', 2.8, 'Ušetríte 7,20 €'); ?>
                            </div>
                        </div>
                    </form>

                    <div class="product-parameter">
                        <div class="product-parameter-label">
                            Cena za balenie:
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
                        <div class="product-detail-additional-info text-primary">
                            <svg class="icon stroke-primary"><use xlink:href="#sprite-watch"></use></svg>
                            Tovar na objednávku
                        </div>
                    </div>

                    <div class="product-detail-additional-info text-primary">
                        <svg class="icon stroke-primary"><use xlink:href="#sprite-car"></use></svg>
                        Doručíme do 2 týždňov
                    </div>

                    <div class="product-detail-additional-info product-detail-wishlist">
                        <a href="<?php href('checkout-login.php') ?>">
                            <svg class="icon stroke-primary fill-primary"><use xlink:href="#sprite-heart"></use></svg>
                            Odobrať z nákupného zoznamu
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
