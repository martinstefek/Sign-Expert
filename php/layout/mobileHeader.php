<?php include_once('headerSearch.php'); ?>

<div class="header-mobile">
    <div class="mid-header-mobile">
        <div class="container">
            <a href="/" class="logo">
                <svg class="icon">
                    <use xlink:href="#sprite-logo"></use>
                </svg>
            </a>

            <div>
                <a href="#" class="main-header-mobile-action">
                    <svg class="icon stroke-primary">
                        <use xlink:href="#sprite-avatar"></use>
                    </svg>
                </a>

                <a href="#" class="main-header-mobile-action">
                    <svg class="icon stroke-primary">
                        <use xlink:href="#sprite-shopping-cart"></use>
                    </svg>
                </a>

                <span id="mobile-nav-open" class="main-header-mobile-action">
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