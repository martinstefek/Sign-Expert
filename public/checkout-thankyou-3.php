<?php
include_once('../php/config.php');

$checkoutProgressBar = false;

include_once('../php/layout/checkout/header.php')
?>

<section class="container">
    <div class="checkout-thank-you">
        <div class="checkout-thank-you-header">
            <div class="checkout-thank-you-image">
                <img src="img/thankyoupage/thankyou-warning.svg" alt="Thank you warning" width="100" height="100">
            </div>

            <h1 class="checkout-thank-you-title">Objednávka bola prijatá a čaká na schválenie</h1>
            <div class="checkout-thank-you-description">Ďakujeme za vašu objednávku. V priebehu 24 hodín Vás budeme kontaktovať ohľadom možnosti dodania požadovaného tovaru. Objednávku máte uloženú v sekcii <a href="#">Objednávky a faktúry</a> v klientskej zóne.
            </div>
        </div>

        <div class="checkout-thank-you-body">
            <?php order('account-order-7', 'Čaká na schválenie', 'danger', 3, false, true, true, false) ?>
        </div>

        <?php thankYouBottomButtons(); ?>
    </div>
</section>

<?php include_once('../php/layout/checkout/footer.php') ?>
