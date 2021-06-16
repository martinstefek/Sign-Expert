<?php function productParameterBox($title, $price) { ?>
    <label class="product-parameter-box">
        <input type="radio" name="product-parameter-box">
        <span class="product-parameter-box-fake-input">
            <span class="product-parameter-box-name"><?php echo $title; ?></span>

            <span class="product-parameter-box-info">
                <span class="product-parameter-box-price"><?php echo number_format($price, 2, ',', ' '); ?> €</span>
                <span class="product-parameter-box-unit">/meter</span>
            </span>
        </span>
    </label>
<?php } ?>
