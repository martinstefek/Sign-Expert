<?php include_once('../php/config.php'); ?>
<?php $loggedIn = true; ?>

<?php include_once('../php/layout/header.php'); ?>

<section class="section banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6 col-xl-7">
                <div id="home-banner-slider" class="banner-item-list">
                    <div class="banner-item">
                        <img src="img/banner/primary-banner.jpg" alt="Banner image">
                        <h2 class="banner-title">Sublimačné tlačiarne</h2>
                        <div class="banner-description">ideálne riešenie pre výrobu reklamného <br>a osobného tovaru</div>
                    </div>

                    <div class="banner-item">
                        <img src="img/banner/primary-banner.jpg" alt="Banner image">
                        <h2 class="banner-title">Sublimačné tlačiarne</h2>
                        <div class="banner-description">ideálne riešenie pre výrobu reklamného <br>a osobného tovaru</div>
                    </div>

                    <div class="banner-item">
                        <img src="img/banner/primary-banner.jpg" alt="Banner image">
                        <h2 class="banner-title">Sublimačné tlačiarne</h2>
                        <div class="banner-description">ideálne riešenie pre výrobu reklamného <br>a osobného tovaru</div>
                    </div>

                    <div class="banner-item">
                        <img src="img/banner/primary-banner.jpg" alt="Banner image">
                        <h2 class="banner-title">Sublimačné tlačiarne</h2>
                        <div class="banner-description">ideálne riešenie pre výrobu reklamného <br>a osobného tovaru</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12  col-lg-6 col-xl-5">
                <a href="#" class="banner-item-secondary">
                    <img src="img/banner/secondary-banner.jpg" alt="Banner image">
                </a>

                <a href="#" class="banner-item-secondary">
                    <img src="img/banner/secondary-banner-2.jpg" alt="Banner image">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section services">
    <div class="container">
        <header class="section-header">
            <h1 class="section-title">Ponúkame riešenia pre</h1>
        </header>

        <div class="services-list-row">
            <?php service(
                    'Veľkoformátovú tlač',
                    [
                        'Sublimácia',
                        'Ecosolventná tlač',
                        'UV LED tlač',
                        'Latexová tlač',
                        'Rezacie plottre',
                        'Laminovanie a kašírovanie',
                        'Rezanie a skladanie',
                    ],
                    'img/services/service-1.jpg'
            ); ?>

            <?php service(
                'Rezanú reklamu',
                [
                    'Rezaná reklama',
                    'Plottrové fólie',
                    'Nažehľovacie fólie',
                    'Rezanie a skladanie',
                ],
                'img/services/service-2.jpg'
            ); ?>

            <?php service(
                'Potlač textilu',
                [
                    'Sublimácia',
                    'Chromablast',
                    'Transferová potlač',
                    'Sieťotlač',
                    'DTG potlač',
                    'DTF potlač',
                    'Nažehľovacie fólie',
                ],
                'img/services/service-3.jpg'
            ); ?>

            <?php service(
                'Potlač predmetov',
                [
                    'Sublimácia',
                    'UV LED potlač',
                    'Sieťotlač',
                    'Tonerový transfer',
                    'Predmety pre sublimácia',
                ],
                'img/services/service-4.jpg'
            ); ?>

            <?php service(
                'Gravírovanie',
                [
                    'Laserové gravírky',
                    'Chladenie',
                    'Odsávanie a filtrácia',
                    'Náhradné diely',
                ],
                'img/services/service-5.jpg'
            ); ?>

            <?php service(
                'Výrobu odznakov',
                [
                    'Lisy',
                    'Nástroje do lisov',
                    'Vysekávače grafiky',
                    'Odznaky',
                ],
                'img/services/service-6.jpg'
            ); ?>
        </div>
    </div>
</section>

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
