<?php function select($id, $label, $value, $options, $imageTheme = false, $actionLabel = false, $name = false) { ?>
    <div class="form-group">
        <select name="<?php echo $name ? $name : $id ?>"
                id="<?php echo $id ?>"
                data-type="select" class="form-control language-select"
                <?php echo $imageTheme ? 'data-theme="select-image"' : '' ?>
                <?php echo $actionLabel ? "data-action-label='${actionLabel}'": ''; ?>
        >
            <?php foreach ($options as $key => $option): ?>
            <option value="<?php echo $key ?>" <?php echo $value === $key ? 'selected' : '' ?>
                <?php echo !empty($option['img']) ? 'data-image="'.$option['img'].'"' : ''; ?>
            >
                <?php echo $option['text'] ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
<?php } ?>
