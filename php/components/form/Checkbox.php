<?php function checkbox($title, $name, $labelClass = '') { ?>
<div class="form-group-checkbox">
    <div class="form-checkbox">
        <label>
            <input type="checkbox" name="<?php echo $name; ?>">
            <span class="form-checkbox-name <?php echo $labelClass ?>"><?php echo $title; ?></span>
        </label>
    </div>
</div>
<?php } ?>