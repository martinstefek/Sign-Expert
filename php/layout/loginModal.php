<div class="modal modal-login-register fade" id="login-register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-no-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg class="icon icon-close">
                        <use xlink:href="#sprite-cancel"></use>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <div id="login-register-tabs">
                    <ul>
                        <li><a href="#login-tab">Prihlásenie</a></li>
                        <li><a href="#register-tab">Registrácia</a></li>
                    </ul>

                    <div id="login-tab">
                        <form>
                            <div class="form-group">
                                <?php input('login-email', 'E-mail'); ?>
                            </div>

                            <div class="form-group">
                                <?php input('login-password', 'Heslo'); ?>
                            </div>

                            <button type="submit" class="btn btn-full btn-success btn-icon-right mt-4 mb-3">
                                Prihlasiť sa
                                <svg class="icon stroke-white">
                                    <use xlink:href="#sprite-chevron-right"></use>
                                </svg>
                            </button>

                            <div class="text-center">
                                <a href="#">Zabudnuté heslo</a>
                            </div>
                        </form>
                    </div>

                    <div id="register-tab">
                        <form>
                            <?php select(
                                'address_country',
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

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <svg class="icon">
                                            <use xlink:href="#sprite-lens"></use>
                                        </svg>
                                    </span>

                                    <input id="register-search-company"
                                           type="text"
                                           class="form-control"
                                           placeholder="Vyhľadať firmu podľa názvu alebo IČO"
                                    >
                                    <label for="register-search-company" class="form-label text-default">Vyhľadať firmu podľa názvu alebo IČO</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group text-center">
                                    <a href="#">Zadať firemne údaje ručne</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <?php input('register-firstname', 'Meno') ?>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <?php input('register-lastname', 'Priezvisko') ?>
                                </div>
                            </div>

                            <?php input('register-phone', 'Telefónne číslo') ?>
                            <div class="text-faded small mb-3">Vzor: +421 944 111 222</div>

                            <?php input('register-email', 'E-mail na zasielanie faktúr') ?>

                            <?php input('register-email-login', 'E-mail pre prihlasenie') ?>

                            <?php input('register-password', 'Heslo') ?>

                            <button type="submit" class="btn btn-full btn-success btn-icon-right mt-4">
                                Vytvoriť konto
                                <svg class="icon stroke-white">
                                    <use xlink:href="#sprite-chevron-right"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>