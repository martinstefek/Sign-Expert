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

    $('[data-type="select"]').select2({
        minimumResultsForSearch: -1,
        templateResult: optionRender,
        templateSelection: optionRender,
    });
});
