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
                <?php if (!empty($loggedIn)): ?>
                    <a href="<?php href('account-info.php') ?>"
                       class="btn main-header-mobile-action main-header-mobile-btn-logged-in"
                       aria-label="Zákaznícka zóna"
                    >
                        <svg class="icon">
                            <use xlink:href="#sprite-avatar-logged-in"></use>
                        </svg>
                    </a>
                <?php else: ?>
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
                <?php endif; ?>

                <?php if (!empty($loggedIn)): ?>
                    <button type="button" class="btn main-header-mobile-action main-header-mobile-btn-shopping-cart" data-toggle="shopping-cart-modal" aria-label="Otvoriť košík">
                        <svg class="icon stroke-success">
                            <use xlink:href="#sprite-shopping-cart"></use>
                        </svg>

                        <span class="main-header-mobile-shopping-cart-items">2</span>
                    </button>
                <?php else: ?>
                    <button type="button" class="btn main-header-mobile-action main-header-mobile-btn-shopping-cart" data-toggle="shopping-cart-modal" aria-label="Otvoriť košík">
                        <svg class="icon stroke-primary">
                            <use xlink:href="#sprite-shopping-cart"></use>
                        </svg>
                    </button>
                <?php endif; ?>

                <button id="mobile-nav-open" class="btn btn-transparent main-header-mobile-action" aria-label="Otvoriť navigáciu">
                    <svg class="icon action-icon-grey">
                        <use xlink:href="#sprite-menu"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="bottom-header-mobile">
        <div class="container">
            <?php headerSearch('header-search-mobile'); ?>
        </div>
    </div>
</div>
