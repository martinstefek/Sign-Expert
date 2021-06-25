<?php include_once('headerSearch.php'); ?>

<div class="header-mobile">
    <div class="mid-header-mobile">
        <div class="container">
            <a href="<?php indexHref() ?>" class="logo" aria-label="Logo">
                <svg class="icon">
                    <use xlink:href="#sprite-logo"></use>
                </svg>
            </a>

            <div class="mobile-header-actions">
                <button type="button"
                   class="btn main-header-mobile-action"
                   data-toggle="modal"
                   data-target="#login-register-modal"
                    aria-label="Prihlásenie a registrácia"
                >
                    <svg class="icon stroke-primary">
                        <use xlink:href="#sprite-avatar"></use>
                    </svg>
                </button>

                <button type="button" class="btn main-header-mobile-action" data-toggle="shopping-cart-modal" aria-label="Košík">
                    <svg class="icon stroke-primary">
                        <use xlink:href="#sprite-shopping-cart"></use>
                    </svg>
                </button>

                <span id="mobile-nav-open" class="main-header-mobile-action" aria-label="Navigácia">
                    <svg class="icon action-icon-grey">
                        <use xlink:href="#sprite-menu"></use>
                    </svg>
                </span>
            </div>
        </div>
    </div>

    <div class="bottom-header-mobile">
        <div class="container">
            <?php headerSearch('header-search-mobile'); ?>
        </div>
    </div>
</div>
