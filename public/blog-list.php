<?php include_once('../php/config.php'); ?>
<?php $loggedIn = false; ?>
<?php $mainBgActive = true; ?>

<?php include_once('../php/layout/header.php'); ?>

<section class="section blog-list">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 article-wrap">
                <?php articleLarge(); ?>
            </div>
        </div>

        <div class="row">
            <?php for ($x = 1; $x <= 16; $x++): ?>
            <div class="col-xs-12 col-sm-6 col-lg-4 article-wrap">
                <?php article(); ?>
            </div>
            <?php endfor; ?>
        </div>

        <?php pagination(); ?>
    </div>
</section>

<?php newsletter(); ?>

<?php include_once('../php/layout/footer.php'); ?>
