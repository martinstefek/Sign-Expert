<?php
include_once('../php/config.php');

$checkoutProgressBar = false;

include_once('../php/layout/checkout/header.php')
?>

<section class="container">
    <div class="checkout-thank-you">
        <div class="checkout-thank-you-header">
            <div class="checkout-thank-you-image">
                <img src="img/thankyoupage/thankyou-success.svg" alt="Thank you success" width="100" height="100">
            </div>

            <h1 class="checkout-thank-you-title">Platba bola úspešne spracovaná</h1>
            <div class="checkout-thank-you-description">Ďakujeme za vašu onjednávku. Na Váš e-mail <span class="text-success font-weight-medium">olex@ui42.com</span>
                Vám bolo zaslané potvrdenie o prijatí objednávky ako aj jej kópia.
                V krátkom čase Vás budeme kontaktovať.
            </div>
        </div>

        <div class="checkout-thank-you-body">
            <?php order('account-order-2', 'Prijatá', 'warning', 6, false, true, false, false) ?>
        </div>

        <?php thankYouBottomButtons(); ?>
    </div>
</section>

<?php include_once('../php/layout/checkout/footer.php') ?>
