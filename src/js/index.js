import 'bootstrap/dist/js/bootstrap.min';
import './modules/navigation';
import './modules/searchAutocomplete';
import './modules/customSelect';
import './modules/banner';
import './modules/accordion';
import './modules/ProductListCarousel';
import './modules/InputWithPlusMinusButtons';
import './modules/setMinMaxEventsOnInputNumber';
import { clickEvent, mobileNavigationThreshold } from "./modules/config";

$(document).ready(function() {
    $("#login-register-tabs").tabs();

    if (window.innerWidth <= mobileNavigationThreshold) {
        $("#account-nav").collapse('hide');
        $("#account-nav").addClass('collapse');
    }
});

import { focusInput } from "./modules/helpers";





// mainNav.on('levelChanged', (e, data) => {
//     const offset = `${data.level * -100}%`;
//
//     mainNav.css('transform', `translate(${offset}, 0)`);
//     mainNav.attr(currentLevelAttribute, data.level);
// });
//
// $('#' + mainNavId + ' [data-toggle="main-nav-next-level"]').each((index, item) => {
//     $(item).on(clickEvent, (e) => {
//         if (window.innerWidth > mobileNavigationThreshold) {
//             return;
//         }
//
//         e.preventDefault();
//
//         const currentLevelAttr = mainNav.attr(currentLevelAttribute);
//         const currentLevel = Number(currentLevelAttr);
//
//         const actualLevel = currentLevelAttr ? currentLevel : 0;
//         const nextLevel = actualLevel + 1;
//
//         mainNav.trigger('levelChanged', {
//             level: nextLevel,
//         });
//
//         $(item).parent().addClass('active');
//     });
// });
//
// $('#' + mainNavId + ' [data-toggle="main-nav-prev-level"]').each((index, item) => {
//     $(item).on(clickEvent, (e) => {
//         if (window.innerWidth > mobileNavigationThreshold) {
//             return;
//         }
//
//         e.preventDefault();
//
//         const currentLevelAttr = mainNav.attr(currentLevelAttribute);
//         const currentLevel = Number(currentLevelAttr);
//
//         if (!currentLevelAttr || currentLevel <= 0) {
//             return;
//         }
//
//         const prev = currentLevel - 1;
//
//         mainNav.trigger('levelChanged', {
//             level: prev,
//         });
//
//         $(item).parent().parent().parent().removeClass('active');
//     });
// });
//
// document.addEventListener('click', (e) => {
//     if (window.innerWidth <= mobileNavigationThreshold) {
//         return;
//     }
//
//     if (mainNavToggle.hasClass(activeClass)) {
//         const shouldNotToggle = e.path.some(item => [mainNavToggleId, mainNavId].includes(item.id));
//
//         if (!shouldNotToggle) {
//             toggleMenuFunction();
//         }
//     }
// });
