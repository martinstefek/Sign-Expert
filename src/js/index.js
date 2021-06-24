import 'bootstrap/dist/js/bootstrap.min';
import './modules/navigation';
import './modules/searchAutocomplete';
import './modules/customSelect';
import './modules/banner';
import './modules/accordion';
import './modules/ProductListCarousel';
import './modules/InputWithPlusMinusButtons';
import './modules/setMinMaxEventsOnInputNumber';
import './modules/order';
import { clickEvent, mobileNavigationThreshold } from "./modules/config";

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $("#login-register-tabs").tabs();

    if (window.innerWidth <= mobileNavigationThreshold) {
        $("#account-nav").collapse('hide');
        $("#account-nav").addClass('collapse');
    }

    $('[data-toggle-class]').on(clickEvent, (e) => {
        if (window.scrollInProgress) {
            return;
        }

        const toggleClassName = $(e.currentTarget).data('toggleClass');
        const target = $(e.currentTarget).data('target');

        $(target).toggleClass(toggleClassName)
    });

    document.body.classList.add('page-loaded');

    $('[data-toggle="shopping-cart-modal"]').on(clickEvent, (e) => {
        console.log('Event triggered');
        $('body').toggleClass('shopping-cart-modal-visible');
    });

    window.scrollInProgress = false;

    const scrollInProgressEventHandler = () => {
        window.scrollInProgress = true;

        clearTimeout($.data(this, 'scrollTimer'));

        $.data(this, 'scrollTimer', setTimeout(function () {
            window.scrollInProgress = false;
        }, 300));
    }

    $(window).scroll(scrollInProgressEventHandler);
    $('#main-header').scroll(scrollInProgressEventHandler);
});
