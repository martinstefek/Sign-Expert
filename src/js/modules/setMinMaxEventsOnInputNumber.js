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