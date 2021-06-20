<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 1;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-main-content-header">
    <h1>Upraviť fakturačnú adresu</h1>

    <div class="account-main-content-header-actions">
        <a href="#" class="btn btn-bordered">
            Zrušiť
        </a>

        <a href="#" class="btn btn-primary">
            Uložiť
        </a>
    </div>
</div>

<div>

    <div class="row">
        <div class="col-lg-6">
            <?php input('company-name', 'Obchodné meno', 'ui42 s.r.o. ') ?>

            <?php input('company-id', 'IČO', '35713003', 'text', 'readonly') ?>

            <?php input('company-vat-id', 'DIČ', '2020227770', 'text', 'readonly') ?>

            <div class="form-group">
                <?php radio('Som platiteľ DPH', 'vat-payer') ?>
                <?php radio('Nie som platiteľ DPH', 'vat-payer', true) ?>
            </div>

            <?php input('company-vat-id-2', 'IČ DPH', '', 'text', 'disabled') ?>

            <?php input('address_street', 'Ulica a číslo', 'Sibírska 62') ?>
            <?php input('address_city', 'Mesto', 'Bratislava') ?>
            <?php input('address_post', 'PSČ', '831 02') ?>
        <!--    --><?php //input('address_country', 'Krajina', 'Slovenska Republika') ?>
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
            ]) ?>
            <?php input('firstname', 'Meno', 'Fero') ?>
            <?php input('lastname', 'Priezvisko', 'Novotny') ?>
            <?php input('email', 'Fakturačný e-mail', 'fero@ui42.com') ?>
            <?php input('phone', 'Telefónne číslo', '+421 944 111 222') ?>
        </div>
    </div>

</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
