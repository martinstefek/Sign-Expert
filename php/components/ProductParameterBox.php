<?php function productParameterBox($title, $price, $priceNote = '/meter', $showFakeRadio = false) { ?>
    <label class="product-parameter-box">
        <input type="radio" name="product-parameter-box">
        <span class="product-parameter-box-fake-input">
            <?php if ($showFakeRadio): ?>
                <span class="product-parameter-box-fake-input-radio"></span>
            <?php endif; ?>

            <span class="product-parameter-box-name"><?php echo $title; ?></span>

            <span class="product-parameter-box-info">
                <?php if ($price): ?>
                <span class="product-parameter-box-price"><?php echo number_format($price, 2, ',', ' '); ?> €</span>
                <?php endif; ?>
                <span class="product-parameter-box-unit"><?php echo $priceNote ?></span>
            </span>
        </span>
    </label>
<?php } ?>
