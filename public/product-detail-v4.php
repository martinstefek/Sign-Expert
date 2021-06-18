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

                    <div class="product-detail-availability">
                        <div class="product-detail-additional-info text-danger">
                            <svg class="icon stroke-danger"><use xlink:href="#sprite-cancel-circled"></use></svg>
                            Nie je skladom
                        </div>
                    </div>

                    <form class="product-detail-request-price-form">
                        <h3 class="product-detail-request-price-form-title">Žiadosť o cenovú ponuku</h3>
                        <p class="product-detail-request-price-description">Vyplňte prosím Vaše kontaktné údaje a my Vás budeme obratom kontaktovať.</p>
                        
                        <div class="form-group">
                            <input id="name" type="text" class="form-control" placeholder="Meno">
                            <label for="name" class="form-label">Meno</label>
                        </div>

                        <div class="form-group floating-label">
                            <input id="name" type="email" class="form-control" placeholder="E-mail" required="true">
                            <span class="form-error">Nesprávne zadaný e-mail</span>
                            <label for="name" class="form-label">E-mail</label>
                        </div>

                        <div class="form-group floating-label">
                            <input id="name" type="text" class="form-control" placeholder="Telefónne číslo">
                            <label for="name" class="form-label">Telefónne číslo</label>
                            <div class="mt-1 text-faded small">Vzor: +421 944 111 222</div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-icon-right mt-2">
                            Odoslať
                            <svg class="icon stroke-white"><use xlink:href="#sprite-chevron-right"></use></svg>
                        </button>

                        <div class="mt-1 text-faded small">Odoslaním súhlasíte so spracovaním osobných údajov.</div>
                    </form>
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
