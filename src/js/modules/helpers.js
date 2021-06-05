/**
 * This focus function works on every device even on iOS
 * @param element HTMLElement
 */
export const focusInput = (element) => {
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