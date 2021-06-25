<?php
include_once('../php/config.php');

$checkoutActiveIndex = 1;

include_once('../php/layout/checkout/header.php')
?>

<div>
    <div class="row">
        <div class="col-xs-12 col-lg-6 col-xl-5">
            <div>
                <section class="checkout-section">
                    <h1 class="checkout-title">Fakturačna adresa</h1>

                    <div class="account-address">
                        <div class="account-address-header">
                            <h2 class="account-address-title account-address-title-emphasised">Sibírska 62</h2>

                            <a href="#" class="btn btn-bordered btn-icon">
                                <svg class="icon fill-primary">
                                    <use xlink:href="#sprite-pencil"></use>
                                </svg>

                                Upraviť
                            </a>
                        </div>

                        <table class="table mb-3">
                            <tr>
                                <th>IČO</th>
                                <td>35713003</td>
                            </tr>

                            <tr>
                                <th>DIČ</th>
                                <td>2020227770</td>
                            </tr>

                            <tr>
                                <th>IČ DPH</th>
                                <td><i>Nie je platiteľom DPH</i></td>
                            </tr>

                            <tr>
                                <th>Ulica a číslo</th>
                                <td>Sibírska 62</td>
                            </tr>

                            <tr>
                                <th>Mesto</th>
                                <td>Bratislava</td>
                            </tr>

                            <tr>
                                <th>Krajina</th>
                                <td>Slovenska Republika</td>
                            </tr>

                            <tr>
                                <th>PSČ</th>
                                <td>831 02</td>
                            </tr>

                            <tr>
                                <th>Meno</th>
                                <td>Fero Novotny</td>
                            </tr>

                            <tr>
                                <th>Fakturačný e-mail</th>
                                <td>fero@ui42.com</td>
                            </tr>

                            <tr>
                                <th>Telefónne číslo</th>
                                <td>+421 944 111 222</td>
                            </tr>
                        </table>
                    </div>
                </section>

                <section class="checkout-section">
                    <h1 class="checkout-title">Adresa doručenia</h1>

                    <div class="account-address">
                        <h2 class="account-address-title">Sibírska 62</h2>

                        <div class="account-choose-address-section">
                            <div>
                                <?php select('address_id', 'Address', 0,
                                    [
                                        0 => [
                                            'text' => 'Sibírska 62, 831 02, Bratislava',
                                        ],

                                        1 => [
                                            'text' => 'Haydnova 20B, 811 02, Bratislava',
                                        ]
                                    ],
                                ); ?>
                            </div>

                            <a href="#" class="btn btn-bordered btn-icon">
                                <svg class="icon fill-primary">
                                    <use xlink:href="#sprite-pencil"></use>
                                </svg>

                                Upraviť
                            </a>
                        </div>

                        <table class="table mb-3">
                            <tr>
                                <th>Ulica a číslo</th>
                                <td>Sibírska 62</td>
                            </tr>

                            <tr>
                                <th>Mesto</th>
                                <td>Bratislava</td>
                            </tr>

                            <tr>
                                <th>Krajina</th>
                                <td>Slovenska Republika</td>
                            </tr>

                            <tr>
                                <th>PSČ</th>
                                <td>831 02</td>
                            </tr>

                            <tr>
                                <th>Meno</th>
                                <td>Fero Novotny</td>
                            </tr>

                            <tr>
                                <th>E-mail</th>
                                <td>fero@ui42.com</td>
                            </tr>

                            <tr>
                                <th>Telefónne číslo</th>
                                <td>+421 944 111 222</td>
                            </tr>
                        </table>
                    </div>

                    <a href="#" class="btn btn-primary btn-icon">
                        <svg class="icon fill-white stroke-white">
                            <use xlink:href="#sprite-plus"></use>
                        </svg>

                        Pridať novú
                    </a>
                </section>
            </div>
        </div>

        <div class="col-xs-12 col-xl-5 col-xl-offset-2 col-lg-6">
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
                                        <div class="product-availability text-primary product-horizontal-list-item-availability">
                                            <svg class="icon">
                                                <use xlink:href="#sprite-watch"></use>
                                            </svg>

                                            Na objednávku

                                            <span data-toggle="tooltip" data-placement="bottom" title="Tooltip message">
                                                <svg class="info-icon icon fill-gray-dark">
                                                    <use xlink:href="#sprite-info"></use>
                                                </svg>
                                            </span>
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

                <div class="alert alert-warning checkout-delivery-alert">
                    <div class="alert-header">
                        <svg class="icon stroke-primary">
                            <use xlink:href="#sprite-car"></use>
                        </svg>

                        <div class="alert-title">
                            Predpokladaný dátum doručenia
                        </div>
                    </div>

                    <div class="date">
                        21.06.2020
                    </div>

                    <div class="alert-content">
                        Košík obsahuje jednu položku na objednávku do 2 týždňov.
                        Ak si prajete objednávku dostať skôr, upravte počet produktov.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php checkoutFooterActions(hrefReturn('checkout-personal-info.php'), hrefReturn('checkout-personal-info.php')) ?>
</div>

<?php include_once('../php/layout/checkout/footer.php') ?>
