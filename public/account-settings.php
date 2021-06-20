<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 3;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-main-content-header">
    <h1>Nastaviť nove heslo</h1>
</div>

<div>
    <div class="row">
        <div class="col-xs-6">
            <form>
                <?php input('oldpw', 'Stare heslo') ?>
                <?php input('newpw', 'Nove heslo') ?>
                <?php input('newpwagain', 'Nove heslo znova') ?>
                <button class="btn btn-primary mt-2">Uložiť</button>
            </form>

            <div class="mt-5">
                <div class="account-main-content-header">
                    <h1>Nastaviť nove heslo</h1>
                </div>

                <form>
                    <?php input('email', 'Prihlasovací/komunikačný e-mail', 'fero@ui42.com') ?>
                    <button class="btn btn-primary mt-2">Uložiť</button>
                </form>
            </div>

            <div class="mt-5">
                <div class="account-main-content-header">
                    <h1>Newsletter</h1>
                </div>

                <form>
                    <?php checkbox('Súhlas so zasielaním noviniek/newslettera', 'email') ?>
                    <button class="btn btn-primary mt-2">Uložiť</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
