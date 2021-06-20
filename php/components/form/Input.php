<?php function input($id, $label, $value = false, $type = 'text', $state = false) { ?>
    <?php if ($state === 'readonly'): ?>
    <div class="form-group">
        <div class="form-control-readonly">
            <div class="form-value"><?php echo $value ?></div>
            <div class="form-label"><?php echo $label; ?></div>
        </div>
    </div>
    <?php else: ?>
        <div class="form-group">
            <input id="<?php echo $id; ?>"
                   type="<?php echo $type; ?>"
                   class="form-control"
                   placeholder="<?php echo $label; ?>"
                <?php echo $value ? 'value="' . $value . '"' : ''; ?>
                <?php echo $state === 'disabled' ? 'disabled' : ''; ?>
            >
            <label for="<?php echo $id; ?>" class="form-label"><?php echo $label; ?></label>
        </div>
    <?php endif; ?>
<?php } ?>
