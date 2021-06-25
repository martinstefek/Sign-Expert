<?php function productDetailMainContent($largeProductDetail = true) { ?>
<div>
    <h1 class="product-detail-title">SignFlex Screen Green 25</h1>

    <?php if($largeProductDetail): ?>
    <div class="product-detail-description">
        SignFlex Screen je 100% teplom transferovateľná polyuretánová fólia výnimočná svojim dizajnom… <span class="text-primary">Čítať viac</span>
    </div>

    <div class="product-detail-code">Kód: SXS GREEN25</div>
    <?php endif; ?>

    <form action="<?php href('checkout-login.php') ?>" id="product-detail-form">
        <div class="product-parameter">
            <div class="product-parameter-label">
                Farba:
                <span class="font-weight-normal">Green 25</span>
            </div>

            <div class="product-parameter-color-list">
                <?php productParameterColor('#61a375'); ?>
                <?php productParameterColor('#F66A2E'); ?>
                <?php productParameterColor('#DDC17F'); ?>
                <?php productParameterColor('#B80D3B'); ?>
                <?php productParameterColor('#404D63'); ?>
                <?php productParameterColor('#F8FAF7'); ?>
                <?php productParameterColor('#DDC17F'); ?>
                <?php productParameterColor('#EFD402'); ?>
                <?php productParameterColor('#FFCE2E'); ?>
                <?php productParameterColor('#00568D'); ?>
                <span class="product-parameter-color-more">+ 12 farieb</span>
            </div>
        </div>

        <div class="product-parameter">
            <div class="product-parameter-label">
                Dĺžka návinu:
            </div>

            <div class="product-parameter-box-list">
                <?php productParameterBox('od 1m', 6.58); ?>
                <?php productParameterBox('od 10m', 5.60); ?>
                <?php productParameterBox('od 50m', 5.20); ?>
            </div>
        </div>
    </form>

    <?php if (!$largeProductDetail): ?>
    <div class="product-detail-small-parameter-wrap">
    <?php endif; ?>
    <div class="product-parameter">
        <div class="product-parameter-label">
            Cena za meter:
        </div>

        <div class="product-detail-price">
            6,58 €
            <span class="product-detail-price-faded">bez DPH</span>
        </div>
        <div class="product-detail-price-with-vat">
            7,89 €
            <span class="product-detail-price-faded">s DPH</span>
        </div>
    </div>

    <?php if (!$largeProductDetail): ?>
    <div class="product-details-small-add-to-cart-section">
    <?php endif; ?>
    <div class="product-parameter">
        <div class="product-parameter-label">
            Počet metrov:
        </div>

        <div class="product-detail-add-to-cart-section">
            <?php inputNumberWithControls('product-detail-amount') ?>

            <div class="product-detail-button">
                <button class="btn btn-success product-detail-button" form="product-detail-form" type="submit" id="add-to-cart">Pridať do košíka</button>
            </div>
        </div>
    </div>

    <div class="product-detail-availability">
        <div class="product-detail-additional-info text-success">
            <svg class="icon stroke-success"><use xlink:href="#sprite-check-circled"></use></svg>
            Dostupnosť 245 metrov
        </div>

        <?php if ($largeProductDetail): ?>
        <div class="product-detail-availability-btn">
            <a href="<?php href('checkout-login.php') ?>" class="btn btn-bordered btn-icon-right" data-toggle="tooltip" data-placement="bottom" title="Pri objednávke viac ako 245 metrov doba dodania tovaru sa zmení z 48 hod. na 2 týždňa.">
                Objednať viac ako 245 metrov
                <svg class="icon fill-gray-dark"><use xlink:href="#sprite-info"></use></svg>
            </a>
        </div>
        <?php endif; ?>
    </div>
    <?php if (!$largeProductDetail): ?>
    </div>
    </div>
    <?php endif; ?>

    <?php if ($largeProductDetail): ?>
    <div class="product-detail-additional-info text-success">
        <svg class="icon stroke-success"><use xlink:href="#sprite-car"></use></svg>
        Doručíme do 48 hod
    </div>

    <div class="product-detail-additional-info product-detail-wishlist">
        <a href="<?php href('account-wishlist.php') ?>">
            <svg class="icon stroke-gray-dark fill-none"><use xlink:href="#sprite-heart"></use></svg>
            Pridať do nákupného zoznamu
        </a>
    </div>
    <?php endif; ?>
</div>
<?php } ?>
