<?php
include_once('../php/config.php');

$checkoutActiveIndex = 0;

include_once('../php/layout/checkout/header.php')
?>

<div class="checkout-login">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-xl-5 col-xl-offset-1">
            <section class="checkout-login-box">
                <h1 class="checkout-login-title">Pre registrovaných zákazníkov</h1>

                <form>
                    <div class="form-group">
                        <?php input('checkout-login-email', 'E-mail'); ?>
                        <?php input('checkout-login-password', 'Heslo', '', 'password'); ?>
                    </div>

                    <div class="form-group">
                        <a href="<?php href('checkout-personal-info.php') ?>" class="btn btn-success btn-full btn-icon-right">
                            Prihlásiť sa

                            <svg class="icon stroke-white">
                                <use xlink:href="#sprite-chevron-right"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="text-center">
                        <a href="#">Zabudnuté heslo</a>
                    </div>
                </form>
            </section>
        </div>

        <div class="col-xs-12 col-md-6 col-xl-5">
            <section class="checkout-login-box">
                <h1 class="checkout-login-title">Pre nových zákazníkov</h1>

                <form>
                    <?php select(
                        'checkout_address_country',
                        'Krajina',
                        'sk',
                        [
                            'sk' => [
                                'img' => 'img/language/lang-sk.svg',
                                'text' => 'Slovenska Republika',
                            ],
                            'cz' => [
                                'img' => 'img/language/lang-cz.svg',
                                'text' => 'Česká Republika',
                            ],
                            'en' => [
                                'img' => 'img/language/lang-gb.svg',
                                'text' => 'Veľká Británia',
                            ],
                        ],
                        true
                    ) ?>

                    <div class="form-autocomplete-wrap form-margin-bottom-large">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-lens"></use>
                                    </svg>
                                </span>

                                <input id="register-search-company"
                                       type="text"
                                       class="form-control input-autocomplete-search"
                                       placeholder="Vyhľadať firmu podľa názvu alebo IČO"
                                >

                                <label for="register-search-company" class="form-label text-default">Vyhľadať firmu podľa názvu alebo IČO</label>

                                <button id="register-search-company-cancel" class="btn input-value-cancel" type="button">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-cancel"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="form-autocomplete" id="register-search-company-autocomplete">
                            <div class="form-autocomplete-item">
                                <div><strong>ui Star s.r.o.</strong> IČO: 35713003  IČ DPH: SK2020227770</div>
                                <div class="text-faded">Sibírska 62, Bratislava, 831 02</div>
                            </div>

                            <div class="form-autocomplete-item">
                                <div><strong>ui Star s.r.o.</strong> IČO: 35713003  IČ DPH: SK2020227770</div>
                                <div class="text-faded">Sibírska 62, Bratislava, 831 02</div>
                            </div>

                            <div class="form-autocomplete-item">
                                <div><strong>ui Star s.r.o.</strong> IČO: 35713003  IČ DPH: SK2020227770</div>
                                <div class="text-faded">Sibírska 62, Bratislava, 831 02</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-full btn-icon-right" disabled>
                            Pokračovať v objednávke

                            <svg class="icon stroke-white">
                                <use xlink:href="#sprite-chevron-right"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="#">Zadať firemné údaje ručne</a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<?php include_once('../php/layout/checkout/footer.php') ?>
