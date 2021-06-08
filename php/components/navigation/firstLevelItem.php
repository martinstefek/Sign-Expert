<?php
include_once('secondLevelItem.php');

function navigationFirstLevelItem($name) { ?>
<li data-section-name="<?php echo $name; ?>">
    <a href="#" data-toggle="navigation-second-level"><?php echo $name; ?></a>
    <?php navigationSecondLevelItem($name); ?>
</li>
<?php } ?>
