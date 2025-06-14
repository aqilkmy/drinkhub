import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
        const btnMasuk = document.getElementById('btn-masuk');
        const cardWelcome = document.getElementById('card-welcome');
        const cardMasuk = document.getElementById('card-masuk');
        const cardDaftar = document.getElementById('card-daftar');

    
        if (btnMasuk && cardWelcome && cardMasuk) {
            btnMasuk.addEventListener('click', function(event) {
                event.preventDefault();
                cardWelcome.classList.add('hidden'); 
                cardMasuk.classList.remove('hidden');
            });
        }
        if (btnMasuk && cardWelcome && cardDaftar) {
            btnMasuk.addEventListener('click', function(event) {
                event.preventDefault();
                cardWelcome.classList.add('hidden'); 
                cardDaftar.classList.remove('hidden'); 
            });
        }
});