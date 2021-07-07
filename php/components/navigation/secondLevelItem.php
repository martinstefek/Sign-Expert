<?php
include_once ('../../config.php');

function navigationSecondLevelItem($name) { ?>
    <div class="navigation-second-level">
        <ul class="navigation-first-level-home-link">
            <li><a href="<?php href('./product-list.php'); ?>">Čo je to <?php echo mb_strtoupper($name, 'UTF-8'); ?>?</a></li>
        </ul>

        <div class="navigation-columns">
            <div class="navigation-category">
                <div class="navigation-category-header">Zariadenia</div>

                <ul>
                    <li><a href="<?php href('./product-list.php'); ?>">Všetky zariadenia</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Sublimačné tlačiarne</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Termolisy</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Rezacie plotre</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Štartovacie sety</a></li>
                </ul>
            </div>

            <div class="navigation-category">
                <div class="navigation-category-header">Materiály</div>

                <ul>
                    <li><a href="<?php href('./product-list.php'); ?>">Všetky materiály</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Sublimačné atramenty</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Sublimačný papier</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Sublimácia na bavlnu</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Spotrebné materiály</a></li>
                </ul>
            </div>

            <div class="navigation-category">
                <div class="navigation-category-header">Predmety pre sublimáciu</div>

                <ul>
                    <li><a href="<?php href('./product-list.php'); ?>">Všetky predmety</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Šálky</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Hrnčeky</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Krígle na pivo</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Vankúše a poťahy</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Podložky pod myš</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Pazzle</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Bridlice</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Prívesky na kľúče</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Dáždniky</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Flašky</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Kozmetické zrkadlo</a></li>
                    <li><a href="<?php href('./product-list.php'); ?>">Dosky na krájanie</a></li>
                </ul>
            </div>

            <div class="navigation-category">
                <div class="navigation-category-header">Príslušenstvo & pomôcky</div>

                <ul>
                    <li><a href="#">Príslušenstvo & pomôcky</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>

