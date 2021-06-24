<?php include_once('../php/config.php'); ?>
<?php $loggedIn = false; ?>
<?php $mainBgActive = true; ?>

<?php include_once('../php/layout/header.php'); ?>

<section class="section section-padding-bottom-large blog-page">
    <div class="container">
        <div class="blog-container">
            <div class="blog-page-header">
                <div class="blog-page-date">22. Marec 2020</div>

                <h1 class="blog-page-title">Čo sú to odznaky či buttony?</h1>

                <div class="blog-page-hero">
                    <img src="img/blog/blog-hero.jpg" alt="Blog Hero Image">
                </div>
            </div>
        </div>

        <div class="blog-content">
            <div class="blog-container-small">
                <p>
                    Chcete vyrábať odznaky doma? Zaujíma vás, ako funguje samotný proces výroby? Aké veľké finančné investície potrebujete, ak si chcete doma zriadiť dielňu na výrobu odznakov?
                </p>

                <p>Má výroba odznakov potenciál na začiatok vlastného biznisu? A čo všetko lis na odznaky vlastne dokáže? Na tieto všetky otázky vám dnes odpovieme v našom najnovšom článku!</p>

                <h2>Všetko, čo potrebujem na výrobu odznakov</h2>

                <p>Ak chcete vyrábať odznaky a ďalšie reklamné predmety, samotný lis na odznaky vám stačiť nebude!</p>

                <img src="img/blog/blog-img.jpg" alt="blog image">

                <h2>Matrica na výrobu odznakov</h2>

                <p>Lis na odzanky je potrebné vybaviť matricou. Matrica je veľmi dôležitá časť lisu. Samotná matrica
                    určuje, aký tvar a veľkosť odznakov budete vyrábať. My odporúčame už na začiatok si zabezpečiť aspoň
                    2 rôzne matrice.</p>

                <p>Asi najpopulárnejšou matricou je okrúhla 32 mm matrica. Zákazníci nášho SHOPu vyberajú túto matricu
                    najčastejšie. Zároveň naši firemný klienti si najčastejšie objednávajú práve 32 mm odznaky.</p>

                <p>Ak to myslíte s výrobou odznakov vážne a chcete zaujať svojich zákazníkov, je dobre ponúknuť
                    alternatívu. Zabezpečte si preto väčšiu matricu kruhového tvaru alebo matricu iného tvaru. Napríklad
                    štvorec, ovál, obdlžník, srdce a podobne.</p>
            </div>
        </div>

        <div class="blog-container section-margin">
            <div class="product-list-item-row">
                <div class="product-list-item-col">
                    <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie', './img/product-list/product-list-image-1.jpg', false, hrefReturn('product-detail.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(78.75, null, 8, false, false, 'Aplikačná fólia 3M IAT papierová', 'Plotrové fólie', './img/product-list/product-list-image-2.jpg', false, hrefReturn('product-detail-v2.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(null, null, 0, false, false, 'Laserová gravírka HSG Z4030 RF', 'Gravírky laserové', './img/product-list/product-list-image-3.jpg', false, hrefReturn('product-detail-v3.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(null, null, 2, false, false, 'Dvojhlavová sublimačná tlačiareň XpertJet 1682WR', 'Sublimačné tlačiarne', './img/product-list/product-list-image-4.jpg', false, hrefReturn('product-detail-v4.php')); ?>
                </div>
            </div>
        </div>

        <div class="blog-content">
            <div class="blog-container-small">
                <h2>Vysekávač grafiky</h2>

                <p>Ďalšou, nie tak nevyhnutnou súčasťou je vysekávač papiera alebo grafiky. Zvyčajne ide o nožnicový
                alebo stojanový vysekávač. Stojanové vysekávače papiera sú zvyčajne drahšie než nožnicové.</p>

                <p>V skutočnosti sa pri výrobe odznakov dokážete zaobísť bez vysekávača papiera. Ak ale máte len trocha
                väčšiu produkciu odznakov alebo iných reklamných predmetov, výroba sa stáva bez vysekávača doslova
                úmorná.</p>

                <p>Môžme povedať, že bez vysekávača papiera sa skôr dokáže zaobísť hobby dielňa, ktorá sa venuje výrobe odznakov
                len výnimočne.</p>
            </div>
        </div>

        <div class="blog-container section-margin">
            <div class="product-list-item-row">
                <div class="product-list-item-col">
                    <?php productListItem(3.55, null, 12, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie', './img/product-list/product-list-image-1.jpg', false, hrefReturn('product-detail.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(78.75, null, 8, false, false, 'Aplikačná fólia 3M IAT papierová', 'Plotrové fólie', './img/product-list/product-list-image-2.jpg', false, hrefReturn('product-detail-v2.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(null, null, 0, false, false, 'Laserová gravírka HSG Z4030 RF', 'Gravírky laserové', './img/product-list/product-list-image-3.jpg', false, hrefReturn('product-detail-v3.php')); ?>
                </div>

                <div class="product-list-item-col">
                    <?php productListItem(null, null, 2, false, false, 'Dvojhlavová sublimačná tlačiareň XpertJet 1682WR', 'Sublimačné tlačiarne', './img/product-list/product-list-image-4.jpg', false, hrefReturn('product-detail-v4.php')); ?>
                </div>
            </div>
        </div>

        <div class="blog-content">
            <div class="blog-container-small">
                <h2>Čo všetko lis na odznaky dokáže</h2>

                <p>Lis na odznaky nie je jednoúčelové zariadenie. Pomocou lisu na odznaky dokážete pomocou matríc a
                    spotrebného materiálu vyrábať celkom širokú škálu reklamných materiálov. Od klasických odznakov
                    rôznych veľkostí až po menovky, kľúčenky, otvárače, kancelárske spinky, magnetky, zrkadielka, rozety
                    …</p>

                <p>Ak si to prepočítame, tak lis na odznaky vzhľadom na jeho cenu dokáže produkovať celkom širokú škálu
                    výrobkov ako len máloktorý produkčný stroj v reklamnom svete.</p>

                <a href="#" class="btn btn-primary btn-icon-right">
                    Vybrať lis na odznaky

                    <svg class="icon fill-white stroke-white">
                        <use xlink:href="#sprite-chevron-right"></use>
                    </svg>
                </a>

                <h2>Čo všetko lis na odznaky dokáže</h2>

                <p>Lis na odznaky nie je jednoúčelové zariadenie. Pomocou lisu na odznaky dokážete pomocou matríc a
                    spotrebného materiálu vyrábať celkom širokú škálu reklamných materiálov. Od klasických odznakov
                    rôznych veľkostí až po menovky, kľúčenky, otvárače, kancelárske spinky, magnetky, zrkadielka, rozety
                    …</p>

                <p>Ak si to prepočítame, tak lis na odznaky vzhľadom na jeho cenu dokáže produkovať celkom širokú škálu
                    výrobkov ako len máloktorý produkčný stroj v reklamnom svete.</p>
            </div>
        </div>

        <div class="blog-container-small">
            <div class="blog-footer">
                <div class="blog-author">
                    <div class="blog-author-image">
                        <img src="img/avatar-photo.jpg" alt="author photo">
                    </div>

                    <div class="blog-author-label">Autor</div>
                    <div class="blog-author-name">Fero Novotny</div>
                </div>

                <div class="blog-share-button">
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Fsignexpert.sk&layout=button_count&size=large&appId=1581408971894655&width=102&height=28" width="102" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php newsletter(); ?>

<?php include_once('../php/layout/footer.php'); ?>
