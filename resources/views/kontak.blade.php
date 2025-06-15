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
    <title>Kontak - DrinkHub</title>
</head>
<body>
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="fixed top-0 w-full flex items-center justify-between p-4 lg:px-6 bg-blue-200 font-poppins shadow-xl shadow-black/5" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">DrinkHub</span>
            <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" width="80">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="{{ route('beranda') }}"
              class="text-base font-bold relative 
                      {{ Request::is('/') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
              Beranda
          </a>
           <a href="{{ route('produk') }}"
              class="text-base font-bold relative 
                      {{ Request::is('produk') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
              Produk
          </a>
           <a href="{{ route('kontak') }}"
              class="text-base font-bold relative 
                      {{ Request::is('kontak') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
              Kontak
          </a>
          <a href="#" class="text-base/6 font-bold text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">Tentang</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="/masuk" class="text-base/6 font-bold text-cyan-950 bg-white px-4 py-2 rounded-lg hover:opacity-90
                                  transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-101">
            Masuk <span aria-hidden="true"></span></a>
        </div>
      </nav>
    </header>

<body class="bg-gradient-to-b from-[#0e2f4f] to-[#1b416c] text-white font-poppins min-h-screen">

    <div class="container mx-auto px-6 py-40 flex flex-col md:flex-row justify-between items-center gap-10">
    
    <!-- Info Kontak -->
    <div class="max-w-md">
      <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
      <p class="mb-6 text-gray-200">Punya pertanyaan, saran, atau ingin tahu lebih banyak tentang produk kami? Kami senang mendengarnya! Tim kami siap membantu Anda dengan sepenuh hati.</p>
      <ul class="space-y-4 text-gray-300">
        <li class="flex items-start">
          <span class="mr-3">📧</span>
          <span>drinkhub@drunk.co.id</span>
        </li>
        <li class="flex items-start">
          <span class="mr-3">📞</span>
          <span>0869 - 9696 - 6969</span>
        </li>
        <li class="flex items-start">
          <span class="mr-3">📍</span>
          <span>Jl. daong jadian kaga alkidsa no. 69</span>
        </li>
      </ul>
    </div>

    <!-- Form Kontak -->
    <div class="bg-white text-gray-800 rounded-2xl p-8 shadow-lg w-full max-w-lg">
      <h3 class="text-xl font-bold mb-6">Kami senang mendengar <br><span class="text-gray-500">kontol</span></h3>
      <form action="#" method="POST" class="space-y-4">
        <div>
          <input type="text" name="nama" placeholder="Nama Lengkap" required
            class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <input type="email" name="email" placeholder="Email" required
            class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <input type="text" name="telepon" placeholder="Nomor HP" required
            class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <textarea name="pesan" rows="4" placeholder="Pesan" required
            class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <div class="text-right">
          <button type="submit"
            class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full hover:opacity-90 transition">Kirim</button>
        </div>
      </form>
    </div>
  </div>

<footer class="bot-0 bg-cyan-950 px-8 py-4 flex">
  {{-- 2/5 --}}
      <div class="flex justify-start items-start p-8 "> <div class="w-2/5 grid gap-y-8 mr-5">
          <div class="flex flex-row content-center items-center">
              <img src="{{ asset('build/assets/img/logo-white.png') }}" alt="logo" class="h-20">
              <p class="text-white font-extrabold text-3xl">DrinkHub</p>
          </div>
          <div>
              <p class="text-white text-sm">DrinkHub adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div>
              <div class="flex space-x-2">
                  <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-200 transition-colors duration-200">
                      <i class="fab fa-instagram text-cyan-950 text-xl"></i>
                  </a>
                  <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-200 transition-colors duration-200">
                      <i class="fab fa-facebook-f text-cyan-950 text-xl"></i>
                  </a>
                  <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-200 transition-colors duration-200">
                      <i class="fab fa-twitter text-cyan-950 text-xl"></i>
                  </a>
                  <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-200 transition-colors duration-200">
                      <i class="fab fa-tiktok text-cyan-950 text-xl"></i>
                  </a>
              </div>
          </div>
      </div>
{{-- 1/5 --}}
      <div class="w-1/5 grid mr-5 gap-y-8">
          <div class="content-center h-20">
            <a href="#" class="text-xl font-bold text-white items-center">Kontak</a>
          </div>
          <div class="text-white text-sm grid gap-y-2">
              <p>Jl. doang jadian kaga alkdsa no. 69</p>
              <p>0869 - 9696 - 6969</p>
              <p>drinkhub@drunk.co.id</p>
          </div>
      </div>
{{-- 1/5 --}}
      <div class="w-1/5 grid mr-5 gap-y-8">
          <div class="content-center h-20">
            <a href="#" class="text-xl font-bold text-white items-center">Partner</a>
          </div>
          <div class="text-white text-sm gap-y-2 flex">
            <a href="#" class="w-20">
              <img src="https://jiwagroup.com/media/brand/brand_logo-1696822776Logo-JJ.png" alt="Janjiw" class="">
            </a>
            <a href="#" class="w-10">
              <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgBLptG_uWleSX8zc6VdaRVZ98de2lJLs0UnhEPT_FRbk7dGjkX55WE2I7TIwFwVBXc4Yc9fqNhxxoNgUdqXI09eGrPirz7qHORCmMASm4Mi8A-OhFP8WLot0wUwUy1YcEtn1vcNEc5USHRfrY8e7aTofqF5_7xseDYGRvYJoLkGhv4m88Ca8sdWMvBJw/s16000/simbol-kopi-kenangan.png" alt="kopken" class="">
            </a>
            <a href="#" class="w-10">
              <img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Logo.png" alt="sbuck" class="">
            </a>
          </div>
      </div>
{{-- 1/5 --}}
      <div class="w-1/5 grid mr-5 gap-y-8">
          <div class="content-center h-20">
            <a href="#" class="text-xl font-bold text-white items-center">Informasi</a>
          </div>
          <div class="text-white text-sm grid gap-y-2">
              <a href="#">Tentang Kami</a>
          </div>
      </div>
</footer>

</body>


<script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                }
            }
            }
        }
</script>

</html>