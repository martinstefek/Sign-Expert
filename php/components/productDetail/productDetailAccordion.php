<?php function productDetailAccordion($id, $initialStateOpen = false) { ?>
<div id="<?php echo $id; ?>" data-type="accordion-item" <?php echo $initialStateOpen ? 'data-initial-state="show"' : '' ?> class="product-detail-accordion">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-5">
                <div class="pd-ac-section">
                    <h2 class="pd-ac-section-title">Popis</h2>
                    <div class="pd-ac-section-content-border">
                        Mimoriadne pružný a neuveriteľne jemný.
                        <br>
                        <br>
                        SignFlex Screen je 100% teplom transferovateľná polyuretánová fólia výnimočná svojim dizajnom. Povrchom totiž pripomína sieťotlač. SignFlex Screen je vhodný
                        na mimoriadne pružné textílie.
                        <br>
                        <br>
                        Fólia je vybavená nelepivým linerom, no napriek tomu je ju možné bez problémov separovať.
                    </div>
                </div>

                <div class="pd-ac-section">
                    <h2 class="pd-ac-section-title">Použitie</h2>
                    <div class="pd-ac-section-content">
                        <ul class="check-list check-list-success">
                            <li>Bavlna</li>
                            <li>Polyester</li>
                        </ul>
                    </div>
                </div>

                <div class="pd-ac-section">
                    <h2 class="pd-ac-section-title">Vlastnosti</h2>
                    <div class="pd-ac-section-content">
                        <table class="table table-md table-space-between table-bordered">
                            <tr>
                                <th>PU</th>
                                <td>na báze vody</td>
                            </tr>
                            <tr>
                                <th>Hrúbka (bez lineru)</th>
                                <td>60μ</td>
                            </tr>
                            <tr>
                                <th>Pranie</th>
                                <td>do 60°C</td>
                            </tr>
                            <tr>
                                <th>Teplota pri aplikácii</th>
                                <td>165°C</td>
                            </tr>
                            <tr>
                                <th>Doba potrebná pre aplikáciu</th>
                                <td>17 sekúnd</td>
                            </tr>
                            <tr>
                                <th>Prítlak</th>
                                <td>stredný až vysoký</td>
                            </tr>
                        </table>

                        <i>Prenosovú fóliu je možné odstrániť po krátkom ochladnutí.</i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 col-xl-offset-1 pd-ac-accordion-right-col">
                <div class="pd-ac-section">
                    <div class="pd-ac-section-content">
                        <a href="#" class="product-detail-video">
                            <img src="img/product-detail/video.jpg" alt="Video thumbnail">
                            <svg class="icon"><use xlink:href="#sprite-play-button"></use></svg>
                        </a>
                    </div>
                </div>

                <div class="pd-ac-section">
                    <h2 class="pd-ac-section-title">Materiály na stiahnutie</h2>

                    <div class="pd-ac-section-content">
                        <div class="product-detail-document">
                            <div class="product-detail-document-preview">
                                <img src="img/product-detail/document.jpg" alt="Názov dokumentu.docx">
                            </div>

                            <div class="product-detail-document-footer">
                                <div class="product-detail-document-title">Názov dokumentu.docx</div>

                                <a href="#" class="btn btn-primary btn-icon product-detail-document-download">
                                    <svg class="icon fill-white"><use xlink:href="#sprite-download"></use></svg>
                                    Sťahnuť
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>