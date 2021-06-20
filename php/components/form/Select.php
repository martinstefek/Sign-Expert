<?php function select($id, $label, $value, $options) { ?>
    <div class="form-group">
        <select name="<?php echo $id ?>" id="<?php echo $id ?>" data-type="select" class="form-control language-select">
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
