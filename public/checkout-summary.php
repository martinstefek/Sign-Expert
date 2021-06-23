<?php
include_once('../php/config.php');

$checkoutActiveIndex = 3;

include_once('../php/layout/checkout/header.php')
?>

<div>
    <div class="row">
        <div class="col-xs-12 col-lg-4">
            <div>
                <section class="checkout-section">
                    <h1 class="checkout-title">Fakturačna adresa</h1>

                    <div class="account-address">
                        <h2 class="account-address-title account-address-title-emphasised">Sibírska 62</h2>

                        <table class="table table-sm mb-3">
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
            </div>
        </div>

        <div class="col-xs-12 col-lg-4">
            <div>
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

                        <table class="table table-sm mb-3">
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
                </section>
            </div>
        </div>

        <div class="col-xs-12 col-lg-4">
            <div>
                <section class="checkout-section">
                    <h1 class="checkout-title">Adresa doručenia</h1>

                    <div>
                        <?php select('payment_method', 'Payment Method', 1,
                            [
                                0 => [
                                    'text' => 'Platba vopred prevodom',
                                ],

                                1 => [
                                    'text' => 'Platba kartou cez TRUSTPAY',
                                ],

                                2 => [
                                    'text' => 'Dobierka (hotovosť pri prevzatí)',
                                ]
                            ],

                        false,
                        'Zmeniť',
                        ); ?>

                        <div class="form-group">
                            <div class="fake-input-box form-control">
                                <div class="row">
                                    <div class="col-xs-8">Kuriér na adresu</div>
                                    <div class="col-xs-4 text-faded text-right">4,45 €</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div>
        <div class="checkout-final-summary-table-wrap">
            <table class="table checkout-final-summary-table">
                <thead>
                    <tr>
                        <th>Názov produktu</th>
                        <th>Dostupnosť</th>
                        <th class="text-right">Množstvo</th>
                        <th class="text-right">Cena za kus</th>
                        <th class="text-right">Cena spolu</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($x = 1; $x <= 3; $x++): ?>
                    <tr>
                        <td>
                            <div class="checkout-final-summary-item-image-title">
                                <img src="img/product-detail/product-detail.jpg" alt="Product detail image" width="80" height="60">
                                <div class="checkout-final-summary-item-title">SignFlex Screen Green 25</div>
                            </div>
                        </td>

                        <td>
                            <div class="product-availability text-success">
                                <svg class="icon">
                                    <use xlink:href="#sprite-check-circled"></use>
                                </svg>

                                Skladom
                            </div>
                        </td>

                        <td class="text-right">
                            <span class="large">40</span>
                            <span class="text-faded">metrov</span>
                        </td>

                        <td class="text-right">
                            <span class="large">5,20 €</span>
                            <span class="text-faded">bez DPH</span>
                        </td>

                        <td class="text-right">
                            <span class="large">224,00 €</span>
                            <span class="text-faded">bez DPH</span>
                        </td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

        <div class="final-summary-box">
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
                    <td>Doprava:</td>
                    <td class="font-weight-medium">4,45 €</td>
                </tr>

                <tr>
                    <td class="large">Spolu s DPH:</td>
                    <td class="large font-weight-bold">407,65 €</td>
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

            <form class="pt-5">
                <div class="form-group">
                    <?php checkbox('Prečítal/a som si <a href="#">všeobecné obchodné podmienky</a> a súhlasím s nimi', 'terms', 'font-weight-medium'); ?>
                </div>

                <div class="form-group">
                    <?php checkbox('Súhlas so zasielaním noviniek/newslettera', 'newsletter', 'font-weight-medium'); ?>
                </div>

                <a href="#" class="btn btn-success btn-full btn-icon-right mt-3">
                    Objednať s povinnosťou platby

                    <svg class="icon fill-white stroke-white">
                        <use xlink:href="#sprite-chevron-right"></use>
                    </svg>
                </a>
            </form>
        </div>
    </div>
</div>

<?php include_once('../php/layout/checkout/footer.php') ?>
