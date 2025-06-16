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
    <title>Beranda - DrinkHub</title>
</head>
<body class="bg-gradient-to-t from-blue-100 to-white">
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

<body class="font-poppins ">
  <div class="bg-blue-200 py-20 px-10 relative">
    <div class="mx-auto my-10 px-4 py-10 flex flex-row items-center justify-center">
      
      <!-- Kiri: Logo dan Brand -->
      <div class="flex flex-col items-center lg:items-start text-center lg:text-left mx-10 gap-y-8">
        <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" width="300">
      </div>

      <!-- Kanan: Teks Deskripsi -->
      <div class="mt-10 lg:mt-0 lg:w-1/2 text-cyan-950 gap-y-8 mx-10">
        <h2 class="text-2xl lg:text-4xl font-semibold font-serif text-white">THE PERFECT BLEND<br><span class="font-bold">FOR EVERY SIP</span></h2>
        <p class="mt-4 text-sm text-cyan-950">
          Purchase your favorite drink from your favorite places here, on our web. As smooth as in the app. Same fast delivery. Countless places to try.
        </p>
      </div>
    </div>

    <!-- Box Lokasi -->
    <div class="absolute left-1/2 transform -translate-x-1/2 top-150 z-10">
      <div class="flex flex-col lg:flex-row items-center justify-center mt-4 gap-4">
        <div class="bg-gradient-to-t from-cyan-950 to-cyan-900 text-white px-6 py-4 rounded-3xl flex flex-col items-center gap-4 shadow-lg">
          <div class="text-sm font-semibold">Lokasimu</div>
            <div class="flex flex-col lg:flex-row">
              <div class="flex items-center bg-white text-black px-4 py-2 rounded-full gap-2 w-full max-w-xs mx-2">
                <span class="text-lg">📍</span>
                <span class="truncate text-sm">Jl. Mayjen Sungkono No....</span>
                <svg class="w-4 h-4 text-gray-500 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
              <button class="bg-gradient-to-t from-cyan-800 to-cyan-600 text-white text-xs px-6 py-2 rounded-full font-semibold hover:opacity-90 transition mx-2">
                Explore
              </button>
            </div>
        </div>

        {{-- Cuaca  --}}
        <div>
          <div class="bg-gradient-to-t from-cyan-950 to-cyan-900 text-white px-7 py-7 rounded-3xl flex flex-col lg:flex-row items-center gap-4 shadow-lg">
            <span class="text-white flex flex-col lg:flex-row items-center justify-center">
              <img src="{{ asset('build/assets/img/hot.png') }}" alt="hot" width="50" class="">
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section Bawah -->
  <div class="mt-28 text-center flex flex-col justify-center items-center">

    <h2 class="text-2xl font-bold text-[#001f3f]">Cuaca panas, enaknya minum apa?</h2>
    <p class="text-gray-800 mt-2">Temukan beragam minuman favorit, menu andalan lokal, dan penawaran eksklusif di dekatmu.</p>
    <div class="w-20 h-1 bg-blue-300 mx-auto mt-4 rounded-full"></div>

    {{-- Card  menu --}}
    <div class="m-10 flex gap-10">
      <div class="w-72 h-96 bg-gradient-to-r from-cyan-950 to-cyan-900 rounded-3xl overflow-hidden text-left shadow-xl shadow-black/30 
                  transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105">
        <div class="h-3/5">
          <img src="https://th.bing.com/th/id/OIP.lyHmygf4dxoCY3VAqxfvvgHaHZ?o=7&cb=thvnextc1rm=3&rs=1&pid=ImgDetMain" alt="kopken" class="w-full h-full object-cover">
              <h3 class="my-3 mx-5 text-xl text-white font-bold">Kopi Kenangan</h3>
              {{-- Rating --}}
              <div class="flex gap-2">
                <div class="text-xs ml-5">
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="far fa-star text-white"></i>
                </div>
                {{-- Angka rating --}}
                <p class="text-white text-xs">4.6</p>
                {{-- Jumlah rating --}}
                <p class="text-white text-xs">(1.200 ulasan)</p>
              </div>
              {{-- Lokasi --}}
              <div class="ml-5 mt-5 flex gap-2">
                <div class="content-center">
                  <i class="fas fa-map-marker-alt text-white"></i>
                </div>
                <div class="flex-col text-xs text-white">
                  <p>1.7 km</p>
                  <p>Jl. Mayjen Sungkono No....</p>
                </div>
              </div>
        </div>
      </div>
      
      <a href="/produk/janjijiwa">
        <div class="w-72 h-96 bg-gradient-to-r from-cyan-950 to-cyan-900 rounded-3xl overflow-hidden text-left shadow-xl shadow-black/30
                    transition-all duration-300 ease-in-out hover:-translate-y-2 hover:scale-105">
          <div class="h-3/5">
            <img src="https://kulinerkota.com/wp-content/uploads/2021/11/kopijanjijiwa.bdg_.maranatha_117375713_339941020360543_8110940709322829824_n.jpg" alt="janjiw" class="w-full h-full object-cover">
            <h3 class="my-3 mx-5 text-xl text-white font-bold">Janji Jiwa</h3>
                {{-- Rating --}}
                <div class="flex gap-2">
                  <div class="text-xs ml-5">
                    <i class="fas fa-star text-white"></i>
                    <i class="fas fa-star text-white"></i>
                    <i class="fas fa-star text-white"></i>
                    <i class="fas fa-star text-white"></i>
                    <i class="far fa-star text-white"></i>
                  </div>
                  {{-- Angka rating --}}
                  <p class="text-white text-xs">4.6</p>
                  {{-- Jumlah rating --}}
                  <p class="text-white text-xs">(1.234 ulasan)</p>
                </div>
                {{-- Lokasi --}}
                <div class="ml-5 mt-5 flex gap-2">
                  <div class="content-center">
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <div class="flex-col text-xs text-white">
                    <p>1.1 km</p>
                    <p>Jl. Mayjen Sungkono No....</p>
                  </div>
                </div>
          </div>
        </div>

      </div>

      <div class="my-14">
        <a href="#" class="bg-gradient-to-t from-cyan-800 to-cyan-600 text-white text-xs px-6 py-2 rounded-full font-semibold hover:opacity-90 transition mx-2">
            Lihat Produk Lain
        </a>
      </div>
    </a>

  </div>
<!-- Section Cabang -->
<div class="bg-blue-200 py-20 px-10 text-center">
  <div class="flex flex-wrap justify-center gap-6">
    <!-- Daftar Cabang -->
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Purwokerto Utara</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Purwokerto Timur</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Purwokerto Selatan</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Purwokerto Barat</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Sokaraja</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Kebumen</span>
    <span class="bg-white text-cyan-950 font-semibold rounded-full px-6 py-2 shadow-md">Ajibarang</span>
  </div>
  <div class="my-14">
      <button class="bg-gradient-to-t from-cyan-800 to-cyan-600 text-white text-xs px-6 py-2 rounded-full font-semibold hover:opacity-90 transition mx-2">
          Lihat Daerah Lain
      </button>
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