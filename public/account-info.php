<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 1;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-main-content-header">
    <h1>ui 42 spol. s r.o.</h1>

    <div class="account-main-content-header-actions">
        <a href="<?php href('account-info-edit.php') ?>" class="btn btn-bordered btn-icon">
            <svg class="icon fill-primary"><use xlink:href="#sprite-pencil"></use></svg>
            Upraviť
        </a>
    </div>
</div>

<div>
    <table class="table account-info-table">
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

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
