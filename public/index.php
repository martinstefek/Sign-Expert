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

<section class="section home-tech">
    <div class="container">
        <div class="section-header section-header-bordered">
            <h1 class="section-title">Technológie</h1>
        </div>

        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <?php homeTechButton('Ecosolventná tlač', 'home-tech-1', false, true); ?>
                <?php homeTechButton('UV Led tlač a potlač', 'home-tech-2', false); ?>
                <?php homeTechButton('Rezaná reklama', 'home-tech-3', false); ?>
                <?php homeTechButton('Sublimácia', 'home-tech-4', false); ?>
                <?php homeTechButton('Chromablast', 'home-tech-5', false); ?>
                <?php homeTechButton('Nažehľovacie fólie', 'home-tech-6', false); ?>
                <?php homeTechButton('Sieťotlač', 'home-tech-7', false); ?>
                <?php homeTechButton('Priama potlač - DTG', 'home-tech-8', false); ?>
                <?php homeTechButton('Potlač DTF', 'home-tech-9', false); ?>
                <?php homeTechButton('Výroba odznakov', 'home-tech-10', false); ?>
                <?php homeTechButton('Gravírovanie laserom', 'home-tech-11', false); ?>
            </div>

            <div class="col-xs-12 col-lg-9 col-xl-8 col-xl-offset-1">
                <div id="techs-accordion" data-type="accordion">
                    <?php homeTechAccordion('Ecosolventná tlač', 'home-tech-1', true); ?>
                    <?php homeTechAccordion('UV Led tlač a potlač', 'home-tech-2'); ?>
                    <?php homeTechAccordion('Rezaná reklama', 'home-tech-3'); ?>
                    <?php homeTechAccordion('Sublimácia', 'home-tech-4'); ?>
                    <?php homeTechAccordion('Chromablast', 'home-tech-5'); ?>
                    <?php homeTechAccordion('Nažehľovacie fólie', 'home-tech-6'); ?>
                    <?php homeTechAccordion('Sieťotlač', 'home-tech-7'); ?>
                    <?php homeTechAccordion('Priama potlač - DTG', 'home-tech-8'); ?>
                    <?php homeTechAccordion('Potlač DTF', 'home-tech-9'); ?>
                    <?php homeTechAccordion('Výroba odznakov', 'home-tech-10'); ?>
                    <?php homeTechAccordion('Gravírovanie laserom', 'home-tech-11'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section home-articles">
    <div class="container">
        <div class="section-header section-header-flex">
            <div class="section-title">Najnovšie blogové články</div>
            <a href="#" class="btn btn-bordered btn-icon-right btn-desktop">
                <strong>
                    Prejsť na blog
                </strong>

                <svg class="icon stroke-primary icon-arrow-right">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>
            </a>
        </div>

        <div class="row">
            <div class="col-xs-10 col-sm-9 col-md-7 col-lg-4">
                <?php article(); ?>
            </div>

            <div class="col-xs-10 col-sm-9 col-md-7 col-lg-4">
                <?php article(); ?>
            </div>

            <div class="col-xs-10 col-sm-9 col-md-7 col-lg-4">
                <?php article(); ?>
            </div>
        </div>

        <a href="#" class="btn btn-full btn-bordered btn-mobile">
            <strong>
                Prejsť na blog
            </strong>
        </a>
    </div>
</section>

<?php productListCarousel(); ?>

<?php newsletter(); ?>

<!--<div class="container">-->
<!--    This is Index!-->
<!---->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!---->
<!---->
<!--    <div class="product-list-item-row">-->
<!--        --><?php //for ($x = 1; $x <= (3); $x++): ?>
<!--        <div class="product-list-item-col">-->
<!--            --><?php //productListItem(12.75, 15.84, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
<!--        </div>-->
<!---->
<!--        <div class="product-list-item-col">-->
<!--            --><?php //productListItem(null, null, 124, true, true, 'Oracal 651G TURQUIOSE 054', 'Plotrové fólie'); ?>
<!--        </div>-->
<!--        --><?php //endfor; ?>
<!--    </div>-->
<!---->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!--</div>-->


<?php include_once('../php/layout/footer.php'); ?>
