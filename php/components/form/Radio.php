<?php function radio($title, $name, $checked = false) { ?>
<div class="form-radio">
    <label>
        <input type="radio" name="<?php echo $name; ?>" <?php echo $checked ? 'checked' : ''; ?>>
        <span class="form-radio-name"><?php echo $title; ?></span>
    </label>
</div>
<?php } ?>
