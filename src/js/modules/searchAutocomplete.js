import { clickEvent, mobileNavigationThreshold } from "./config";
import { focusInput } from "./helpers";
import { debounce } from 'lodash';

const activeClass = 'active';
const headerSearch = document.getElementById('header-search');
const headerSearchInput = document.getElementById('header-search-input');
const headerSearchAutocomplete = document.getElementById('header-search-autocomplete');

headerSearchInput.addEventListener('input', debounce((e) => {
    if (e.target.value.length >= 3) {
        headerSearchAutocomplete.classList.add(activeClass);
        return;
    }

    headerSearchAutocomplete.classList.remove(activeClass);
}, 350));

headerSearchInput.addEventListener('focus', (e) => {
    if (e.target.value.length >= 3) {
        headerSearchAutocomplete.classList.add(activeClass);
    }
});

document.addEventListener(clickEvent, (e) => {
    const path = e.path || (e.composedPath && e.composedPath());

    if (path.includes(headerSearch)) {
        return;
    }

    headerSearchAutocomplete.classList.remove(activeClass);
});
