<?php function productParameterColor($color, $tooltipProduct = true) { ?>
    <label class="product-parameter-color">
        <input type="radio" name="product-parameter-color">
        <span class="product-parameter-color-fake-input" style="background-color: <?php echo $color; ?> "
            <?php if(!$tooltipProduct): ?>
                data-toggle="tooltip" data-placement="top" title="Light magenta"
            <?php endif; ?>
        ></span>

        <?php if($tooltipProduct): ?>
        <span class="product-info-tooltip">
            <img src="img/product-detail/product-detail.jpg" alt="Product image">

            <span class="product-info-tooltip-name">SignFlex Screen Orange 07</span>
            <span class="product-info-tooltip-price">
                <span class="faded">od</span>
                6,58 €
                <span class="faded">bez DPH</span>
            </span>
            <span class="product-info-tooltip-price-with-vat">
                <span class="faded">od</span>
                7,90 €
                <span class="faded">bez DPH</span>
            </span>
            <span class="product-info-tooltip-availability text-success">Skladom 15 m.</span>
        </span>
        <?php endif; ?>

        <div class="tooltip bottom" role="tooltip">
            <div class="tooltip-arrow"></div>
            <div class="tooltip-inner">
                Some tooltip text!
            </div>
        </div>
    </label>
<?php } ?>
