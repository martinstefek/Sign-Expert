<?php
    function headerSearch($id) {
        $inputId = "${id}-input";
        $autocompleteId = "${id}-autocomplete";
?>
<div id="<?php echo $id; ?>" class="search">
    <form class="search-wrap">
        <label class="header-search-input-label" for="<?php echo $inputId; ?>">
            <svg class="icon">
                <use xlink:href="#sprite-lens"></use>
            </svg>
        </label>

        <input id="<?php echo $inputId; ?>" class="header-search-input" type="text" autocomplete="off"
               placeholder="Zadajte hľadaný výraz">

        <button type="submit" class="btn">
            <span class="button-label">Hľadať</span>
        </button>
    </form>

    <div id="<?php echo $autocompleteId; ?>" class="search-autocomplete">
        <button type="button" class="btn search-autocomplete-cancel" aria-label="Zavrieť" data-clear-search-input="<?php echo $inputId; ?>">
            <svg class="icon">
                <use xlink:href="#sprite-cancel"></use>
            </svg>
        </button>

        <div class="search-autocomplete-col search-autocomplete-col-bg-gray">
            <div class="mb-3">
                <h6>Frázy</h6>
                <a href="#" class="label label-primary">Sublimácia</a>
                <a href="#" class="label label-primary">Subli-Light</a>
                <a href="#" class="label label-primary">Subli-flex</a>
            </div>

            <div>
                <h6>Kategórie</h6>
                <ul class="link-list">
                    <li><a href="<?php productListHref() ?>"><span class="matched-phrase">Sub</span>limácia</a></li>
                    <li><a href="<?php productListHref() ?>">Zariadenia pre <span class="matched-phrase">sub</span>limáciu</a>
                    </li>
                    <li><a href="<?php productListHref() ?>">Materiály pre <span class="matched-phrase">sub</span>limáciu</a>
                    </li>
                    <li><a href="<?php productListHref() ?>">Predmety pre <span class="matched-phrase">sub</span>limáciu</a></li>
                    <li><a href="<?php productListHref() ?>"><span class="matched-phrase">Sub</span>limačné tlačiarne</a></li>
                    <li><a href="<?php productListHref() ?>"><span class="matched-phrase">Sub</span>limačné atramenty</a></li>
                    <li><a href="<?php productListHref() ?>"><span class="matched-phrase">Sub</span>limačný papier</a></li>
                    <li><a href="<?php productListHref() ?>"><span class="matched-phrase">Sub</span>limácia na bavlnu</a></li>
                </ul>
            </div>
        </div>

        <div class="search-autocomplete-col">
            <h6>Top produkt</h6>
            <?php productListItem(null, null, 2, false, false, 'Dvojhlavová sublimačná tlačiareň XpertJet 1682WR', 'Sublimačné tlačiarne', './img/product-list/product-list-image-4.jpg'); ?>
        </div>

        <div class="search-autocomplete-col-2">
            <div class="search-autocomplete-col-product-header">
                <h6>Produkty</h6>
            </div>

            <div class="search-autocomplete-product-list">
                <?php for ($x = 1; $x <= 6; $x++): ?>
                    <a href="<?php href('product-detail.php') ?>" class="search-autocomplete-product-item">
                        <img src="img/product-detail/product-detail.jpg" alt="Poruct list image">

                        <div class="search-autocomplete-product-item-info">
                            <div class="search-autocomplete-product-item-title">Sublimačná tlačiareň
                                Epson SureColor SC-F100
                            </div>
                            <div class="search-autocomplete-product-item-price">
                                560,72 €
                                <span>s DPH</span>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>

            <div class="search-autocomplete-col-product-footer">
                <a href="<?php href('product-list.php') ?>" class="btn btn-primary">
                    Zobraziť všetky produkty (365)

                    <svg class="icon">
                        <use xlink:href="#sprite-chevron-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="search-overlay" data-clear-search-input="<?php echo $inputId; ?>"></div>
</div>
<?php } ?>
