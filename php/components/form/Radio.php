<?php function radio($title, $name, $checked = false, $noPadding = false) { ?>
<div class="form-radio <?php echo $noPadding ? 'padding-none' : '' ?>">
    <label>
        <input type="radio" name="<?php echo $name; ?>" <?php echo $checked ? 'checked' : ''; ?>>
        <span class="form-radio-name font-weight-medium"><?php echo $title; ?></span>
    </label>
</div>
<?php } ?>
