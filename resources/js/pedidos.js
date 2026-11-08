 document.addEventListener('DOMContentLoaded', () => {
            const cart = new Map();
            const cartItems = document.querySelector('[data-order-items]');
            const cartCount = document.querySelector('[data-cart-count]');
            const totalElement = document.querySelector('[data-total]');
            const formatMoney = amount =>
                `$${amount.toLocaleString('es-MX', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} MXN`;

            const renderCart = () => {
                cartItems.replaceChildren();

                if (cart.size === 0) {
                    const emptyMessage = document.createElement('p');
                    emptyMessage.className = 'text-muted small mb-0';
                    emptyMessage.textContent = 'Tu pedido está vacío.';
                    cartItems.append(emptyMessage);
                }

                let itemCount = 0;
                let subtotal = 0;

                cart.forEach(item => {
                    itemCount += item.quantity;
                    subtotal += item.price * item.quantity;

                    const orderItem = document.createElement('div');
                    orderItem.className = 'order-item pb-3 mb-3 border-bottom';

                    const heading = document.createElement('div');
                    heading.className = 'd-flex justify-content-between align-items-start';

                    const name = document.createElement('h3');
                    name.className = 'item-name h6 mb-1 fw-semibold';
                    name.textContent = item.name;

                    const linePrice = document.createElement('span');
                    linePrice.className = 'item-price fw-semibold';
                    linePrice.textContent = formatMoney(item.price * item.quantity);
                    heading.append(name, linePrice);
                    orderItem.append(heading);

                    const description = document.createElement('p');
                    description.className = 'item-notes text-muted small mb-2';
                    description.textContent = item.description;
                    orderItem.append(description);

                    const details = document.createElement('div');
                    details.className = 'd-flex justify-content-between align-items-center small';

                    const quantity = document.createElement('span');
                    quantity.className = 'fw-semibold';
                    quantity.textContent = `${item.quantity}x ${formatMoney(item.price)}`;

                    const removeButton = document.createElement('button');
                    removeButton.type = 'button';
                    removeButton.className = 'btn-remove btn btn-link p-0 text-danger text-decoration-none small';
                    removeButton.textContent = 'Eliminar';
                    removeButton.dataset.removeProduct = item.id;
                    details.append(quantity, removeButton);
                    orderItem.append(details);
                    cartItems.append(orderItem);
                });

                cartCount.textContent = `${itemCount} ${itemCount === 1 ? 'artículo' : 'artículos'}`;
                totalElement.textContent = formatMoney(subtotal);
            };

            document.querySelectorAll('[data-product-card]').forEach(card => {
                const quantityElement = card.querySelector('.qty-val');

                card.querySelectorAll('[data-quantity-action]').forEach(button => {
                    button.addEventListener('click', () => {
                        const currentQuantity = Number(quantityElement.textContent);
                        const adjustment = button.dataset.quantityAction === 'increase' ? 1 : -1;
                        quantityElement.textContent = Math.max(1, currentQuantity + adjustment);
                    });
                });

                card.querySelector('[data-add-to-order]').addEventListener('click', () => {
                    const id = card.dataset.productId;
                    const quantity = Number(quantityElement.textContent);
                    const existingItem = cart.get(id);

                    if (existingItem) {
                        existingItem.quantity += quantity;
                    } else {
                        cart.set(id, {
                            id,
                            name: card.dataset.productName,
                            description: card.dataset.productDescription,
                            price: Number(card.dataset.productPrice),
                            quantity,
                        });
                    }

                    renderCart();
                });
            });

            cartItems.addEventListener('click', event => {
                const removeButton = event.target.closest('[data-remove-product]');

                if (removeButton) {
                    cart.delete(removeButton.dataset.removeProduct);
                    renderCart();
                }
            });
        });