import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const cardWelcome = document.getElementById('card-welcome');
    const cardMasuk = document.getElementById('card-masuk');
    const cardDaftar = document.getElementById('card-daftar');

    const btnMasuk = document.getElementById('btn-masuk');
    const btnDaftar = document.getElementById('btn-daftar');

    function showCard(cardToShow) {
        const allCards = [cardWelcome, cardMasuk, cardDaftar];
        
        allCards.forEach(card => {
            if (card) {
                card.classList.add('hidden');
            }
        });

        if (cardToShow) {
            cardToShow.classList.remove('hidden');
        }
    }

    if (btnMasuk) {
        btnMasuk.addEventListener('click', function(event) {
            event.preventDefault(); 
            showCard(cardMasuk);
        });
    }

    if (btnDaftar) {
        btnDaftar.addEventListener('click', function(event) {
            event.preventDefault(); 
            showCard(cardDaftar);
        });
    }

    document.querySelectorAll('.fa-xmark').forEach(xButton => {
        const closeButtonAnchor = xButton.closest('a');
        if (closeButtonAnchor) {
            closeButtonAnchor.addEventListener('click', function(event) {
                event.preventDefault(); 
                showCard(cardWelcome);
            });
        }
    });

    document.querySelectorAll('.add-button').forEach(addButton => {
        const menuId = addButton.id.split('_')[1];
        const quantityCounter = document.getElementById('quantityCounter_' + menuId);
        const quantitySpan = quantityCounter ? quantityCounter.querySelector('span[data-quantity]') : null;

        if (addButton && quantityCounter && quantitySpan) {
            addButton.addEventListener('click', function() {
                addButton.classList.add('hidden');
                quantityCounter.classList.remove('hidden');
                quantitySpan.dataset.quantity = '1';
                quantitySpan.textContent = '1';
            });
        }
    });
});

function increaseQuantity(button) {
    const quantitySpan = button.previousElementSibling;
    let quantity = parseInt(quantitySpan.dataset.quantity);
    quantity++;
    quantitySpan.dataset.quantity = quantity;
    quantitySpan.textContent = quantity;
}

function decreaseQuantity(button) {
    const quantitySpan = button.nextElementSibling;
    let quantity = parseInt(quantitySpan.dataset.quantity);
    if (quantity > 0) {
        quantity--;
        quantitySpan.dataset.quantity = quantity;
        quantitySpan.textContent = quantity;

        if (quantity === 0) {
            const quantityCounter = button.closest('[id^="quantityCounter_"]'); 
            const menuId = quantityCounter.id.split('_')[1];
            const addButton = document.getElementById('addButton_' + menuId);

            quantityCounter.classList.add('hidden');
            if (addButton) {
                addButton.classList.remove('hidden');
            }
        }
    }
}
