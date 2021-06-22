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
            <a class="dropdown-item active">
                <span>Objednávky a faktury</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item">
                <span>Firemné údaje</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item">
                <span>Adresy</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item">
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

    <span>
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

        <span>Košík</span>
    </button>
<?php endif; ?>
