<?php function checkoutFooterActions($backHref, $continueHref) { ?>
    <div class="checkout-bottom-actions">
        <a href="<?php echo $backHref ?>" class="btn btn-transparent btn-icon checkout-bottom-action-back">
            <svg class="icon fill-primary stroke-primary">
                <use xlink:href="#sprite-chevron-left"></use>
            </svg>

            Späť
        </a>

        <a href="<?php echo $continueHref ?>" class="btn btn-success btn-icon-right checkout-bottom-action-continue">
            Pokračovať

            <svg class="icon fill-white stroke-white">
                <use xlink:href="#sprite-chevron-right"></use>
            </svg>
        </a>
    </div>
<?php } ?>

