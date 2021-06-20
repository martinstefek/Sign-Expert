$(document).ready(function() {
    const id = 'wishlist-product-detail-modal-script';

    $('#wishlist-product-detail').on('show.bs.modal', () => {
        const existingScript = document.getElementById(id);

        if (existingScript) {
            document.body.removeChild(existingScript);
        }

        const script = document.createElement('script');
        script.setAttribute('src', './js/detail.js');
        script.setAttribute('id', id);

        setTimeout(() => {
            document.body.appendChild(script);
        }, 300);
    });
});
