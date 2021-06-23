<?php function checkoutProgressItem($text, $href, $done, $active) { ?>
    <?php if ($done): ?>
        <a href="<?php echo $href; ?>" class="checkout-progress-item done">
            <?php echo $text; ?>
        </a>
    <?php else: ?>
        <div class="checkout-progress-item <?php echo $active ? 'active' : '' ?>">
            <?php echo $text; ?>
        </div>
    <?php endif; ?>
<?php } ?>