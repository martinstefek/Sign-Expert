import { clickEvent } from "./config";

const mainNavId = '#main-nav';
const mobileNavOpen = document.getElementById('mobile-nav-open');
const mobileNavClose = document.getElementById('mobile-nav-close');
const currentLevelAttribute = 'data-current-level';
const activeClass = 'active';
const mobileMenuActiveClass = 'navigation-visible';

function navLevelElement(element) {
    return $(element).parent();
}

const allTopLevelItems = $(mainNavId + ' [data-toggle="navigation-first-level"]');
const allFirstLevelItems = $(mainNavId + ' [data-toggle="navigation-second-level"]');

allTopLevelItems.each((index, topLevelItem) => {
    const topLevelParent = navLevelElement(topLevelItem);

    $(topLevelItem).on(clickEvent, (e) => {
        e.preventDefault();

        const parentHasActiveClass = topLevelParent.hasClass(activeClass);
        allTopLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass))

        if (!parentHasActiveClass) {
            topLevelParent.addClass(activeClass);
        }
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

mobileNavOpen.addEventListener(clickEvent, (e) => {
    document.body.classList.add(mobileMenuActiveClass);
});

mobileNavClose.addEventListener(clickEvent, (e) => {
    document.body.classList.remove(mobileMenuActiveClass);
});