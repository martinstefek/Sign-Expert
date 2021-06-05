import 'bootstrap/dist/js/bootstrap.min';

/**
 * This focus function works on every device even on iOS
 * @param element HTMLElement
 */
const focusInput = (element) => {
    // create invisible dummy input to receive the focus first
    const fakeInput = document.createElement('input');
    fakeInput.setAttribute('type', 'text');
    fakeInput.style.position = 'absolute';
    fakeInput.style.opacity = '0';
    fakeInput.style.height = '0';
    fakeInput.style.fontSize = '16px'; // disable auto zoom;

    // you may need to append to another element depending on the browser's auto
    // zoom/scroll behavior
    document.body.prepend(fakeInput);

    // focus so that subsequent async focus will work
    fakeInput.focus();

    setTimeout(() => {

        // now we can focus on the target input
        element.focus();

        // cleanup
        fakeInput.remove()

    }, 500)
};

const clickEvent = 'ontouchend' in document ? 'touchend' : 'click';

const mainNavId = 'main-nav';
const mainNav = $('#' + mainNavId);
const mainNavToggleId = 'main-nav-toggle-desktop';
const currentLevelAttribute = 'data-current-level';

const mainNavToggle = $('#' + mainNavToggleId);
const mainNavToggleMobile = $('#main-nav-toggle-mobile');

const searchToggleMobile = $('#search-toggle-mobile');

const headerSearchInput = document.getElementById('header-search-input');

const activeClass = 'active';
const inactiveClass = 'inactive';
const fixedHeaderClass = 'main-header-fixed';

const mobileNavigationThreshold = 991;

const toggleNavigationBodyClass = () => {
    $('body').toggleClass('navigation-visible');
};

const toggleMenuFunction = () => {
    mainNavToggle.toggleClass(activeClass);
    mainNavToggleMobile.toggleClass(activeClass);
    toggleNavigationBodyClass();

    if (mainNavToggle.hasClass(activeClass)) {
        mainNavToggle.removeClass(inactiveClass);
        mainNavToggleMobile.removeClass(inactiveClass);
    } else {
        mainNavToggle.addClass(inactiveClass);
        mainNavToggleMobile.addClass(inactiveClass);
    }
};

const fixedNavigationScrollEventListener = () => {
    if (window.scrollY > 110) {
        $('body').addClass(fixedHeaderClass);
    } else {
        $('body').removeClass(fixedHeaderClass);
    }
};

mainNav.on('levelChanged', (e, data) => {
    const offset = `${data.level * -100}%`;

    mainNav.css('transform', `translate(${offset}, 0)`);
    mainNav.attr(currentLevelAttribute, data.level);
});

$('#' + mainNavId + ' [data-toggle="main-nav-next-level"]').each((index, item) => {
    $(item).on(clickEvent, (e) => {
        if (window.innerWidth > mobileNavigationThreshold) {
            return;
        }

        e.preventDefault();

        const currentLevelAttr = mainNav.attr(currentLevelAttribute);
        const currentLevel = Number(currentLevelAttr);

        const actualLevel = currentLevelAttr ? currentLevel : 0;
        const nextLevel = actualLevel + 1;

        mainNav.trigger('levelChanged', {
            level: nextLevel,
        });

        $(item).parent().addClass('active');
    });
});

$('#' + mainNavId + ' [data-toggle="main-nav-prev-level"]').each((index, item) => {
    $(item).on(clickEvent, (e) => {
        if (window.innerWidth > mobileNavigationThreshold) {
            return;
        }

        e.preventDefault();

        const currentLevelAttr = mainNav.attr(currentLevelAttribute);
        const currentLevel = Number(currentLevelAttr);

        if (!currentLevelAttr || currentLevel <= 0) {
            return;
        }

        const prev = currentLevel - 1;

        mainNav.trigger('levelChanged', {
            level: prev,
        });

        $(item).parent().parent().parent().removeClass('active');
    });
});

searchToggleMobile.on(clickEvent, () => {
    toggleMenuFunction();

    focusInput(headerSearchInput);
});

mainNavToggle.on(clickEvent, () => {
    toggleMenuFunction();
});

mainNavToggleMobile.on(clickEvent, () => {
    toggleMenuFunction();
});

$('[data-toggle="search-reset"]').each((index, item) => {
    $(item).on(clickEvent, () => {
        const target = $(item).attr('data-target');

        // Timeout so it doesn't trigger submit at the same time with reset
        setTimeout(() => {
            $(target).val('');
        }, 100);
    });
});

$('[data-toggle="input-number-decrease"]').each((index, item) => {
    const target = $(item).attr('data-target');
    const targetElement = $(target);

    const boundaryAttr = targetElement.attr('min');
    const boundary = boundaryAttr ? Number(boundaryAttr) : null;

    const addOrRemoveClass = (value) => {
        if (boundary !== null && value <= boundary) {
            $(item).prop('disabled', true);
        } else {
            $(item).prop('disabled', false);
        }
    };

    addOrRemoveClass(targetElement.val());

    $(item).on(clickEvent, () => {
        const elementValue = Number(targetElement.val());

        targetElement.val(elementValue - 1);
        targetElement.change();
    });

    targetElement.on('change', () => {
        const elementValue = Number(targetElement.val());
        addOrRemoveClass(elementValue);
    });
});

$('[data-toggle="input-number-increase"]').each((index, item) => {
    const target = $(item).attr('data-target');
    const targetElement = $(target);

    const boundaryAttr = targetElement.attr('max');
    const boundary = boundaryAttr ? Number(boundaryAttr) : null;

    const addOrRemoveClass = (value) => {
        if (boundary !== null && value >= boundary) {
            $(item).prop('disabled', true);
        } else {
            $(item).prop('disabled', false);
        }
    };

    addOrRemoveClass(targetElement.val());

    $(item).on(clickEvent, () => {
        const elementValue = Number(targetElement.val());

        targetElement.val(elementValue + 1);
        targetElement.change();
    });

    targetElement.on('change', () => {
        const elementValue = Number(targetElement.val());
        addOrRemoveClass(elementValue);
    });
});

$('input[type="number"]').each((index, item) => {
    $(item).on('change', () => {
        const value = $(item).val();
        const numberValue = value.length > 0 ? Number(value) : null;

        const boundaryMinAttr = $(item).attr('min');
        const boundaryMin = boundaryMinAttr ? Number(boundaryMinAttr) : null;

        const boundaryMaxAttr = $(item).attr('max');
        const boundaryMax = boundaryMaxAttr ? Number(boundaryMaxAttr) : null;

        if (boundaryMin !== null && numberValue < boundaryMin) {
            $(item).val(boundaryMin);
        }

        if (boundaryMax !== null && numberValue > boundaryMax) {
            $(item).val(boundaryMax);
        }
    });
});

document.addEventListener('click', (e) => {
    if (window.innerWidth <= mobileNavigationThreshold) {
        return;
    }

    if (mainNavToggle.hasClass(activeClass)) {
        const shouldNotToggle = e.path.some(item => [mainNavToggleId, mainNavId].includes(item.id));

        if (!shouldNotToggle) {
            toggleMenuFunction();
        }
    }
});

document.addEventListener('scroll', () => fixedNavigationScrollEventListener());

fixedNavigationScrollEventListener();
