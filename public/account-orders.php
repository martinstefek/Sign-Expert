<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 0;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-orders">
    <div class="account-order">
        <div class="account-order-header">
            <div class="account-order-header-top">
                <div class="account-order-title">Objednávka #2020331000</div>
                <div class="account-order-status danger">Čaká na zaplatenie</div>
            </div>

            <div class="account-order-header-bottom">
                <div class="account-order-base-info">
                    <div class="account-order-label">Dátum vytvorenia</div>
                    <div class="text-default">08.06.2021</div>
                </div>

                <div class="account-order-base-info">
                    <div class="account-order-label">Spolu s DPH</div>
                    <div class="text-default">407,65 €</div>
                </div>

                <div class="account-order-base-info">
                    <div class="account-order-label">Odberateľ</div>
                    <div class="text-default">ui42 spol. s.r.o.</div>
                </div>

                <div class="account-order-base-info">
                    <div class="account-order-label">Dátum doručenia</div>
                    <div class="text-default">48 hodín po zaplatení (Kuriér)</div>
                </div>
            </div>
        </div>

        <div class="account-order-body">
            <div class="row">
                <div class="col-xs-7 account-order-item-list-left-col">
                    <div class="account-order-item-list">
                        <?php for ($x = 1; $x <= 3; $x++): ?>
                        <div class="account-order-item">
                            <a href="#" class="account-order-item-img">
                                <img src="img/product-detail/product-detail.jpg" alt="Product detail image">
                            </a>

                            <a href="#" class="account-order-item-info">
                                <div class="account-order-item-title">SignFlex Screen Green 25</div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div>
                                            <div class="account-order-label">Počet metrov:</div>
                                            40
                                        </div>

                                        <div class="account-order-item-availability">
                                            Skladom
                                        </div>
                                    </div>

                                    <div class="col-xs-6 align-self-end">
                                        <div class="account-order-item-price">
                                            224,00 € <span class="text-faded small"> DPH</span>
                                        </div>

                                        <div class="account-order-item-price-alternative">
                                            5,20 € /meter
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="btn btn-bordered btn-icon-only account-order-item-reorder">
                                <svg class="icon">
                                    <use xlink:href="#sprite-reorder"></use>
                                </svg>
                            </a>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="col-xs-5">
                    <form>
                        <label for="payment-method-1" class="account-order-label">Spôsob platby</label>
                        <?php select('payment-method-1', 'Spôsob platby', 'dobierka', [
                            'dobierka' => ['text' => 'Dobierka (+ 1,25 €)'],
                            'card' => ['text' => 'Platba kartou'],
                            'bank-transfer' => ['text' => 'Platba vopred prevodom'],
                        ], false, 'Zmeniť') ?>

                        <button class="btn btn-success btn-full">
                            Zaplatiť kartou
                        </button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <table class="table table-sm table-space-between account-order-table">
                        <tr>
                            <th>Firma</th>
                            <td>ui42 spol. s.r.o.</td>
                        </tr>

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

                    <table class="table table-sm table-space-between account-order-table">
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
                            <td>Spolu s DPH:</td>
                            <td class="font-weight-medium">407,65 €</td>
                        </tr>
                    </table>
                </div>

                <div class="col-xs-6">
                    <table class="table table-sm table-space-between account-order-table">
                        <tr>
                            <th>Firma/Meno</th>
                            <td>Fero Novotny</td>
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
                            <th>Telefónne číslo</th>
                            <td>+421 944 111 222</td>
                        </tr>

                        <tr>
                            <th>Doprava</th>
                            <td>Kuriér</td>
                        </tr>

                        <tr>
                            <th>Platba</th>
                            <td>Kartou vopred</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="account-order-footer">
            <button class="btn btn-footer-toggle">Detail objednávky</button>

            <div class="account-order-footer-actions">
                <button class="btn btn-bordered btn-icon">
                    <svg class="icon stroke-success">
                        <use xlink:href="#sprite-reorder"></use>
                    </svg>

                    Opakovať objednávku
                </button>

                <button class="btn btn-bordered btn-icon">
                    <svg class="icon stroke-success">
                        <use xlink:href="#sprite-car"></use>
                    </svg>

                    Sledovať zásielku
                </button>
            </div>
        </div>
    </div>
</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
