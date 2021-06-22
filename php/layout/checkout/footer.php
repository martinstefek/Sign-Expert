        </div>
    </div>

    <footer class="main-footer checkout-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 col-xl-8 col-xl-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-item-list">
                                <div class="contact-item">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-phone"></use>
                                    </svg>

                                    <div class="contact-item-content">
                                        <div class="contact-item-label">Podpora</div>
                                        <div class="contact-item-value">+421 948 048 448</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="contact-item-list">
                                <div class="contact-item">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-phone"></use>
                                    </svg>

                                    <div class="contact-item-content">
                                        <div class="contact-item-label">Objednávky</div>
                                        <div class="contact-item-value">+421 948 448 548</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="contact-item-list">
                                <div class="contact-item">
                                    <svg class="icon">
                                        <use xlink:href="#sprite-email"></use>
                                    </svg>

                                    <div class="contact-item-content">
                                        <div class="contact-item-label">E-mail</div>
                                        <div class="contact-item-value">info@signexpert.sk</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="<?php asset('js/jQuery.js'); ?>"></script>
<script src="<?php asset('js/index.js'); ?>"></script>
<script src="<?php asset('js/checkout.js'); ?>"></script>

<?php echo $footerContent; ?>

<?php if (!USE_HTML_EXTENSION): ?>
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.17.5'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
<?php endif; ?>

</body>
</html>