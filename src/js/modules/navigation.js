import { clickEvent, mobileNavigationThreshold } from "./config";

const navigationEvent = window.innerWidth > mobileNavigationThreshold ? 'mouseenter' : clickEvent;

const mainHeaderId = 'main-header';
const mainNavId = '#main-nav';
const mobileNavOpen = document.getElementById('mobile-nav-open');
const mobileNavClose = document.getElementById('mobile-nav-close');
const activeClass = 'active';
const mobileMenuActiveClass = 'navigation-visible';
const mobileMenuSecondLevelActiveClass = 'navigation-second-level-visible';
const mobileMenuSecondLevelTitleId = 'mobile-navigation-title-second-level';
const secondLevelBackButton = document.getElementById('mobile-navigation-second-level-back');

function navLevelElement(element) {
    return $(element).parent();
}

const allTopLevelItems = $(mainNavId + ' [data-toggle="navigation-first-level"]');
const allFirstLevelItems = $(mainNavId + ' [data-toggle="navigation-second-level"]');

allTopLevelItems.each((index, topLevelItem) => {
    const topLevelParent = navLevelElement(topLevelItem);
    const allFirstLevelItemsOfSuperior = topLevelParent.find('[data-toggle="navigation-second-level"]');

    $(topLevelItem).on(navigationEvent, (e) => {
        e.preventDefault();

        if (window.scrollInProgress) {
            return;
        }

        const parentHasActiveClass = topLevelParent.hasClass(activeClass);
        allTopLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));

        if (!parentHasActiveClass) {
            topLevelParent.addClass(activeClass);
            document.body.classList.remove(mobileMenuSecondLevelActiveClass);
            allFirstLevelItemsOfSuperior.each((__index, i) => {
                navLevelElement(i).removeClass(activeClass);
            });
        }

        if (window.innerWidth > mobileNavigationThreshold) {
            document.body.classList.add(mobileMenuSecondLevelActiveClass);
            navLevelElement(allFirstLevelItemsOfSuperior.get(0)).addClass(activeClass);
        }
    });

    allFirstLevelItemsOfSuperior.each((_index, firstLevelItem) => {
        const firstLevelParent = navLevelElement(firstLevelItem);
        const sectionTitle = $(firstLevelParent).data('sectionName');

        $(firstLevelItem).on(navigationEvent, (e) => {
            e.preventDefault();

            if (window.scrollInProgress) {
                return;
            }

            allFirstLevelItemsOfSuperior.each((__index, i) => navLevelElement(i).removeClass(activeClass));

            firstLevelParent.addClass(activeClass);
            document.body.classList.add(mobileMenuSecondLevelActiveClass);

            if (window.innerWidth <= mobileNavigationThreshold) {
                const height = firstLevelParent.find('.navigation-second-level').height();
                $(mainNavId).css('height', height + 'px');
            }

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
    if (e.target?.getAttribute('id') === 'main-header-overlay' && window.innerWidth <= mobileNavigationThreshold) {
        e.preventDefault();
    }

    const path = e.path || (e.composedPath && e.composedPath());

    allTopLevelItems.each((index, item) => {
        if (path.some(el => shouldNotHideNav(el))) {
            return;
        }

        navLevelElement(item).removeClass(activeClass);
        allFirstLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));
        document.body.classList.remove(mobileMenuSecondLevelActiveClass);

        if (window.innerWidth <= mobileNavigationThreshold && path.every(item => item !== mobileNavOpen)) {
            closeNavigation();
        }
    });
});

if (mobileNavOpen) {
    mobileNavOpen.addEventListener(clickEvent, (e) => {
        document.body.classList.add(mobileMenuActiveClass);
    });
}

if (mobileNavClose) {
    mobileNavClose.addEventListener(clickEvent, (e) => {
        closeNavigation();
    });
}

if (secondLevelBackButton) {
    secondLevelBackButton.addEventListener(clickEvent, (e) => {
        document.body.classList.remove(mobileMenuSecondLevelActiveClass);
    });
}

if (window.innerWidth > mobileNavigationThreshold) {
    $(mainNavId).on('mouseleave', () => {
        closeNavigation();
        allTopLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));
        allFirstLevelItems.each((__index, i) => navLevelElement(i).removeClass(activeClass));
    })
}