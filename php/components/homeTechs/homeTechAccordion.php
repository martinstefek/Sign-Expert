<?php
include_once('homeTechButton.php');

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
            V procese sublimácie sa tlač uskutočňuje pomocou tlačiarne na prenosovom papieri pomocou profesionálnych sublimačných farieb… Čítať viac
        </div>

        <div>
            <h5>Čo všetko sa dá potlačiť:</h5>

            <ul class="check-list-gray-inline">
                <li>Keramika</li>
                <li>Papier a drevo</li>
                <li>Kovové predmety</li>
                <li>Sklo</li>
                <li>Plastové predmety</li>
                <li>Magnetické predmety</li>
                <li>Kameň</li>
                <li>Textil</li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>