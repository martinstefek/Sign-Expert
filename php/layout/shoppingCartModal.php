<div id="shopping-cart-modal" class="shopping-cart-modal">
    <div class="shopping-cart-modal-header">
        <div class="shopping-cart-modal-header-title">
            <div class="font-weight-medium">3 položky</div>
            v nákupnom košíku
        </div>

        <button class="btn btn-transparent shopping-cart-modal-close" data-toggle="shopping-cart-modal">
            Zavrieť
        </button>
    </div>

    <div class="shopping-cart-modal-body">
        <div class="shopping-cart-modal-item-list">
            <?php for ($x = 1; $x <= 6; $x++): ?>
            <div class="product-horizontal-list-item">
                <button class="btn product-horizontal-list-item-remove" aria-label="Odstrániť">
                    <svg class="icon">
                        <use xlink:href="#sprite-cancel"></use>
                    </svg>
                </button>

                <a href="#" class="product-horizontal-list-item-img">
                    <img src="img/product-detail/product-detail.jpg" alt="Product detail image">
                </a>

                <div class="product-horizontal-list-item-info">
                    <a href="<?php href('product-detail.php'); ?>">
                        <div class="product-horizontal-list-item-title">SignFlex Screen Green 25</div>
                    </a>

                    <div class="row mb-2">
                        <div class="col-xs-6">
                            <div>
                                <div class="element-label">Počet metrov:</div>
                                <?php inputNumberWithControls("shopping-cart-item-${x}"); ?>
                            </div>
                        </div>

                        <div class="col-xs-6 align-self-end">
                            <a href="<?php href('product-detail.php'); ?>">
                                <div class="product-horizontal-list-item-price">
                                    224,00 € <span class="text-faded small">bez DPH</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="<?php href('product-detail.php'); ?>">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="product-availability text-success product-horizontal-list-item-availability">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-check-circled"></use>
                                    </svg>

                                    Skladom
                                </div>
                            </div>

                            <div class="col-xs-6 align-self-end">
                                <div class="product-horizontal-list-item-price-alternative">
                                    5,20 € /meter
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="shopping-cart-modal-footer">
        <table class="table table-space-between">
            <tr>
                <td class="emphasized-col">Medzisúčet:</td>
                <td class="emphasized-col">336,00 €</td>
            </tr>

            <tr>
                <td>Cena s DPH:</td>
                <td>403,20 €</td>
            </tr>
        </table>

        <a href="<?php href('checkout-login.php') ?>" class="btn btn-primary btn-icon-right btn-full">
            OBJEDNAŤ

            <svg class="icon stroke-white">
                <use xlink:href="#sprite-chevron-right"></use>
            </svg>
        </a>
    </div>
</div>