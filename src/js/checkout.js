const searchCompanyInput = $('#register-search-company');
const searchCompanyCancel = $('#register-search-company-cancel');
const searchCompanyAutocomplete = $('#register-search-company-autocomplete');

const showAutocomplete = (length) => {
    if (length >= 3) {
        searchCompanyAutocomplete.addClass('visible');
        searchCompanyCancel.addClass('visible');
    } else {
        searchCompanyAutocomplete.removeClass('visible');
        searchCompanyCancel.removeClass('visible');
    }
};

searchCompanyInput.on('input', (e) => {
    const length = e.target.value.length;

    showAutocomplete(length);
});

searchCompanyInput.on('focus', (e) => {
    const length = e.target.value.length;
    showAutocomplete(length);
});

searchCompanyInput.on('focusout', (e) => {
    searchCompanyAutocomplete.removeClass('visible');
});

searchCompanyCancel.on('click', (e) => {
    searchCompanyInput.val('');
    searchCompanyCancel.removeClass('visible');
});