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
            <div class="services-list-col">
                <div class="card service">
                    <div class="card-hero" style="background-image: url('img/services/service-1.jpg');"></div>

                    <div class="service-title">Veľkoformátovú tlač</div>
                    
                    <ul class="link-list">
                        <li><a href="#">Sublimácia</a></li>
                        <li><a href="#">Ecosolventná tlač</a></li>
                        <li><a href="#">UV LED tlač</a></li>
                        <li><a href="#">Latexová tlač</a></li>
                        <li><a href="#">Rezacie plottre</a></li>
                        <li><a href="#">Laminovanie a kašírovanie</a></li>
                        <li><a href="#">Rezanie a skladanie</a></li>
                    </ul>

                    <a href="#" class="btn btn-bordered btn-full">Čo môžem vytvoriť?</a>
                    <a href="#" class="btn btn-primary btn-full">
                        Objaviť produkty

                        <svg class="icon icon-arrow-right">
                            <use xlink:href="#sprite-chevron-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
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
