<?php function navigationTopLevelItem($navigationTopLevelName, $index) { ?>
<div class="navigation-top-level" data-index="<?php echo $index ?>">
    <button class="btn dropdown-toggle" type="button" data-toggle="navigation-first-level" aria-expanded="false">
        <span><?php echo $navigationTopLevelName ?></span>
        <span class="caret"></span>
    </button>

    <div class="navigation-first-level">
        <ul>
            <li><a href="#" data-toggle="navigation-second-level">Ecosolventná tlač</a></li>
            <li><a href="#" data-toggle="navigation-second-level">UV Led tlač a potlač</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Rezaná reklama</a></li>
            <li>
                <a href="#" data-toggle="navigation-second-level">Sublimácia</a>

                <div class="navigation-second-level">
                    <ul class="navigation-first-level-home-link">
                        <li><a href="#">Čo je to SUBLIMÁCIA?</a></li>
                    </ul>

                    <div class="navigation-columns">
                        <div class="navigation-category">
                            <div class="navigation-category-header">Zariadenia</div>

                            <ul>
                                <li><a href="#">Všetky zariadenia</a></li>
                                <li><a href="#">Sublimačné tlačiarne</a></li>
                                <li><a href="#">Termolisy</a></li>
                                <li><a href="#">Rezacie plotre</a></li>
                                <li><a href="#">Štartovacie sety</a></li>
                            </ul>
                        </div>

                        <div class="navigation-category">
                            <div class="navigation-category-header">Materiály</div>

                            <ul>
                                <li><a href="#">Všetky materiály</a></li>
                                <li><a href="#">Sublimačné atramenty</a></li>
                                <li><a href="#">Sublimačný papier</a></li>
                                <li><a href="#">Sublimácia na bavlnu</a></li>
                                <li><a href="#">Spotrebné materiály</a></li>
                            </ul>
                        </div>

                        <div class="navigation-category">
                            <div class="navigation-category-header">Predmety pre sublimáciu</div>

                            <ul>
                                <li><a href="#">Všetky predmety</a></li>
                                <li><a href="#">Šálky</a></li>
                                <li><a href="#">Hrnčeky</a></li>
                                <li><a href="#">Krígle na pivo</a></li>
                                <li><a href="#">Vankúše a poťahy</a></li>
                                <li><a href="#">Podložky pod myš</a></li>
                                <li><a href="#">Pazzle</a></li>
                                <li><a href="#">Bridlice</a></li>
                                <li><a href="#">Prívesky na kľúče</a></li>
                                <li><a href="#">Dáždniky</a></li>
                                <li><a href="#">Flašky</a></li>
                                <li><a href="#">Kozmetické zrkadlo</a></li>
                                <li><a href="#">Dosky na krájanie</a></li>
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
            </li>
            <li><a href="#" data-toggle="navigation-second-level">Chromablast</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Nažehľovacie fólie</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Sieťotlač</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Priama potlač - DTG</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Potlač DTF</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Výroba odznakov</a></li>
            <li><a href="#" data-toggle="navigation-second-level">Gravírovanie laserom</a></li>
        </ul>
    </div>
</div>
<?php } ?>
