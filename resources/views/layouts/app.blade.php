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
    <title>Admin Panel - DrinkHub</title>
</head>
<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="fixed top-0 w-full flex items-center justify-between p-4 lg:px-6 bg-blue-200 font-poppins shadow-xl shadow-black/5 z-40" aria-label="Global"> 
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
               <a href="{{ route('tentang') }}"
                  class="text-base font-bold relative 
                          {{ Request::is('tentang') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
                  Tentang
                </a>
                <a href="{{ route('admin.orders.index') }}"
                    class="text-base font-bold relative 
                            {{ Request::is('admin') ? 'text-white after:content-[\'\'] after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-4 after:h-[2px] after:bg-white' : 'text-cyan-950 hover:text-white transition-all duration-300 ease-in-out' }}">
                    Admin
                </a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/masuk" class="text-base/6 font-bold text-cyan-950 bg-white px-4 py-2 rounded-lg hover:opacity-90
                                     transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-101">
                    Masuk <span aria-hidden="true"></span></a>
            </div>
        </nav>
    </header>
</body>
<body class="justify-center bg-blue-200">

    <div class="container">
        @yield('content')
    </div>
</body>
<footer class="bot-0 bg-cyan-950 px-8 py-4 flex">
  {{-- 2/5 --}}
      <div class="flex justify-start items-start p-8 "> <div class="w-2/5 grid gap-y-8 mr-5">
          <div class="flex flex-row content-center items-center">
              <img src="{{ asset('build/assets/img/logo-white.png') }}" alt="logo" class="h-20">
              <p class="text-white font-extrabold text-3xl">DrinkHub</p>
          </div>
          <div>
              <p class="text-white text-sm">
                DrinkHub adalah platform minuman online yang menghadirkan berbagai pilihan minuman kekinian dengan layanan pengantaran cepat berbasis lokasi. DrinkHub hadir untuk memenuhi gaya hidup dinamis Generasi Milenial dan Gen Z.
              </p>
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
