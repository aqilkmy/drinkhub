 document.addEventListener('DOMContentLoaded', function() {
        const addButton = document.getElementById('addButton');
        const quantityCounter = document.getElementById('quantityCounter');
        const quantitySpan = quantityCounter.querySelector('span[data-quantity]');

        if (addButton && quantityCounter && quantitySpan) {
            addButton.addEventListener('click', function() {
                addButton.classList.add('hidden');
                quantityCounter.classList.remove('hidden');
                // Mengatur kuantitas awal menjadi 1 saat pertama kali ditambahkan
                quantitySpan.dataset.quantity = '1';
                quantitySpan.textContent = '1';
            });
        }
    });

    function increaseQuantity(button) {
        const quantitySpan = button.previousElementSibling; // Span kuantitas
        let quantity = parseInt(quantitySpan.dataset.quantity);
        quantity++;
        quantitySpan.dataset.quantity = quantity;
        quantitySpan.textContent = quantity;
    }

    function decreaseQuantity(button) {
        const quantitySpan = button.nextElementSibling; // Span kuantitas
        let quantity = parseInt(quantitySpan.dataset.quantity);
        if (quantity > 0) { // Pastikan kuantitas tidak kurang dari 0
            quantity--;
            quantitySpan.dataset.quantity = quantity;
            quantitySpan.textContent = quantity;

            // Jika kuantitas kembali ke 0, sembunyikan counter dan tampilkan tombol "Tambah" lagi
            if (quantity === 0) {
                const quantityCounter = button.closest('#quantityCounter');
                const addButton = quantityCounter.previousElementSibling;
                quantityCounter.classList.add('hidden');
                addButton.classList.remove('hidden');
            }
        }
    }