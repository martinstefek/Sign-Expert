<?php
include_once('../php/config.php');

$loggedIn = true;
$mainBgActive = false;
$accountNavSelectedIndex = 0;
?>

<?php include_once('../php/layout/header.php'); ?>
<?php include_once('../php/layout/account/accountTop.php'); ?>

<div class="account-orders">
    <?php order('account-order-1', 'Čaká na zaplatenie', 'danger', 3, false, true, false) ?>
    <?php order('account-order-2', 'Prijatá', 'warning', 6, false, true, false) ?>
    <?php order('account-order-3', 'Spracováva sa', 'info', 3, true, false, false) ?>
    <?php order('account-order-4', 'Vybavená', 'success', 3, true, false, false) ?>
    <?php order('account-order-5', 'Doručená', 'success text-success', 3, true, false, false) ?>
    <?php order('account-order-6', 'Čaká na zaplatenie', 'danger', 3, false, true, false) ?>
    <?php order('account-order-7', 'Čaká na zaplatenie', 'danger', 3, false, true, true) ?>
</div>

<?php include_once('../php/layout/account/accountBottom.php'); ?>
<?php include_once('../php/layout/footer.php'); ?>
