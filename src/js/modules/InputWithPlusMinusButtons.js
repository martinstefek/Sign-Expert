import { clickEvent } from "./config";

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