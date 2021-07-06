import { clickEvent, mobileNavigationThreshold } from "./config";
import { focusInput } from "./helpers";
import { debounce } from 'lodash';

const activeClass = 'active';

const useAutocomplete = (headerSearchId, headerSearchInputId, headerSearchAutocompleteId) => {
    const headerSearch = document.getElementById(headerSearchId);
    const headerSearchInput = document.getElementById(headerSearchInputId);
    const headerSearchAutocomplete = document.getElementById(headerSearchAutocompleteId);
    const clearInputElements = headerSearch.querySelectorAll('[data-clear-search-input]');

    if (headerSearchInput) {
        headerSearchInput.addEventListener('input', debounce((e) => {
            if (e.target.value.length >= 3) {
                headerSearchAutocomplete.classList.add(activeClass);
                headerSearch.classList.add(activeClass);
                return;
            }

            headerSearchAutocomplete.classList.remove(activeClass);
            headerSearch.classList.remove(activeClass);
        }, 350));

        headerSearchInput.addEventListener('focus', (e) => {
            if (e.target.value.length >= 3) {
                headerSearchAutocomplete.classList.add(activeClass);
                headerSearch.classList.add(activeClass);
            }
        });

        document.addEventListener(clickEvent, (e) => {
            const path = e.path || (e.composedPath && e.composedPath());

            if (path.includes(headerSearch)) {
                return;
            }

            headerSearchAutocomplete.classList.remove(activeClass);
            headerSearch.classList.remove(activeClass);
        });

        if (clearInputElements) {
            clearInputElements.forEach(item => {
                item.addEventListener(clickEvent, (e) => {
                    e.preventDefault();
                    headerSearchInput.value = '';
                    headerSearchAutocomplete.classList.remove(activeClass);
                    headerSearch.classList.remove(activeClass);
                });
            });
        }
    }
};

useAutocomplete('header-search', 'header-search-input', 'header-search-autocomplete');
useAutocomplete('header-search-mobile', 'header-search-mobile-input', 'header-search-mobile-autocomplete');
