<?php function order($id, $statusLabel, $statusColor, $numberOfItems, $paid, $editable, $edited, $bottomActionsVisible = true) { ?>
    <div id="<?php echo $id ?>" class="order-box" data-type="order">
        <div class="order-box-header">
            <div class="order-box-header-top">
                <div class="order-box-title">Objednávka #2020331000</div>
                <div class="order-box-status <?php echo $statusColor ?>"><?php echo $statusLabel ?></div>
            </div>

            <div class="order-box-header-bottom">
                <div class="order-box-base-info">
                    <div class="order-box-label">Dátum vytvorenia</div>
                    <div class="text-default">08.06.2021</div>
                </div>

                <div class="order-box-base-info">
                    <div class="order-box-label">Spolu s DPH</div>
                    <div class="text-default">407,65 €</div>
                </div>

                <div class="order-box-base-info">
                    <div class="order-box-label">Odberateľ</div>
                    <div class="text-default">ui42 spol. s.r.o.</div>
                </div>

                <div class="order-box-base-info">
                    <div class="order-box-label">Dátum doručenia</div>
                    <div class="text-default">48 hodín po zaplatení (Kuriér)</div>
                </div>
            </div>
        </div>

        <div class="order-box-body">
            <div class="row">
                <div class="col-xs-12 col-md-7 order-box-item-list-left-col">
                    <div class="order-box-item-list">
                        <?php for ($x = 1; $x <= $numberOfItems; $x++): ?>
                            <div class="order-box-item">
                                <a href="<?php href('product-detail.php') ?>" class="order-box-item-img">
                                    <img src="img/product-detail/product-detail.jpg" alt="Product detail image">
                                </a>

                                <a href="<?php href('product-detail.php') ?>" class="order-box-item-info">
                                    <div class="order-box-item-title">SignFlex Screen Green 25</div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div>
                                                <div class="order-box-label">Počet metrov:</div>
                                                40
                                            </div>

                                            <div class="product-availability text-success order-box-item-availability">
                                                <svg class="icon">
                                                    <use xlink:href="#sprite-check-circled"></use>
                                                </svg>

                                                Skladom
                                            </div>
                                        </div>

                                        <div class="col-xs-6 align-self-end">
                                            <div class="order-box-item-price">
                                                224,00 € <span class="text-faded small"> DPH</span>
                                            </div>

                                            <div class="order-box-item-price-alternative">
                                                5,20 € /meter
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="btn btn-bordered btn-icon-only order-box-item-reorder">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-reorder"></use>
                                    </svg>
                                </a>
                            </div>
                        <?php endfor; ?>

                        <?php if ($numberOfItems > 3): ?>
                        <div class="order-box-item-more open-hidden">
                            +3
                        </div>
                        <?php endif; ?>
                    </div>

                    <table class="table table-sm table-space-between order-box-table open-hidden">
                        <tr>
                            <td>Medzisúčet:</td>
                            <td class="font-weight-medium">336,00 €</td>
                        </tr>

                        <tr>
                            <td>DPH 20%:</td>
                            <td class="font-weight-medium">67,20 €</td>
                        </tr>

                        <tr>
                            <td>Doprava:</td>
                            <td class="font-weight-medium">4,45 €</td>
                        </tr>

                        <tr>
                            <td>Spolu s DPH:</td>
                            <td class="font-weight-medium">407,65 €</td>
                        </tr>
                    </table>
                </div>

                <div class="col-xs-12 col-md-5">
                    <?php if (!$edited): ?>
                        <?php if ($paid): ?>
                            <div class="form-group">
                                <span class="order-box-label">Spôsob platby</span>

                                <div class="order-box-fake-input">
                                    Platba kartou

                                    <span>
                                        <svg class="icon stroke-success">
                                            <use xlink:href="#sprite-check-circled"></use>
                                        </svg>

                                        Zaplatené
                                    </span>
                                </div>
                            </div>

                            <a href="#" class="btn btn-success btn-full btn-icon btn-download-invoice">
                                <svg class="icon fill-white">
                                    <use xlink:href="#sprite-download"></use>
                                </svg>

                                Stiahnuť faktúru
                            </a>
                        <?php else: ?>
                            <form>
                                <label for="<?php echo $id ?>-payment-method-1" class="order-box-label">Spôsob platby</label>
                                <?php select($id . '-payment-method-1', 'Spôsob platby', 'dobierka', [
                                        'dobierka' => ['text' => 'Dobierka (+ 1,25 €)'],
                                        'card' => ['text' => 'Platba kartou'],
                                        'bank-transfer' => ['text' => 'Platba vopred prevodom'],
                                    ],
                                    false,
                                    'Zmeniť',
                                'payment-method'
                                )
                                ?>

                                <button class="btn btn-success btn-full">
                                    Zaplatiť
                                </button>
                            </form>

                            <div class="order-box-gray-section" data-visible-when-payment-method="bank-transfer">
                                <img src="img/account/qrcode.png" alt="qr code" class="mb-4" width="86" height="86">

                                <div class="form-group">
                                    <div class="order-box-label">IBAN</div>
                                    <div>SK23 8330 0000 0024 0044 3547</div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <div class="order-box-label">Variabilní symbol</div>
                                            <div>2020331000</div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <div class="order-box-label">Dátum splatnosti</div>
                                            <div>21.06.2021</div>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <div class="order-box-label">Suma</div>
                                    <div>407,65 €</div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php else: ?>
                        <div class="form-group">
                            <span class="order-box-label">Spôsob platby</span>

                            <div class="order-box-fake-input">
                                Platba vopred prevodom
                            </div>
                        </div>

                        <div class="order-box-gray-section order-box-gray-section-edited">
                            <svg class="icon stroke-primary">
                                <use xlink:href="#sprite-check-circled"></use>
                            </svg>

                            <div class="order-box-gray-section-edited-title">Požiadavka na úpravu objednávky bola prijatá</div>
                            <div class="text-faded">v priebehu 24 hodín vás budeme kontaktovať ohľadom možnosti zmeny</div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="row order-box-row mt-4 open-visible">
                <div class="col-xs-12 col-md-6 order-box-col">
                    <h2 class="order-box-subtitle">Fakturačná adresa</h2>

                    <table class="table table-sm table-space-between order-box-table">
                        <tr>
                            <th>Firma</th>
                            <td>ui42 spol. s.r.o.</td>
                        </tr>

                        <tr>
                            <th>IČO</th>
                            <td>35713003</td>
                        </tr>

                        <tr>
                            <th>DIČ</th>
                            <td>2020227770</td>
                        </tr>

                        <tr>
                            <th>IČ DPH</th>
                            <td><i>Nie je platiteľom DPH</i></td>
                        </tr>

                        <tr>
                            <th>Ulica a číslo</th>
                            <td>Sibírska 62</td>
                        </tr>

                        <tr>
                            <th>Krajina</th>
                            <td>Slovenska Republika</td>
                        </tr>

                        <tr>
                            <th>PSČ</th>
                            <td>831 02</td>
                        </tr>

                        <tr>
                            <th>Meno</th>
                            <td>Fero Novotny</td>
                        </tr>

                        <tr>
                            <th>Fakturačný e-mail</th>
                            <td>fero@ui42.com</td>
                        </tr>

                        <tr>
                            <th>Telefónne číslo</th>
                            <td>+421 944 111 222</td>
                        </tr>
                    </table>
                </div>

                <div class="col-xs-12 col-md-6 order-box-col">
                    <h2 class="order-box-subtitle">Dodacia adresa</h2>

                    <table class="table table-sm table-space-between order-box-table">
                        <tr>
                            <th>Firma/Meno</th>
                            <td>Fero Novotny</td>
                        </tr>

                        <tr>
                            <th>Ulica a číslo</th>
                            <td>Sibírska 62</td>
                        </tr>

                        <tr>
                            <th>Mesto</th>
                            <td>Bratislava</td>
                        </tr>

                        <tr>
                            <th>Krajina</th>
                            <td>Slovenska Republika</td>
                        </tr>

                        <tr>
                            <th>PSČ</th>
                            <td>831 02</td>
                        </tr>

                        <tr>
                            <th>Telefónne číslo</th>
                            <td>+421 944 111 222</td>
                        </tr>

                        <tr>
                            <th>Doprava</th>
                            <td>Kuriér</td>
                        </tr>

                        <tr>
                            <th>Platba</th>
                            <td>Kartou vopred</td>
                        </tr>
                    </table>
                </div>

                <div class="col-xs-12 col-md-6 order-box-col">
                    <table class="table table-sm table-space-between order-box-table">
                        <tr>
                            <td>Medzisúčet:</td>
                            <td class="font-weight-medium">336,00 €</td>
                        </tr>

                        <tr>
                            <td>DPH 20%:</td>
                            <td class="font-weight-medium">67,20 €</td>
                        </tr>

                        <tr>
                            <td>Doprava:</td>
                            <td class="font-weight-medium">4,45 €</td>
                        </tr>

                        <tr>
                            <td>Spolu s DPH:</td>
                            <td class="font-weight-medium">407,65 €</td>
                        </tr>
                    </table>
                </div>
            </div>

            <?php if ($editable): ?>
            <div id="<?php echo $id . '-edit' ?>" class="order-box-edit" data-type="order-edit">
                <div class="order-box-edit-header">
                    <div class="order-box-edit-header-icon">
                        <svg class="icon fill-primary">
                            <use xlink:href="#sprite-pencil"></use>
                        </svg>
                    </div>

                    <div class="order-box-edit-header-title">Upraviť objednávku</div>

                    <div class="order-box-edit-header-close">
                        <button type="button" class="btn btn-transparent btn-icon-only" data-order-edit-close="#<?php echo $id . '-edit' ?>">
                            <svg class="icon">
                                <use xlink:href="#sprite-cancel"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="order-box-edit-body">
                    <form>
                        <div class="form-group">
                            <textarea rows="6" class="order-textarea" placeholder="Napíšte sem požadované zmeny"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-icon-right">
                            Odoslať

                            <svg class="icon stroke-white">
                                <use xlink:href="#sprite-chevron-right"></use>
                            </svg>
                        </button>

                        <div class="mt-3 text-faded small">
                            Po odoslaní vás budeme kontaktovať<br> ohľadom možnosti zmeny v objednávke
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="order-box-footer">
            <button class="btn btn-footer-toggle" data-toggle-class="open" data-target="#<?php echo $id ?>">
                <span class="open-hidden inline-block">Detail objednávky</span>
                <span class="open-visible inline-block">Skryť detail</span>
            </button>

            <?php if($bottomActionsVisible): ?>
            <div class="order-box-footer-actions">
                <button class="btn btn-bordered btn-icon">
                    <svg class="icon stroke-success">
                        <use xlink:href="#sprite-reorder"></use>
                    </svg>

                    Opakovať objednávku
                </button>

                <?php if($editable): ?>
                    <button class="btn btn-bordered btn-icon" data-order-edit-open="#<?php echo $id . '-edit' ?>">
                        <svg class="icon fill-primary">
                            <use xlink:href="#sprite-pencil"></use>
                        </svg>

                        Upraviť objednávku
                    </button>
                <?php else: ?>
                    <button class="btn btn-bordered btn-icon">
                        <svg class="icon stroke-success">
                            <use xlink:href="#sprite-car"></use>
                        </svg>

                        Sledovať zásielku
                    </button>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
<?php } ?>