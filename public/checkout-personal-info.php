<?php
include_once('../php/config.php');

$checkoutActiveIndex = 1;

include_once('../php/layout/checkout/header.php')
?>

<div>
    <div class="row">
        <div class="col-xs-12 col-lg-6 col-xl-5">
            <div class="checkout-max-col-width">
                <section class="checkout-section">
                    <h1 class="checkout-title">Zadajte fakturačnú adresu</h1>

                    <form>
                        <?php select('address_country', 'Krajina', 'sk', [
                            'sk' => [
                                'img' => 'img/language/lang-sk.svg',
                                'text' => 'Slovenska Republika',
                            ],
                            'cz' => [
                                'img' => 'img/language/lang-cz.svg',
                                'text' => 'Česká Republika',
                            ],
                            'en' => [
                                'img' => 'img/language/lang-gb.svg',
                                'text' => 'Veľká Británia',
                            ],
                        ], true,) ?>

                        <?php input('company-name', 'Obchodné meno', 'ui42 s.r.o. ') ?>

                        <div class="row">
                            <div class="col-xs-6">
                                <?php input('company-id', 'IČO', '35713003', 'text',) ?>
                            </div>

                            <div class="col-xs-6">
                                <?php input('company-vat-id', 'DIČ', '2020227770', 'text',) ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <?php radio('Som platiteľ DPH', 'vat-payer') ?>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <?php radio('Nie som platiteľ DPH', 'vat-payer', true) ?>
                                </div>
                            </div>
                        </div>

                        <?php input('company-vat-id-2', 'IČ DPH', '', 'text', 'disabled') ?>

                        <?php input('address_street', 'Ulica a číslo', 'Sibírska 62') ?>
                        <div class="row">
                            <div class="col-xs-8">
                                <?php input('address_city', 'Mesto', 'Bratislava') ?>
                            </div>

                            <div class="col-xs-4">
                                <?php input('address_post', 'PSČ', '831 02') ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-6">
                                <?php input('firstname', 'Meno') ?>
                            </div>

                            <div class="col-xs-6">
                                <?php input('lastname', 'Priezvisko') ?>
                            </div>
                        </div>
                        <?php input('phone', 'Telefónne číslo') ?>
                        <?php input('email', 'E-mail na zasielanie faktúr') ?>
                    </form>
                </section>

                <section class="checkout-section">
                    <h1 class="checkout-title">Zadajte adresu doručenia</h1>

                    <form class="form form-inline">
                        <div class="form-group mr-1">
                            <div class="fake-input-box form-control">
                                <?php checkbox('Použiť fakturačnú adresu', 'use-invoice-address', 'text-default font-weight-medium'); ?>
                            </div>
                        </div>
                        <a href="<?php href('checkout-personal-info-add-address.php') ?>" class="btn btn-primary btn-icon">
                            <svg class="icon fill-white stroke-white">
                                <use xlink:href="#sprite-plus"></use>
                            </svg>

                            Pridať novú
                        </a>
                    </form>
                </section>

                <section class="checkout-section">
                    <h1 class="checkout-title">Zadajte údaje pre registráciu</h1>

                    <form>
                        <?php input('login-email', 'E-mail pre prihlásenie') ?>
                        <?php input('checkout-password', 'Heslo') ?>
                    </form>
                </section>
            </div>
        </div>

        <section class="col-xs-12 col-xl-5 col-xl-offset-2 col-lg-6">
            <h1 class="checkout-title">Súhrn objednávky</h1>

            <div class="checkout-summary-product-list">
                <?php for ($x = 1; $x <= 3; $x++): ?>
                    <div class="product-horizontal-list-item">
                        <button class="btn product-horizontal-list-item-remove" aria-label="Odstrániť">
                            <svg class="icon">
                                <use xlink:href="#sprite-cancel"></use>
                            </svg>
                        </button>

                        <a href="#" class="product-horizontal-list-item-img">
                            <img src="img/product-detail/product-detail.jpg" alt="Product detail image">
                        </a>

                        <div class="product-horizontal-list-item-info">
                            <a href="<?php href('product-detail.php'); ?>">
                                <div class="product-horizontal-list-item-title">SignFlex Screen Green 25</div>
                            </a>

                            <div class="row mb-2">
                                <div class="col-xs-6">
                                    <div>
                                        <div class="element-label">Počet metrov:</div>
                                        <?php inputNumberWithControls("shopping-cart-item-${x}"); ?>
                                    </div>
                                </div>

                                <div class="col-xs-6 align-self-end">
                                    <a href="<?php href('product-detail.php'); ?>">
                                        <div class="product-horizontal-list-item-price">
                                            224,00 € <span class="text-faded small">bez DPH</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a href="<?php href('product-detail.php'); ?>">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="product-availability text-success product-horizontal-list-item-availability">
                                            <svg class="icon">
                                                <use xlink:href="#sprite-check-circled"></use>
                                            </svg>

                                            Skladom
                                        </div>
                                    </div>

                                    <div class="col-xs-6 align-self-end">
                                        <div class="product-horizontal-list-item-price-alternative">
                                            5,20 € /meter
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="checkout-summary-box">
                <?php input('coupon', 'Číslo kupónu'); ?>

                <table class="table table-md table-space-between">
                    <tr>
                        <td>Medzisúčet:</td>
                        <td class="font-weight-medium">336,00 €</td>
                    </tr>

                    <tr>
                        <td>DPH 20%:</td>
                        <td class="font-weight-medium">67,20 €</td>
                    </tr>

                    <tr>
                        <td class="large">Spolu s DPH:</td>
                        <td class="large font-weight-bold">403,20 €</td>
                    </tr>
                </table>

                <div class="alert alert-success checkout-delivery-alert">
                    <div class="alert-header">
                        <svg class="icon stroke-success">
                            <use xlink:href="#sprite-car"></use>
                        </svg>

                        <div class="alert-title">
                            Predpokladaný dátum doručenia
                        </div>
                    </div>

                    <div class="date">
                        10.06.2020
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php checkoutFooterActions(hrefReturn('checkout-login.php'), hrefReturn('checkout-payment-delivery.php')) ?>
</div>

<?php include_once('../php/layout/checkout/footer.php') ?>
