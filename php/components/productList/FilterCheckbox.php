<?php
include_once ('../../config.php');

function filterCheckbox($title, $count, $name, $open, $list) {
    $parentId = "parent-filter-${name}";
    $id = "filter-${name}";
?>
<div id="<?php echo $parentId; ?>" data-type="accordion" class="product-list-filter">
    <div
        class="product-list-filter-heading"
        data-toggle="accordion"
        data-parent="#<?php echo $parentId; ?>"
        data-target="#<?php echo $id; ?>"
    >
        <?php echo $title; ?> <span class="faded"><?php echo $count; ?></span>

        <svg class="icon">
            <use xlink:href="#sprite-chevron-right"></use>
        </svg>
    </div>

    <div class="product-list-filter-content" id="<?php echo $id; ?>" data-type="accordion-item" data-initial-state="<?php echo $open ? 'show' : 'hide' ?>" data-allow-close="true">
        <?php foreach ($list as $item): ?>
            <?php checkbox($item, $name); ?>
        <?php endforeach; ?>
    </div>
</div>
<?php } ?>