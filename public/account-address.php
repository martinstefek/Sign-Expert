<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 2;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-main-content-header">
    <h1>Adresa pre doručenie</h1>

    <div class="account-main-content-header-actions">
        <a href="#" class="btn btn-primary btn-icon">
            <svg class="icon fill-white"><use xlink:href="#sprite-plus"></use></svg>
            Pridať novu
        </a>
    </div>
</div>

<div>
    <div class="row">
        <?php for ($x = 1; $x <= 3; $x++): ?>
        <div class="col-xs-6">
            <div class="account-address">
                <h2 class="account-address-title">Sibírska 62</h2>

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

                <a href="#" class="btn btn-bordered btn-icon mr-1">
                    <svg class="icon fill-primary"><use xlink:href="#sprite-pencil"></use></svg>
                    Upraviť
                </a>

                <a href="#" class="btn btn-bordered">
                    Zmazať
                </a>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
