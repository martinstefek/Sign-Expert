<?php
include_once('../php/config.php');

$checkoutActiveIndex = 2;

include_once('../php/layout/checkout/header.php')
?>

<div>
    <div class="row">
        <div class="col-xs-12 col-lg-6 col-xl-5">
            <div>
                <section class="checkout-section">
                    <h1 class="checkout-title">Spôsob platby</h1>

                    <form>
                        <div class="checkout-border-box-item">
                            <div class="checkout-border-box-item-header">
                                <?php radio('Platba vopred prevodom', 'payment_method', true, true); ?>

                                <div class="checkout-border-box-item-price">
                                    Zadarmo
                                </div>
                            </div>

                            <div class="checkout-border-box-item-content">
                                Prosíme, neuhrádzajte zálohu automaticky, bez potvrdenia
                                o dostupnosti tovaru vo Vašej objednávke. Po spracovaní objednávky a zarezervovaní tovaru Vám bude zaslaná výzva
                                na úhradu zálohy spolu s podkladmi pre vykonanie platby.
                                Tovar bude odoslaný po pripísaní platby na náš účet.
                            </div>
                        </div>

                        <div class="checkout-border-box-item">
                            <div class="checkout-border-box-item-header">
                                <?php radio('Platba kartou cez TRUSTPAY', 'payment_method', false, true); ?>

                                <div class="checkout-border-box-item-price">
                                    Zadarmo
                                </div>
                            </div>

                            <div class="checkout-border-box-item-content">
                                <img class="mr-1" src="img/payment-methods/mastercard.jpg" alt="Master" width="40" height="28">
                                <img class="mr-1" src="img/payment-methods/visa.jpg" alt="Visa" width="40" height="28">
                                <img class="mr-1" src="img/payment-methods/paypal.jpg" alt="Pay pal" width="40" height="28">
                                <img class="mr-1" src="img/payment-methods/apple-pay.jpg" alt="Apple Pay" width="40" height="28">
                            </div>
                        </div>

                        <div class="checkout-border-box-item">
                            <div class="checkout-border-box-item-header">
                                <?php radio('Dobierka (hotovosť pri prevzatí)', 'payment_method', false, true); ?>

                                <div class="checkout-border-box-item-price">
                                    + 1,25 €
                                </div>
                            </div>
                        </div>
                    </form>
                </section>

                <section class="checkout-section">
                    <h1 class="checkout-title">Spôsob doručenia</h1>

                    <form>
                        <div class="checkout-border-box-item">
                            <div class="checkout-border-box-item-header">
                                <?php radio('Kuriér na adresu', 'delivery_type', true, true); ?>

                                <div class="checkout-border-box-item-price">
                                    4,45 €
                                </div>
                            </div>

                            <div class="checkout-border-box-item-content">
                                Zásielky tovarov, ktoré objemovo presahujú možnosť zaslania v obálke, budú preklasifikované o hmotnostnú kategóriu vyššie, teda na 5 kilogramov, aj v prípade, že tovar má hmotnosť nižšiu ako 1kg.
                            </div>
                        </div>

                        <div class="checkout-border-box-item">
                            <div class="checkout-border-box-item-header">
                                <?php radio('Osobné vyzdvihnutie', 'delivery_type', false, true); ?>

                                <div class="checkout-border-box-item-price">
                                    Zadarmo
                                </div>
                            </div>
                        </div>
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

    <?php checkoutFooterActions(hrefReturn('checkout-personal-info.php'), hrefReturn('checkout-summary.php')) ?>
</div>

<?php include_once('../php/layout/checkout/footer.php') ?>
