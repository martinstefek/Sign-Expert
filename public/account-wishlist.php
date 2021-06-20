<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 3;

addFooterContent('<script src="./js/wishlist.js"></script>');
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-main-content-header">
    <h1>Nákupný zoznam</h1>
</div>

<div class="account-wishlist">
    <div class="product-list-item-row">
        <div class="product-list-item-col">
            <?php productListItem(3.55, null, 12, false, false, 'Sublimačná fľaša 600 ml strieborná', 'Sublimačné fľašky', './img/product-list/product-list-image-5.jpg', true); ?>
        </div>

        <div class="product-list-item-col">
            <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie', './img/product-list/product-list-image-2.jpg', true); ?>
        </div>

        <div class="product-list-item-col">
            <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie', './img/product-list/product-list-image-1.jpg', true); ?>
        </div>
    </div>

    <div class="modal modal-wishlist-product-detail fade" id="wishlist-product-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg class="icon icon-close">
                            <use xlink:href="#sprite-cancel"></use>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">

                    <section class="product-detail">
                        <div class="row row-align-start">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4 mb-5">
                                <?php productDetailGallery(); ?>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-8 product-detail-main-content">
                                <?php productDetailMainContent(false); ?>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-transparent btn-icon-right btn-product-link">
                        Detail produktu
                        <svg class="icon stroke-primary">
                            <use xlink:href="#sprite-chevron-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
