import { clickEvent } from "./config";

$('[data-type="order"]').each((index, item) => {
    const select = $(item).find('select[name="payment-method"]');

    const decideVisibilityOfElement = (value) => {
        $('[data-visible-when-payment-method]').each((_index, element) => {
            if (value === element.dataset.visibleWhenPaymentMethod) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
    }

    $(select).on('change', (e) => {
        decideVisibilityOfElement(e.target.value);
    });

    decideVisibilityOfElement(select.val());

    // Order Edit

    const orderEditModal = $(item).find('[data-type="order-edit"]');
    const orderEditModalClose = $(item).find('[data-order-edit-close]');
    const orderEditModalOpen = $(item).find('[data-order-edit-open]');


    $(orderEditModalOpen).on(clickEvent, (e) => {
        console.log('Open');
        orderEditModal.addClass('visible');
    });

    $(orderEditModalClose).on(clickEvent, (e) => {
        console.log('Close');
        orderEditModal.removeClass('visible');
    });
});
