<?php
include_once ('ProductListItem.php');

function productListCarousel() { ?>
<section class="section product-list-carousel-section">
    <div class="container">
        <div class="section-header">
            <div class="section-title">Navštívili ste</div>
        </div>

        <div class="product-list-carousel" data-type="product-list-carousel">
            <?php for ($x = 1; $x <= 3; $x++): ?>
                <div class="product-list-carousel-item">
                    <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
                </div>

                <div class="product-list-carousel-item">
                    <?php productListItem(78.75, null, 8, false, false, 'Aplikačná fólia 3M IAT papierová', 'Plotrové fólie'); ?>
                </div>

                <div class="product-list-carousel-item">
                <?php productListItem(null, null, 4, false, false, 'Laserová gravírka HSG Z4030 RF', 'Gravírky laserové'); ?>
                </div>

                <div class="product-list-carousel-item">
                    <?php productListItem(null, null, 2, false, false, 'Dvojhlavová sublimačná tlačiareň XpertJet 1682WR', 'Sublimačné tlačiarne'); ?>
                </div>

                <div class="product-list-carousel-item">
                    <?php productListItem(2.27, 2.5, 240, true, false, 'Sublimačný hrnček s červeným vnútrom 400 ml', 'Sublimačné hrnčeky'); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php } ?>