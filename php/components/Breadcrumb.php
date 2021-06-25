<?php
include_once ('../config.php');

function breadcrumb($items) {
    $count = count($items);
    $i = 0;
?>

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php indexHref() ?>" aria-label="Domov">
                    <svg class="icon"><use xlink:href="#sprite-home"></use></svg>
                </a>
            </li>
            <?php foreach($items as $item): $i++; ?>
                <?php if ($i === $count): ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $item; ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?php productListHref() ?>"><?php echo $item; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
<?php } ?>