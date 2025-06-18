<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('build/assets/img/logo-white.png') }}">
    <title>Tentang - DrinkHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins bg-gray-50">

    {{-- Header --}}
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="fixed top-0 w-full flex items-center justify-between p-4 lg:px-6 bg-blue-200 font-poppins shadow-xl shadow-black/5" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="{{ route('beranda') }}" class="-m-1.5 p-1.5">
            <span class="sr-only">DrinkHub</span>
            <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" width="80">
          </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="{{ route('beranda') }}"
              class="text-base font-bold relative text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">
              Beranda
          </a>
          <a href="{{ route('produk') }}"
              class="text-base font-bold relative text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">
              Produk
          </a>
          <a href="{{ route('kontak') }}"
              class="text-base font-bold relative text-cyan-950 hover:text-white transition-all duration-300 ease-in-out">
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

    {{-- Main Content --}}
    <main class="pt-24">
        <section class="container mx-auto px-6 py-16">
            <div class="flex flex-col md:flex-row items-center justify-center gap-12">
                <div class="w-1/3 flex justify-center">
                    <img src="{{ asset('build/assets/img/logo.png') }}" alt="DrinkHub Logo" class="w-64">
                </div>
                <div class="w-2/3 md:w-1/2 text-cyan-950">
                    <h1 class="text-4xl font-bold mb-4">Apa itu DrinkHub?</h1>
                    <p class="text-base">DrinkHub adalah platform minuman online yang menghadirkan berbagai pilihan minuman kekinian dengan layanan pengantaran cepat berbasis lokasi. DrinkHub hadir untuk memenuhi gaya hidup dinamis Generasi Milenial dan Gen Z.</p>
                </div>
            </div>
        </section>

        <section class="bg-blue-100 py-16">
            <div class="container mx-auto text-center px-6">
                <h2 class="text-3xl font-bold text-cyan-950 mb-4">Visi DrinkHub</h2>
                <blockquote class="text-xl text-cyan-800 italic max-w-4xl mx-auto">
                    "Menjadi platform minuman digital terdepan yang menghubungkan brand minuman lokal dengan konsumen generasi muda secara cepat, personal, dan berkelanjutan melalui teknologi"
                </blockquote>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto text-center px-6">
                <h2 class="text-3xl font-bold text-cyan-950 mb-4">Tujuan</h2>
                <blockquote class="text-xl text-cyan-800 italic max-w-4xl mx-auto">
                    "Membangun ekosistem bisnis minuman kekinian yang terintegrasi secara digital. Melalui aplikasi dan platform digital, DrinkHub memudahkan pelanggan dalam memilih, memesan, dan menerima minuman favorit mereka secara cepat."
                </blockquote>
            </div>
        </section>

        <section class="bg-blue-100 py-20">
            <div class="container mx-auto text-center px-6">
                <h2 class="text-3xl font-bold text-cyan-950 mb-12">Tim Kami</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 justify-items-center">
                    
                    {{-- Ganti src dengan path gambar tim Anda --}}
                    <div class="w-64 text-center">
                        <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D024018" alt="Pancar Wahyu Setiabi" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover bg-white">
                        <h3 class="font-bold text-cyan-950">Pancar Wahyu Setiabi</h3>
                        <p class="text-cyan-800">Jabatan</p>
                    </div>
                    <div class="w-64 text-center">
                        <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D024096" alt="Aqil Karamoy" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover bg-white">
                        <h3 class="font-bold text-cyan-950">Muh. Aqil Karomy</h3>
                        <p class="text-cyan-800">Jabatan</p>
                    </div>
                    <div class="w-64 text-center">
                        <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D024052" alt="Brilian Tri Panggah" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover bg-white">
                        <h3 class="font-bold text-cyan-950">Brilian Tri Panggah</h3>
                        <p class="text-cyan-800">Jabatan</p>
                    </div>
                    <div class="w-64 text-center">
                        <img src="https://registrasi.unsoed.ac.id/infomhs/foto/H1D024042" alt="Aufa Salsabila" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover bg-white">
                        <h3 class="font-bold text-cyan-950">Aufa Salsabila</h3>
                        <p class="text-cyan-800">Jabatan</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
    
    {{-- Footer --}}
    <footer class="bot-0 bg-cyan-950 px-8 py-4 flex">
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
</body>
</html>