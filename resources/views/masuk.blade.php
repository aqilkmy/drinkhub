<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('build/assets/img/logo-white.png') }}" class="">
    <title>Daftar - DrinkHub</title>
</head>
<body class="bg-white flex-col">
    <div class="">
        <header class="inset-x-0 top-0 z-50">
        <nav class="fixed top-0 w-full flex items-center justify-between p-4 lg:px-6 bg-blue-200 font-poppins shadow-xl shadow-black/5" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">DrinkHub</span>
                    <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" width="80">
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ route('beranda') }}"
                class="text-base font-bold relative 
                        {{ Request::is('/') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
                Beranda
                </a>
                <a href="#" class="text-base/6 font-bold text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">Produk</a>
                <a href="#" class="text-base/6 font-bold text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">Kontak</a>
                <a href="#" class="text-base/6 font-bold text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">Tentang</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/masuk" class="text-base/6 font-bold text-cyan-950 bg-white px-4 py-2 rounded-lg hover:opacity-90
                                        transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-101">
                    Masuk <span aria-hidden="true"></span>
                </a>
            </div>
        </nav>
        </header>
       <div class="flex justify-center items-center min-h-screen">

        {{-- card login register --}}
    <div id="card-welcome" class="bg-white rounded-3xl relative w-[500px] h-[600px] overflow-hidden mt-20 shadow-xl shadow-black/30">
        <a href="/" class="absolute top-0 right-0 p-4 text-white hover:text-gray-200 text-xl font-bold z-20">
            <i class="fa-solid fa-xmark"></i>
        </a>

        <div class="relative w-full h-1/2 flex items-center justify-center pt-8 px-8">
            <div class="absolute w-full bg-gradient-to-t from-cyan-950 to-cyan-900 rounded-3xl h-48 inset-x-0 top-0"></div>
            <img src="{{ asset('build/assets/img/login-pic.png') }}" alt="Login Picture"
                 class="relative w-4/5 h-auto object-contain z-10 rounded-2xl">
        </div>
        <div class="px-8 py-4">
            <p class="text-cyan-950 text-2xl font-semibold">Selamat datang di DrinkHub!</p>
            <p class=" text-cyan-950 text-sm pt-2">Aplikasi praktis yang siap bantuin kamu buat nyari minuman yang pas</p>
        </div>
        <div class="px-8 pb-4">
            <button id="btn-masuk" class="w-full text-lg bg-gradient-to-t from-cyan-950 to-cyan-900 hover:to-cyan-950 text-white p-2 rounded-3xl mt-4">Masuk</button>
            <button id="btn-daftar" class="w-full text-lg border border-cyan-900 text-cyan-950 p-2 rounded-3xl mt-4 hover:bg-gray-200">Daftar</button>
        </div>
    </div>

    {{-- page login --}}
    <div id="card-masuk" class="hidden">
        <div class="bg-white rounded-3xl relative w-[500px] h-[600px] overflow-hidden mt-20 shadow-xl shadow-black/30">
            <a href="/" class="absolute top-0 right-0 p-4 text-white hover:text-gray-600 text-xl font-bold z-20">
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <div class="relative w-full h-1/2 flex items-center justify-center pt-8 px-8">
                <div class="absolute w-full bg-gradient-to-t from-cyan-950 to-cyan-900 rounded-3xl h-48 inset-x-0 top-0"></div>
                <img src="{{ asset('build/assets/img/login-pic.png') }}" alt="Login Picture"
                    class="relative w-4/5 h-auto object-contain z-10 rounded-2xl">
            </div>
            <div class="px-8 py-4">
                <p class="text-cyan-950 text-2xl font-semibold">Selamat datang kembali di DrinkHub!</p>
                <p class=" text-cyan-950 text-sm pt-2">Masukkan username dan password kamu dibawah</p>
            </div>
            <div class="px-8 py-4">
                <input type="text" placeholder="Username" class="w-full p-2 border border-cyan-900 rounded-3xl mt-4">
                <input type="password" placeholder="Password" class="w-full p-2 border border-cyan-900 rounded-3xl mt-2">
                <button class="w-full bg-gradient-to-t from-cyan-950 to-cyan-900 text-white p-2 rounded-3xl mt-4 hover:to-cyan-950">Masuk</button>
            </div>
        </div>
    </div>

    {{-- page Register --}}
    <div id="card-daftar" class="hidden">
        <div class="bg-white rounded-3xl relative w-[500px] h-[600px] overflow-hidden mt-20 shadow-xl shadow-black/30">
            <a href="/" class="absolute top-0 right-0 p-4 text-white hover:text-gray-600 text-xl font-bold z-20">
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <div class="relative w-full h-1/2 flex items-center justify-center pt-8 px-8">
                <div class="absolute w-full bg-gradient-to-t from-cyan-950 to-cyan-900 rounded-3xl h-48 inset-x-0 top-0"></div>
                <img src="{{ asset('build/assets/img/login-pic.png') }}" alt="Login Picture"
                    class="relative w-4/5 h-auto object-contain z-10 rounded-2xl">
            </div>
            <div class="px-8 py-4">
                <p class="text-cyan-950 text-2xl font-semibold">Selamat datang di DrinkHub!</p>
                <p class=" text-cyan-950 text-sm pt-2">Buat dan masukkan username dan password kamu dibawah</p>
            </div>
            <div class="px-8 py-4">
                <input type="text" placeholder="Username" class="w-full p-2 border border-cyan-900 rounded-3xl mt-4">
                <input type="password" placeholder="Password" class="w-full p-2 border border-cyan-900 rounded-3xl mt-2">
                <button class="w-full bg-gradient-to-t from-cyan-950 to-cyan-900 text-white p-2 rounded-3xl mt-4 hover:to-cyan-950">Daftar</button>
            </div>
        </div>
    </div>
</div>


    </div>
</body>
<script> 
    document.addEventListener('DOMContentLoaded', function() {
    const cardWelcome = document.getElementById('card-welcome');
    const cardMasuk = document.getElementById('card-masuk');
    const cardDaftar = document.getElementById('card-daftar');

    const btnMasuk = document.getElementById('btn-masuk');
    const btnDaftar = document.getElementById('btn-daftar');

    function showCard(cardToShow) {
        [cardWelcome, cardMasuk, cardDaftar].forEach(card => {
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

    document.querySelectorAll('.fa-arrow-right').forEach(xButton => {
        const closeButton = xButton.closest('a');
        if (closeButton) {
            closeButton.addEventListener('click', function(event) {
                event.preventDefault();
                showCard(cardWelcome);
            });
        }
    });
});
</script>
<script src="https://cdn.tailwindcss.com"></script>

</html>