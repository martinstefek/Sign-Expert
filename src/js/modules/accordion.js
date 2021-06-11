import { clickEvent, mobileNavigationThreshold } from "./config";

const accordionTriggers = $('[data-toggle="accordion"]');
const accordions = $('[data-type="accordion"]');

const getTrigger = (panelId) => {
    return $('[data-toggle="accordion"][data-target="#' + panelId + '"]');
};

accordions.each((index, item) => {
    const panels = $(item).find('[data-type="accordion-item"]');

    panels.each((index, panel) => {
        $(panel).addClass('collapse');

        $(panel).collapse({
            toggle: false
        });
    });

    if (window.innerWidth > mobileNavigationThreshold) {
        panels.each((index, panel) => {
            const initialState = $(panel).data('initialState');

            if (index === 0) {
                if (initialState) {
                    $(panel).collapse(initialState);

                    getTrigger($(panel).attr('id')).each((_index, trigger) => {
                        if (initialState === 'show') {
                            $(trigger).addClass('active');
                        } else {
                            $(trigger).removeClass('active');
                        }
                    });

                } else {
                    $(panel).collapse('show');

                    getTrigger($(panel).attr('id')).each((_index, trigger) => {
                        $(trigger).addClass('active');
                    });
                }
            }
        });

    }
});

accordionTriggers.each((index, trigger) => {
    const target = $(trigger).data('target');
    const parent = $(trigger).data('parent');
    const allowClose = $(target).data('allowClose') === true;

    $(target).collapse({
        toggle: false
    });

    trigger.addEventListener(clickEvent, e => {
        if (window.innerWidth > mobileNavigationThreshold && $(target).hasClass('collapse') && $(target).hasClass('in') && !allowClose) {
            return;
        }

        const targetHadClassIn = $(target).hasClass('in');

        $(parent).find('[data-type="accordion-item"]').each((index, panel) => {
            $(panel).collapse('hide');

            getTrigger($(panel).attr('id')).each((_index, _trigger) => {
                $(_trigger).removeClass('active');
            });
        });

        $(target).collapse('show');

        if (targetHadClassIn) {
            getTrigger($(target).attr('id')).each((_index, _trigger) => {
                $(_trigger).removeClass('active');
            });
        } else {
            getTrigger($(target).attr('id')).each((_index, _trigger) => {
                $(_trigger).addClass('active');
            });
        }
    });

});
