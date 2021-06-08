import { clickEvent, mobileNavigationThreshold } from "./config";

const mainHeaderId = 'main-header';
const mainNavId = '#main-nav';
const mobileNavOpen = document.getElementById('mobile-nav-open');
const mobileNavClose = document.getElementById('mobile-nav-close');
const activeClass = 'active';
const mobileMenuActiveClass = 'navigation-visible';
const mobileMenuSecondLevelActiveClass = 'mobile-navigation-second-level-visible';
const mobileMenuSecondLevelTitleId = 'mobile-navigation-title-second-level';
const secondLevelBackButton = document.getElementById('mobile-navigation-second-level-back');

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
        const sectionTitle = $(firstLevelParent).data('sectionName');

        $(firstLevelItem).on(clickEvent, (e) => {
            e.preventDefault();
            allFirstLevelItemsOfSuperior.each((__index, i) => navLevelElement(i).removeClass(activeClass));

            firstLevelParent.addClass(activeClass);
            document.body.classList.add(mobileMenuSecondLevelActiveClass);

            const height = firstLevelParent.find('.navigation-second-level').height();
            $(mainNavId).css('height', height + 'px');

            document.getElementById(mobileMenuSecondLevelTitleId).innerHTML = sectionTitle;
        });
    });
});

const closeNavigation = () => {
    document.body.classList.remove(mobileMenuActiveClass);
    document.body.classList.remove(mobileMenuSecondLevelActiveClass);
};

const shouldNotHideNav = (el) => {
    if (window.innerWidth <= mobileNavigationThreshold) {
        return $(el).attr('id') === mainHeaderId;
    } else {
        return $(el).hasClass('navigation-top-level')
    }
}

document.addEventListener(clickEvent, (e) => {
    allTopLevelItems.each((index, item) => {
        if (e.path.some(el => shouldNotHideNav(el))) {
            return;
        }

        navLevelElement(item).removeClass(activeClass);
        allFirstLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));
        document.body.classList.remove(mobileMenuSecondLevelActiveClass);

        if (window.innerWidth <= mobileNavigationThreshold && e.path.every(item => item !== mobileNavOpen)) {
            closeNavigation();
        }
    });
});

mobileNavOpen.addEventListener(clickEvent, (e) => {
    document.body.classList.add(mobileMenuActiveClass);
});

mobileNavClose.addEventListener(clickEvent, (e) => {
    closeNavigation();
});

secondLevelBackButton.addEventListener(clickEvent, (e) => {
    document.body.classList.remove(mobileMenuSecondLevelActiveClass);
});