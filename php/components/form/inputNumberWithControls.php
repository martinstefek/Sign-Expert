<?php function inputNumberWithControls($id) { ?>
<div class="input-number-with-controls">
    <button class="button-minus" type="button" data-toggle="input-number-decrease" data-target="#<?php echo $id ?>" aria-label="minus">
        <svg class="icon fill-primary"><use xlink:href="#sprite-minus"></use></svg>
    </button>

    <input id="<?php echo $id ?>" type="number" min="1" value="1" aria-label="Množstvo">

    <button class="button-plus" type="button" data-toggle="input-number-increase" data-target="#<?php echo $id ?>" aria-label="plus">
        <svg class="icon fill-primary"><use xlink:href="#sprite-plus"></use></svg>
    </button>
</div>
<?php } ?>