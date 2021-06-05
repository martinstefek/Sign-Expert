import 'bootstrap/dist/js/bootstrap.min';
import { focusInput } from "./modules/helpers";
import { clickEvent, mobileNavigationThreshold } from "./modules/config";

const mainNavId = '#main-nav';
const currentLevelAttribute = 'data-current-level';

const headerSearchInput = document.getElementById('header-search-input');

const activeClass = 'active';

function navLevelElement(element) {
    return $(element).parent();
}

const allTopLevelItems = $(mainNavId + ' [data-toggle="navigation-first-level"]');
const allFirstLevelItems = $(mainNavId + ' [data-toggle="navigation-second-level"]');

allTopLevelItems.each((index, topLevelItem) => {
    const topLevelParent = navLevelElement(topLevelItem);

    $(topLevelItem).on(clickEvent, (e) => {
        e.preventDefault();

        allTopLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass))
        topLevelParent.addClass(activeClass);
    });

    const allFirstLevelItemsOfSuperior = topLevelParent.find('[data-toggle="navigation-second-level"]');

    allFirstLevelItemsOfSuperior.each((_index, firstLevelItem) => {
        const firstLevelParent = navLevelElement(firstLevelItem);

        $(firstLevelItem).on(clickEvent, (e) => {
           e.preventDefault();
            allFirstLevelItemsOfSuperior.each((__index, i) => navLevelElement(i).removeClass(activeClass));

            firstLevelParent.addClass(activeClass);
        });
    });
});

document.addEventListener(clickEvent, (e) => {
    allTopLevelItems.each((index, item) => {
        if (e.path.some(el => $(el).hasClass('navigation-top-level'))) {
            return;
        }

        navLevelElement(item).removeClass(activeClass);
        allFirstLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));
    });
});













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
