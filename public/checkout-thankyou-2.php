<?php
include_once('../php/config.php');

$checkoutProgressBar = false;

include_once('../php/layout/checkout/header.php')
?>

<section class="container">
    <div class="checkout-thank-you">
        <div class="checkout-thank-you-header">
            <div class="checkout-thank-you-image">
                <img src="img/thankyoupage/thankyou-error.svg" alt="Thank you error" width="100" height="100">
            </div>

            <h1 class="checkout-thank-you-title">Platba nebola spracovaná</h1>
            <div class="checkout-thank-you-description">Počas transakcie došlo pravdepodobne k prerušeniu spojenia.
                V tomto prípade odporúčame transakciu opakovať alebo
                zaplatiť iným spôsobom!
            </div>
        </div>

        <div class="checkout-thank-you-body">
            <?php order('account-order-6', 'Čaká na zaplatenie', 'danger', 3, false, true, false, false) ?>
        </div>

        <?php thankYouBottomButtons(); ?>
    </div>
</section>

<?php include_once('../php/layout/checkout/footer.php') ?>
