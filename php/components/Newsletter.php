<?php function newsletter() { ?>
<section class="section newsletter">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title"><span class="text-primary">Nezmeškajte</span> noviky, zľavy a vzdelávacie materiály!</h1>
            <div class="section-description">
                Prihláste sa na odber newslettra a už vám nič neunikne.
            </div>
        </div>

        <form class="newsletter-form">
            <input type="text" class="form-control" placeholder="Zadajte svoj e-mail">

            <button type="submit" class="btn btn-primary btn-icon-right">
                <strong>
                    Odoslať
                </strong>

                <svg class="icon">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>
            </button>
        </form>

        <div class="form-notice">Odoslaním e-mailu súhlasíte so spracovaním osobných údajov.</div>
    </div>
</section>
<?php } ?>