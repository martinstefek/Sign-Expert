<?php
include_once('homeTechButton.php');
include_once('../category.php');

function homeTechAccordion($title, $id, $open = false) { ?>
<div>
    <?php homeTechButton($title, $id, true, $open); ?>
    <div id="<?php echo $id; ?>" data-type="accordion-item" class="tech-accordion-item">

        <h2 class="h1 font-weight-normal transform-uppercase mb-3">Čo je to <?php echo $title; ?>?</h2>

        <img class="mb-3" src="img/home-tech.jpg" alt="Home tech image">

        <div class="mb-4">
            Techniku transferovej tlače, ktorá sa hovorovo v tlačovom prostredí nazýva farbenie. Táto metóda, ako zdôrazňujú špecialisti, je veľmi jednoduchá, ale účinná metóda digitálnej tlače, ktorá sa používa predovšetkým na prenos kvalitnej grafiky alebo obrazu na polymérny substrát.
            <br>
            <br>
            V procese sublimácie sa tlač uskutočňuje pomocou tlačiarne na prenosovom papieri pomocou profesionálnych sublimačných farieb…
            <a href="#">Čítať viac</a>
        </div>

        <div>
            <h2 class="h5">Čo všetko sa dá potlačiť:</h2>

            <ul class="check-list-gray-inline mb-5">
                <li>Keramika</li>
                <li>Papier a drevo</li>
                <li>Kovové predmety</li>
                <li>Sklo</li>
                <li>Plastové predmety</li>
                <li>Magnetické predmety</li>
                <li>Kameň</li>
                <li>Textil</li>
            </ul>

            <div class="row">
                <div class="col-xs-6 col-lg-3">
                    <?php category('Zariadenia pre sublimáciu', '128', 'img/category/category-1.jpg'); ?>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <?php category('Materiály pre sublimáciu', '128', 'img/category/category-2.jpg'); ?>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <?php category('Predmety pre sublimáciu', '128', 'img/category/category-3.jpg'); ?>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <?php category('Príslušenstvo & pomôcky', '128', 'img/category/category-4.jpg'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>