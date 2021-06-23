<?php function productListItem($price, $oldPrice, $stock, $variants, $parameters, $title, $category, $img, $wishlist = false, $href = '#') { ?>
    <div class="product-list-item">
        <article>
            <div>
                <a href="<?php href($href) ?>">
                    <?php if ($oldPrice): ?>
                    <span class="product-list-item-sale-label">- <?php echo number_format(abs((($price / $oldPrice) - 1) * 100), 0) ?>%</span>
                    <?php endif; ?>
                    <img src="<?php echo $img; ?>" alt="Product list item image" >
                </a>

                <form class="product-parameter-color-list">
                <?php if ($variants): ?>
                    <?php productParameterColor('#1F222B'); ?>
                    <?php productParameterColor('#00C4DC'); ?>
                    <?php productParameterColor('#FF8044'); ?>
                    <?php productParameterColor('#3FDC65'); ?>
                    <span class="product-parameter-color-more">+ 12 farieb</span>
                <?php endif; ?>
                </form>

                <a href="#">
                    <h2 class="product-list-item-title"><?php echo $title; ?></h2>
                    <div class="product-list-item-category"><?php echo $category; ?></div>
                </a>

                <?php if ($parameters): ?>
                <div class="product-parameters-list">
                    <a href="#" class="product-parameter">1m</a>
                    <a href="#" class="product-parameter">10m</a>
                    <a href="#" class="product-parameter">15m</a>
                </div>
                <?php endif; ?>
            </div>

            <div>
                <?php if (isset($price)): ?>
                <a href="#">
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
                </a>
                <?php else: ?>
                <a href="#">
                    <div class="product-list-item-request-price">
                        <svg><use xlink:href="#sprite-mail"></use></svg>
                        <span class="desktop-text">Vyžiadať si dobru cenu</span>
                        <span class="mobile-text">Vyžiadať si cenu</span>
                    </div>
                </a>
                <?php endif; ?>

                <div class="product-list-item-footer">
                    <a href="#" class="product-list-item-stock <?php echo $stock > 0 ? 'available' : '' ?>">
                        <?php echo $stock > 0 ? "Skladom ${stock} ks" : 'Nie je skladom' ?>
                    </a>

                    <div class="product-list-item-actions">
                        <?php if ($stock <= 0 || $wishlist): ?>
                        <a href="#" class="action">
                            <svg class="stroke-primary fill-primary">
                                <use xlink:href="#sprite-heart"></use>
                            </svg>
                        </a>
                        <?php else: ?>
                        <a href="#" class="action">
                            <svg class="stroke-gray-dark fill-none">
                                <use xlink:href="#sprite-heart"></use>
                            </svg>
                        </a>
                        <?php endif; ?>

                        <?php if (isset($price) && $stock > 0): ?>
                        <a href="#" class="action"
                           <?php if ($wishlist): ?>
                           data-toggle="modal"
                           data-target="#wishlist-product-detail"
                            <?php endif; ?>
                        >
                            <svg class="stroke-success"><use xlink:href="#sprite-shopping-cart"></use></svg>
                        </a>
                        <?php endif; ?>

                        <?php if ($stock <= 0): ?>
                            <a href="#" class="action">
                                <svg class="stroke-primary"><use xlink:href="#sprite-mail"></use></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
<?php } ?>
