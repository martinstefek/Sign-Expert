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
                <?php productDetailMainContent(); ?>
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
