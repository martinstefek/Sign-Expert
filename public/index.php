<?php include_once('../php/config.php'); ?>
<?php $loggedIn = true; ?>

<?php include_once('../php/layout/header.php'); ?>

<div class="container">
    This is Index!

    <br>
    <br>
    <br>


    <div class="product-list-item-row">
        <?php for ($x = 1; $x <= (4*10); $x++): ?>
        <div class="product-list-item-col">
            <?php productListItem(12.75, 15.84, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
        </div>

        <div class="product-list-item-col">
            <?php productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
        </div>
        <?php endfor; ?>
    </div>

    <br>
    <br>
    <br>
    <br>
</div>


<?php include_once('../php/layout/footer.php'); ?>
