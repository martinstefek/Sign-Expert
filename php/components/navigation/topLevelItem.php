<?php
include_once('firstLevelItem.php');

function navigationTopLevelItem($navigationTopLevelName, $index) { ?>
<div class="navigation-top-level" data-index="<?php echo $index ?>">
    <button class="btn dropdown-toggle" type="button" data-toggle="navigation-first-level" aria-expanded="false">
        <span><?php echo $navigationTopLevelName ?></span>
        <span class="caret"></span>
    </button>

    <div class="navigation-first-level">
        <ul>
            <?php navigationFirstLevelItem('Ecosolventná tlač'); ?>
            <?php navigationFirstLevelItem('UV Led tlač a potlač'); ?>
            <?php navigationFirstLevelItem('Rezaná reklama'); ?>
            <?php navigationFirstLevelItem('Sublimácia'); ?>
            <?php navigationFirstLevelItem('Chromablast'); ?>
            <?php navigationFirstLevelItem('Nažehľovacie fólie'); ?>
            <?php navigationFirstLevelItem('Sieťotlač'); ?>
            <?php navigationFirstLevelItem('Priama potlač - DTG'); ?>
            <?php navigationFirstLevelItem('Potlač DTF'); ?>
            <?php navigationFirstLevelItem('Výroba odznakov'); ?>
            <?php navigationFirstLevelItem('Gravírovanie laserom'); ?>
        </ul>
    </div>
</div>
<?php } ?>
