<?php include_once('../config.php'); ?>

<?php if (!empty($loggedIn)): ?>
<div class="dropdown">
    <button class="btn btn-action dropdown-toggle login-button logged-in" type="button" data-toggle="dropdown" aria-expanded="false">
        <svg class="icon">
            <use xlink:href="#sprite-avatar-logged-in"></use>
        </svg>

        <span>
            <span class="text-highlighted">ui42 spol. s.r.o.</span>
            Klientská zóna
        </span>
        <span class="caret"></span>
    </button>

    <ul class="dropdown-menu">
        <li>
            <a href="<?php href('account-orders.php') ?>" class="dropdown-item active">
                <svg class="icon chevron-icon">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>

                <span>Objednávky a faktury</span>
            </a>
        </li>
        <li>
            <a href="<?php href('account-info.php') ?>" class="dropdown-item">
                <svg class="icon chevron-icon">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>

                <span>Firemné údaje</span>
            </a>
        </li>
        <li>
            <a href="<?php href('account-address.php') ?>" class="dropdown-item">
                <svg class="icon chevron-icon">
                    <use xlink:href="#sprite-chevron-right"></use>
                </svg>

                <span>Adresy</span>
            </a>
        </li>
        <li>
            <a href="<?php href('account-wishlist.php') ?>" class="dropdown-item">
                <svg class="icon stroke-gray-dark fill-none">
                    <use xlink:href="#sprite-heart"></use>
                </svg>

                <span>
                    Nákupný zoznam
                    <span class="badge badge-primary badge-right">2</span>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php href('./index.php'); ?>" class="dropdown-item">
                <svg class="icon fill-gray-dark">
                    <use xlink:href="#sprite-logout"></use>
                </svg>

                <span>Odhlasiť sa</span>
            </a>
        </li>
    </ul>
</div>

<button class="btn btn-action" type="button" data-toggle="shopping-cart-modal">
    <svg class="icon stroke-success">
        <use xlink:href="#sprite-shopping-cart"></use>
    </svg>

    <span class="btn-action-label-mobile-inline">
        <span class="text-highlighted">Košík (2)</span>
        78,75 €
    </span>
</button>
<?php else: ?>
    <button type="button"
       class="btn btn-action login-button"
       data-toggle="modal"
       data-target="#login-register-modal"
    >
        <svg class="icon stroke-primary">
            <use xlink:href="#sprite-avatar"></use>
        </svg>

        <span class="login-button-label">
            <span>Prihlásenie</span>
            <span>Registrácia</span>
        </span>
    </button>

    <button class="btn btn-action" type="button" data-toggle="shopping-cart-modal">
        <svg class="icon stroke-primary">
            <use xlink:href="#sprite-shopping-cart"></use>
        </svg>

        <span class="btn-action-label-mobile-inline">
            <span>Košík</span>
            <span class="hidden-lg">
                0 €
            </span>
        </span>
    </button>
<?php endif; ?>
