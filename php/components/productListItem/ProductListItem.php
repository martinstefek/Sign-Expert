<?php function productListItem($price, $oldPrice, $stock, $variants, $parameters, $title, $category) { ?>
    <a href="#" class="product-list-item">
        <article>
            <div>
                <?php if ($oldPrice): ?>
                <span class="product-list-item-sale-label">- <?php echo number_format(abs((($price / $oldPrice) - 1) * 100), 0) ?>%</span>
                <?php endif; ?>
                <img src="img/product-list-image.jpg" alt="Product list item image" >

                <?php if ($variants): ?>
                <form class="product-variants-list">
                    <label class="product-variant">
                        <input type="radio" name="product-variant">
                        <span class="product-variant-fake-input" style="background-color: #1F222B"></span>
                    </label>

                    <label class="product-variant">
                        <input type="radio" name="product-variant">
                        <span class="product-variant-fake-input" style="background-color: #00C4DC"></span>
                    </label>

                    <label class="product-variant">
                        <input type="radio" name="product-variant">
                        <span class="product-variant-fake-input" style="background-color: #FF8044"></span>
                    </label>

                    <label class="product-variant">
                        <input type="radio" name="product-variant">
                        <span class="product-variant-fake-input" style="background-color: #3FDC65"></span>
                    </label>

                    <span class="product-variants-more">+ 12 farieb</span>
                </form>
                <?php endif; ?>

                <h2 class="product-list-item-title"><?php echo $title; ?></h2>
                <div class="product-list-item-category"><?php echo $category; ?></div>

                <?php if ($parameters): ?>
                <div class="product-parameters-list">
                    <span class="product-parameter">1m</span>
                    <span class="product-parameter">10m</span>
                    <span class="product-parameter">15m</span>
                </div>
                <?php endif; ?>
            </div>

            <div>
                <?php if (isset($price)): ?>
                <div class="product-list-item-price">
                    <div>
                        <?php if (isset($oldPrice)): ?>
                        <span class="old-price"><?php echo number_format($oldPrice, 2, ',', ' '); ?> €</span>
                        <?php endif; ?>

                        <span class="price"><?php echo number_format($price, 2, ',', ' '); ?> €</span>
                        <span class="vat">bez DPH</span>
                    </div>
                    <div>
                        <strong class="non-vat-price"><?php echo  number_format($price * 1.2, 2, ',', ' '); ?> €</strong>
                        <span class="vat">s DPH</span>
                    </div>
                </div>
                <?php else: ?>
                <div class="product-list-item-request-price">
                    <svg><use xlink:href="#sprite-facebook"></use></svg>
                    Vyžiadať si dobru cenu
                </div>
                <?php endif; ?>

                <div class="product-list-item-footer">
                    <div class="product-list-item-stock <?php echo $stock > 0 ? 'available' : '' ?>">
                        <?php echo $stock > 0 ? "Skladom ${stock} ks" : 'Nie je skladom' ?>
                    </div>

                    <div class="product-list-item-actions">
                        <span class="action">
                            <svg class="fill-gray-dark"><use xlink:href="#sprite-facebook"></use></svg>
                        </span>

                        <?php if (isset($price)): ?>
                        <span class="action">
                            <svg class="fill-success"><use xlink:href="#sprite-facebook"></use></svg>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
    </a>
<?php } ?>