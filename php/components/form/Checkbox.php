<?php function checkbox($title, $name) { ?>
<div class="form-group-checkbox">
    <div class="form-checkbox">
        <label>
            <input type="checkbox" name="<?php echo $name; ?>">
            <span class="form-checkbox-name"><?php echo $title; ?></span>
        </label>
    </div>
</div>
<?php } ?>