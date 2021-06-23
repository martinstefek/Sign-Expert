<?php include_once('../php/config.php'); ?>
<?php $loggedIn = false; ?>
<?php $mainBgActive = false; ?>

<?php include_once('../php/layout/header.php'); ?>

<div class="page-contact">
<!--    <div class="notice-message danger">-->
<!--        <div class="container">-->
<!--            <svg class="icon fill-danger notice-message-icon">-->
<!--                <use xlink:href="#sprite-excalamation-mark"></use>-->
<!--            </svg>-->
<!---->
<!--            <div class="notice-message-content">-->
<!--                Počas odoslania správy došlo pravdepodobne k prerušeniu spojenia-->
<!--            </div>-->
<!---->
<!--            <button type="button" class="btn notice-message-icon-cancel">-->
<!--                <svg class="icon">-->
<!--                    <use xlink:href="#sprite-cancel"></use>-->
<!--                </svg>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->

    <div class="notice-message success">
        <div class="container">
            <svg class="icon stroke-success notice-message-icon">
                <use xlink:href="#sprite-check"></use>
            </svg>

            <div class="notice-message-content">
                Vaša správa bola úspešné odoslaná. V krátkom čase vás budeme kontaktovať.
            </div>

            <button type="button" class="btn notice-message-icon-cancel">
                <svg class="icon">
                    <use xlink:href="#sprite-cancel"></use>
                </svg>
            </button>
        </div>
    </div>

    <div class="container">
        <section class="section section-padding-bottom-large">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <h2 class="mb-4">DT-TRADING, s.r.o.</h2>

                    <div>
                        <div class="page-contact-item">
                            <div class="page-contact-item-image">
                                <svg class="icon fill-primary">
                                    <use xlink:href="#sprite-pin"></use>
                                </svg>
                            </div>

                            <div class="page-contact-item-content">
                                <div class="mb-3">
                                    Ľ.Štúra 1258/58 <br>
                                    990 01 VEĽKÝ KRTÍŠ
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="page-contact-item">
                            <div class="page-contact-item-image">
                                <svg class="icon fill-primary">
                                    <use xlink:href="#sprite-file"></use>
                                </svg>
                            </div>

                            <div class="page-contact-item-content">
                                <div class="mb-3">
                                    <div class="text-faded">IČO:</div>
                                    36843270
                                </div>

                                <div class="mb-3">
                                    <div class="text-faded">IČ DPH:</div>
                                    SK2022468679
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="page-contact-item">
                            <div class="page-contact-item-image">
                                <svg class="icon">
                                    <use xlink:href="#sprite-phone"></use>
                                </svg>
                            </div>

                            <div class="page-contact-item-content">
                                <div class="mb-3">
                                    <div class="text-faded">Podpora:</div>
                                    +421 948 048 448
                                </div>

                                <div class="mb-2">
                                    <div class="text-faded">Objednávky:</div>
                                    +421 948 448 548
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="page-contact-item">
                            <div class="page-contact-item-image">
                                <svg class="icon">
                                    <use xlink:href="#sprite-email"></use>
                                </svg>
                            </div>

                            <div class="page-contact-item-content">
                                <div class="mb-3">
                                    <div class="text-faded">E-mail:</div>
                                    info@signexpert.sk <br>
                                    info@signexpert.cz <br>
                                    info@signexpert.hu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-6 col-xl-4">
                    <h2 class="mb-3">Napíšte nám</h2>

                    <form>
                        <div class="row">
                            <div class="col-xs-6">
                                <?php input('firstname', 'Meno'); ?>
                            </div>

                            <div class="col-xs-6">
                                <?php input('lastname', 'Priezvisko'); ?>
                            </div>
                        </div>

                        <?php input('phone', 'Telefónne číslo'); ?>
                        <div class="text-faded small mb-3">Vzor: +421 944 111 222</div>

                        <?php input('email', 'E-mail'); ?>

                        <div class="form-group">
                            <textarea id="contact_message" rows="6" class="form-control" placeholder="Napíšte sem požadované zmeny"></textarea>
                            <label for="contact_message" class="form-label">Správa</label>
                        </div>

                        <button class="btn btn-primary btn-icon-right">
                            Odoslať
                            <svg class="icon fill-white stroke-white">
                                <use xlink:href="#sprite-chevron-right"></use>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include_once('../php/layout/footer.php'); ?>
