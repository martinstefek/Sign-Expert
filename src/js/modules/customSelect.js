$(document).ready(function() {
    const optionRender = (state) => {
        console.log(state);
        if (state.element && state.element.dataset.image) {
            return $(`<span class="select2-option-with-image">
                            <span class="select2-option-with-image-wrap">
                                <img src="${state.element.dataset.image}" alt="option item image">
                            </span>
                            ${state.text}
                        </span>`);
        }

        return state.text
    };

    const selectedActionLabelRender = (state) => {
        if (state.element && state.element.dataset.image) {
            return $(`<span class="select2-option-with-action-label">
                            ${state.text}
                            <span class="select2-option-action-label">
                                <img src="${state.element.dataset.image}" alt="option item image">
                            </span>
                        </span>`);
        }

        return state.text
    };

    $('select[data-type="select"]').each((index, item) => {
        const imageType = item.dataset.theme === 'select-image';
        const actionLabel = item.dataset.actionLabel;

        const config = {
            minimumResultsForSearch: -1,
        };

        if (imageType) {
            config.templateResult = optionRender;
            config.templateSelection = optionRender;
        }
        else if (actionLabel) {
            config.templateSelection = (state) => {
                return $(`<span class="select2-option-with-action-label">
                        ${state.text}
                        <span class="select2-option-action-label">
                            ${actionLabel}
                        </span>
                    </span>`);
            };
        }

        $(item).select2(config);
    });

});
