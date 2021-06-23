<?php
include_once ('checkoutProgressItem.php');

function checkoutProgress($activeIndex) { ?>
    <div class="checkout-progress">
        <?php checkoutProgressItem('Prihlásenie', '#', $activeIndex > 0, $activeIndex === 0); ?>
        <?php checkoutProgressItem('Osobné údaje', '#', $activeIndex > 1, $activeIndex === 1); ?>
        <?php checkoutProgressItem('Platba a doručenie', '#', $activeIndex > 2, $activeIndex === 2); ?>
        <?php checkoutProgressItem('Odoslanie objednávky', '#', $activeIndex > 3, $activeIndex === 3); ?>
    </div>
<?php } ?>

