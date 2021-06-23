<?php include_once('../php/config.php'); ?>
<?php $loggedIn = false; ?>
<?php $mainBgActive = false; ?>

<?php include_once('../php/layout/header.php'); ?>

<div class="page-404">
    <section class="section">
        <div class="container">
            <h1 class="text-center">Stránka sa nenašla</h1>
            <p class="large text-center mb-5">Skúste použiť navigáciu alebo vyhľadávanie</p>

            <div class="text-center">
                <img src="img/404.jpg" alt="404">
            </div>

        </div>
    </section>

    <section class="section section-padding-top-none">
        <div class="container">
            <div class="category-simple-list">
                <?php

                    $listOfItems404 = [
                        1 => 'Veľkoformátová tlač',
                        2 => 'Rezaná reklama',
                        3 => 'Potlač textilu',
                        4 => 'Potlač predmetov',
                        5 => 'Gravírovanie',
                        6 => 'Výroba odznakov',
                    ];
                ?>
                <?php for ($x = 1; $x <= 6; $x++): ?>
                <div class="category-simple-item">
                    <a href="#" class="category-simple-item-anchor" style="background-image: url('img/contact/contact-<?php echo $x; ?>.jpg')">
                        <div class="category-simple-item-title"><?php echo $listOfItems404[$x] ?></div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>

<?php include_once('../php/layout/footer.php'); ?>
