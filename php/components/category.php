<?php
function category($title, $count, $image) { ?>
<a href="#" class="category">
    <img src="<?php echo $image; ?>" alt="Category Image">
    <div class="category-title"><?php echo $title; ?></div>
    <div class="category-description"><?php echo $count; ?> položiek</div>
</a>
<?php } ?>