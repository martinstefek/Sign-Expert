<?php
function setAccountNavItemActive($index) {
    global $accountNavSelectedIndex;
    echo !empty($accountNavSelectedIndex) && $accountNavSelectedIndex === $index ? 'active' : '' ;
}
?>

<div class="container">
    <div class="account">
        <div class="account-menu-trigger-wrap">
            <button class="btn btn-transparent btn-icon account-menu-trigger" type="button" data-toggle="collapse" data-target="#account-nav">
                <svg class="icon fill-gray"><use xlink:href="#sprite-menu"></use></svg>
                Menu účtu
            </button>
        </div>

        <div id="account-nav" class="account-nav">
            <div class="account-nav-header">
                <a href="#" class="account-nav-img-wrap">
                    <span class="account-nav-img">
                        <img src="img/avatar-photo.jpg" alt="avatar photo">
                    </span>

                    <span class="account-nav-img-plus-btn"></span>
                </a>

                <div class="account-nav-title">ui 42 spol. s r.o.</div>
                <div class="account-nav-description">Sibírska 62</div>
            </div>

            <ul class="account-nav-link-list">
                <li class="account-nav-link <?php setAccountNavItemActive(0) ?>">
                    <a href="#">Objednávky a faktury</a>
                </li>

                <li class="account-nav-link <?php setAccountNavItemActive(1) ?>">
                    <a href="#">Firemné údaje</a>
                </li>

                <li class="account-nav-link <?php setAccountNavItemActive(2) ?>">
                    <a href="#">Adresy</a>
                </li>

                <li class="account-nav-link <?php setAccountNavItemActive(3) ?>">
                    <a href="#">Nastavenia konta</a>
                </li>

                <li class="account-nav-link <?php setAccountNavItemActive(4) ?>">
                    <a href="#">
                        <svg class="icon fill-none stroke-gray-dark"><use xlink:href="#sprite-heart"></use></svg>
                        Nákupný zoznam
                        <span class="badge badge-primary badge-right">2</span>
                    </a>
                </li>

                <li class="account-nav-link <?php setAccountNavItemActive(5) ?>">
                    <a href="#">
                        <svg class="icon fill-gray-dark"><use xlink:href="#sprite-logout"></use></svg>
                        Odhlasiť sa
                    </a>
                </li>
            </ul>
        </div>

        <div class="account-main-content">
