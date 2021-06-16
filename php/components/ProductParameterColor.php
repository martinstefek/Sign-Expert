<?php function productParameterColor($color) { ?>
    <label class="product-parameter-color">
        <input type="radio" name="product-parameter-color">
        <span class="product-parameter-color-fake-input" style="background-color: <?php echo $color; ?> "></span>
    </label>
<?php } ?>
