<?php function productParameterBoxLarge($title, $price, $label = false) { ?>
    <label class="product-parameter-box product-parameter-box-large">
        <input type="radio" name="product-parameter-box">
        <span class="product-parameter-box-fake-input">
            <span class="product-parameter-box-fake-input-radio"></span>
            <span class="product-parameter-box-name"><?php echo $title; ?></span>

            <span class="product-parameter-box-info">
                <span class="product-parameter-box-price"><?php echo number_format($price, 2, ',', ' '); ?> €</span>
                <span class="product-parameter-box-unit">/meter</span>
            </span>

            <?php if(!empty($label)): ?>
            <span class="product-parameter-box-label"><?php echo $label ?></span>
            <?php endif; ?>
        </span>
    </label>
<?php } ?>
