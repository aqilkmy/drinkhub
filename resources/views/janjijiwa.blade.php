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
    <title>Janji Jiwa - DrinkHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }, function (error) {
            console.error("Geolocation error:", error.message);
        });
    } else {
        alert("Geolocation tidak didukung di browser ini.");
    }
});
</script>


<body class="font-poppins bg-gradient-to-t from-blue-100 to-white">
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
{{-- main --}}
    <div>
      {{-- atas --}}
      <div class="pt-24 px-8 pb-12 flex-col"> 
          <a href="/produk" class="inline-flex items-center gap-2 py-2 pb-4 px-4 text-cyan-950 hover:text-gray-600 text-lg font-semibold z-50"> 
              <i class="fa-solid fa-arrow-left"></i>
              <span>Kembali</span> 
          </a>

          <div class="flex gap-x-5 ml-4">
            <div class="w-[250px] h-[150px] rounded-3xl overflow-hidden">
              <img src="https://kulinerkota.com/wp-content/uploads/2021/11/kopijanjijiwa.bdg_.maranatha_117375713_339941020360543_8110940709322829824_n.jpg" alt="janjiw" class="w-full h-full object-cover">
            </div>
            <p class="text-cyan-950 text-4xl font-extrabold content-center">Janji Jiwa <br>Purbalingga</p>
          </div>
      </div> 
      {{-- tengah --}}
      <div class="px-16 flex bg-blue-50 w-full h-24 gap-x-10 items-center">
        <div class="flex py-4 text-cyan-950 gap-x-6">
{{-- ulasan --}}
          <div class="flex-col justify-center">
              <div class="flex gap-x-2 items-center">
                    <i class="fa fa-star text-amber-200"></i>
                    <p class="font-bold text-lg">4,7</p>
              </div>
              <p class=" text-center">Ulasan</p>
            </div>
          </div>
          <div class="w-0.5 h-4/5 bg-blue-100 rounded-full"></div>
{{-- jarak --}}
        <div class="flex-col justify-center">
            <div class="flex gap-x-2 items-center">
                <i class="fa fa-map-marker-alt text-red-800"></i>
                <p class="font-bold text-lg">1,7 km</p>
            </div>
            <p class="text-center">Jarak</p>
        </div>
        <div class="w-0.5 h-4/5 bg-blue-100 rounded-full"></div>
{{-- harga --}}
        <div class="flex-col justify-center">
            <div class="flex gap-x-2 justify-center">
                <p class="font-bold text-green-800 text-xl text-center">$$$</p>
            </div>
            <p class="text-center">15rb - 28rb</p>
        </div>
        <div class="w-0.5 h-4/5 bg-blue-100 rounded-full"></div>


      </div>
    </div>

    {{-- MENU --}}
    <div class="px-16 py-12">
        <p class="text-cyan-950 text-2xl font-bold">Orang-orang pada doyan ini</p>
        <div class="flex flex-wrap gap-y-[30px] gap-x-[30px] pt-12 justify-center">
                <!-- Card 1 (Es Kopi Susu) -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                    <div class="p-6 relative h-full">
                        <div class="flex">
                            <div class="w-3/5">
                                <p class="text-2xl text-cyan-950 font-bold">Es Kopi Susu</p>
                                <p class="text-cyan-950">Espresso dan susu pakai gula aren</p>
                                <p class="text-cyan-950 text-sm mt-10">18.000</p>
                            </div>
                            <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                                <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-1.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute right-0 bottom-4 mr-6">
                            <div id="addButton_1" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center ">
                                <p class="text-sm">Tambah</p>
                            </div>
                            <div id="quantityCounter_1" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                                <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                                <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                                <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 (Ice Latte) -->
                 <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                    <div class="p-6 relative h-full">
                        <div class="flex">
                            <div class="w-3/5">
                                <p class="text-2xl text-cyan-950 font-bold">Ice Latte</p>
                                <p class="text-cyan-950">Espresso dan susu segar tanpa gula</p>
                                <p class="text-cyan-950 text-sm mt-10">18.000</p>
                            </div>
                            <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                                <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-9.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute right-0 bottom-4 mr-6">
                            <div id="addButton_2" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center ">
                                <p class="text-sm">Tambah</p>
                            </div>
                            <div id="quantityCounter_2" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                                <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                                <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                                <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3: Es Kopi Pokat -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                  <div class="p-6 relative h-full">
                    <div class="flex">
                      <div class="w-3/5">
                        <p class="text-2xl text-cyan-950 font-bold">Es Kopi Pokat</p>
                        <p class="text-cyan-950">Espresso, alpukat + es krim cokelat</p>
                        <p class="text-cyan-950 text-sm mt-10">28.000</p>
                      </div>
                      <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                        <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-2.png" alt="" class="w-full h-full object-cover">
                      </div>
                    </div>
                    <div class="absolute right-0 bottom-4 mr-6">
                      <div id="addButton_3" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center">
                        <p class="text-sm">Tambah</p>
                      </div>
                      <div id="quantityCounter_3" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                        <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                        <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                        <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 4: Es Coco Presso -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                  <div class="p-6 relative h-full">
                    <div class="flex">
                      <div class="w-3/5">
                        <p class="text-2xl text-cyan-950 font-bold">Es Coco Presso</p>
                        <p class="text-cyan-950">Espresso dan air kelapa</p>
                        <p class="text-cyan-950 text-sm mt-10">18.000</p>
                      </div>
                      <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                        <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-3.png" alt="" class="w-full h-full object-cover scale-95">
                      </div>
                    </div>
                    <div class="absolute right-0 bottom-4 mr-6">
                      <div id="addButton_4" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center">
                        <p class="text-sm">Tambah</p>
                      </div>
                      <div id="quantityCounter_4" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                        <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                        <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                        <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 5: Es Kopi Hitam -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                  <div class="p-6 relative h-full">
                    <div class="flex">
                      <div class="w-3/5">
                        <p class="text-2xl text-cyan-950 font-bold">Es Kopi Hitam</p>
                        <p class="text-cyan-950">Espresso dan air mineral</p>
                        <p class="text-cyan-950 text-sm mt-10">15.000</p>
                      </div>
                      <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                        <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-4.png" alt="" class="w-full h-full object-cover">
                      </div>
                    </div>
                    <div class="absolute right-0 bottom-4 mr-6">
                      <div id="addButton_5" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center">
                        <p class="text-sm">Tambah</p>
                      </div>
                      <div id="quantityCounter_5" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                        <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                        <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                        <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 6: Es Kopi Soklat -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                  <div class="p-6 relative h-full">
                    <div class="flex">
                      <div class="w-3/5">
                        <p class="text-2xl text-cyan-950 font-bold">Es Kopi Soklat</p>
                        <p class="text-cyan-950">Espresso, susu + cokelat</p>
                        <p class="text-cyan-950 text-sm mt-10">20.000</p>
                      </div>
                      <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                        <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-5.png" alt="" class="w-full h-full object-cover scale-90">
                      </div>
                    </div>
                    <div class="absolute right-0 bottom-4 mr-6">
                      <div id="addButton_6" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center">
                        <p class="text-sm">Tambah</p>
                      </div>
                      <div id="quantityCounter_6" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                        <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                        <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                        <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 7: Ice Americano -->
                <div class="w-[430px] h-[225px] border border-gray-200 bg-white rounded-2xl shadow-lg shadow-black/10">
                  <div class="p-6 relative h-full">
                    <div class="flex">
                      <div class="w-3/5">
                        <p class="text-2xl text-cyan-950 font-bold">Ice Americano</p>
                        <p class="text-cyan-950">Kopi hitam tanpa gula</p>
                        <p class="text-cyan-950 text-sm mt-10">15.000</p>
                      </div>
                      <div class="absolute right-0 top-0 mr-6 mt-6 w-[150px] h-[150px] overflow-hidden">
                        <img src="https://janjijiwa.vercel.app/assets/img/enak-kopi/menu-6.png" alt="" class="w-full h-full object-cover">
                      </div>
                    </div>
                    <div class="absolute right-0 bottom-4 mr-6">
                      <div id="addButton_7" class="add-button w-[150px] py-2 border-2 text-cyan-950 border-cyan-950 hover:text-white hover:bg-gradient-to-r from-cyan-950 to-cyan-900 cursor-pointer transition-all duration-300 ease-in-out px-2 rounded-3xl text-center">
                        <p class="text-sm">Tambah</p>
                      </div>
                      <div id="quantityCounter_7" class="quantity-counter hidden flex items-center justify-between w-[150px] py-2 px-2 rounded-3xl transition-all duration-300 ease-in-out">
                        <button class="w-8 h-8 rounded-full bg-cyan-950 text-white flex items-center justify-center font-bold text-lg hover:opacity-80 transition-opacity" onclick="decreaseQuantity(this)">-</button>
                        <span class="text-cyan-950 font-bold text-lg mx-2" data-quantity="0">0</span>
                        <button class="w-8 h-8 rounded-full border-2 border-cyan-950 text-cyan-950 flex items-center justify-center font-bold text-lg hover:bg-gray-100 transition-colors" onclick="increaseQuantity(this)">+</button>
                      </div>
                    </div>
                  </div>
                </div>
                  
            </div>
    </div>


    {{-- Keranjang --}}

    <div id="cartBar" class="hidden sticky bottom-5 z-50 w-full flex justify-center px-4 mb-6">
      <div class="w-full max-w-md flex items-center justify-between bg-gradient-to-r from-cyan-950 to-cyan-900 text-white px-6 py-3 rounded-full shadow-lg">
        <span id="cartItems" class="font-bold text-sm">0 Item</span>
        <div class="flex items-center gap-2">
          <span id="cartTotal" class="font-bold text-sm">0</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="white" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.293 2.293a1 1 0 001.414 1.414L8 14h9a1 1 0 001-1v-1H7zm0 0V7h12v6H7z"/></svg>
        </div>
      </div>
    </div>

    {{-- <Checkout --}}
    <div id="checkoutModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50">
      <div class="bg-white w-full max-w-md rounded-2xl p-6 max-h-[80vh] overflow-y-auto relative">
        <button id="closeCheckoutModal" class="absolute top-4 right-4 text-cyan-950 text-2xl font-bold hover:text-red-600 transition">
          &times;
        </button>
        <h2 class="text-xl font-bold text-cyan-950 mb-4">Ringkasan Pesanan</h2>
        <div id="checkoutItems" class="space-y-3 mb-4">
          {{-- item list --}}
        </div>
        <div class="flex justify-between items-center mb-4">
          <span class="text-cyan-950 font-semibold">Total</span>
          <span id="checkoutTotal" class="text-cyan-950 font-bold">Rp 0</span>
        </div>
        <form id="checkout-form" action="{{ route('checkout') }}" method="POST">
          @csrf
          <input type="hidden" name="items_json" id="items-json">
          <input type="hidden" name="latitude" id="latitude">
          <input type="hidden" name="longitude" id="longitude">

          <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded">Kirim Pesanan</button>
        </form>


      </div>
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


<script>
  const prices = {
    1: 16000, // Es Kopi Susu
    2: 17000, // Es Kopi Coklat
    3: 28000, // Es Kopi Pokat
    4: 18000, // Es Coco Presso
    5: 15000, // Es Kopi Hitam
    6: 20000, // Es Kopi Soklat
    7: 15000, // Ice Americano
  };

  function updateCart() {
    let totalItems = 0;
    let totalPrice = 0;

    for (let i = 1; i <= 7; i++) {
      const counter = document.querySelector(`#quantityCounter_${i} [data-quantity]`);
      if (counter) {
        const quantity = parseInt(counter.dataset.quantity);
        if (quantity > 0) {
          totalItems += quantity;
          totalPrice += quantity * prices[i];
        }
      }
    }

    const cartBar = document.getElementById("cartBar");
    const cartItems = document.getElementById("cartItems");
    const cartTotal = document.getElementById("cartTotal");

    if (totalItems > 0) {
      cartBar.classList.remove("hidden");
      cartItems.textContent = `${totalItems} Item`;
      cartTotal.textContent = totalPrice.toLocaleString("id-ID");
    } else {
      cartBar.classList.add("hidden");
    }
  }

  function increaseQuantity(btn) {
    const counter = btn.parentElement;
    const span = counter.querySelector("[data-quantity]");
    let qty = parseInt(span.dataset.quantity);
    qty++;
    span.dataset.quantity = qty;
    span.textContent = qty;
    updateCart();
  }

  function decreaseQuantity(btn) {
    const counter = btn.parentElement;
    const span = counter.querySelector("[data-quantity]");
    let qty = parseInt(span.dataset.quantity);
    if (qty > 0) {
      qty--;
      span.dataset.quantity = qty;
      span.textContent = qty;
    }

    if (qty === 0) {
      const card = counter.closest(".relative");
      const id = card.querySelector(".quantity-counter").id.split("_")[1];
      document.getElementById(`quantityCounter_${id}`).classList.add("hidden");
      document.getElementById(`addButton_${id}`).classList.remove("hidden");
    }

    updateCart();
  }

  document.addEventListener("DOMContentLoaded", () => {
    const addButtons = document.querySelectorAll(".add-button");
    addButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        const id = btn.id.split("_")[1];
        const counter = document.getElementById(`quantityCounter_${id}`);
        const span = counter.querySelector("[data-quantity]");

        span.dataset.quantity = 1;
        span.textContent = "1";

        btn.classList.add("hidden");
        counter.classList.remove("hidden");

        updateCart();
      });
    });

    const closeBtn = document.getElementById("closeCheckoutModal");
    if (closeBtn) {
      closeBtn.addEventListener("click", () => {
        const checkoutModal = document.getElementById("checkoutModal");
        checkoutModal.classList.add("hidden");
      });
    }
  });

  document.getElementById('cartBar').addEventListener('click', function () {
    const checkoutModal = document.getElementById('checkoutModal');
    const checkoutItemsContainer = document.getElementById('checkoutItems');
    const checkoutTotal = document.getElementById('checkoutTotal');

    checkoutItemsContainer.innerHTML = '';
    let totalHarga = 0;

    document.querySelectorAll('.quantity-counter').forEach((counter) => {
      const quantitySpan = counter.querySelector('span[data-quantity]');
      const quantity = parseInt(quantitySpan.dataset.quantity);

      if (quantity > 0) {
        const id = counter.id.split('_')[1];
        const card = counter.closest('.border');
        const title = card.querySelector('p.font-bold').textContent.trim();

        const price = prices[id];
        const subtotal = quantity * price;
        totalHarga += subtotal;

        checkoutItemsContainer.innerHTML += `
          <div class="flex justify-between items-center border-b pb-2">
            <div>
              <p class="font-semibold text-cyan-950">${title}</p>
              <p class="text-sm text-gray-500">${quantity} x Rp ${price.toLocaleString("id-ID")}</p>
            </div>
            <div class="text-cyan-950 font-bold">Rp ${subtotal.toLocaleString("id-ID")}</div>
          </div>
        `;
      }
    });

    checkoutTotal.textContent = `Rp ${totalHarga.toLocaleString("id-ID")}`;
    checkoutModal.classList.remove('hidden');
  });
</script>

<script>
document.getElementById('checkout-form').addEventListener('submit', function (e) {
    const items = [];

    document.querySelectorAll('.quantity-counter').forEach((counter) => {
        const quantitySpan = counter.querySelector('span[data-quantity]');
        const quantity = parseInt(quantitySpan.dataset.quantity);

        if (quantity > 0) {
            const id = counter.id.split('_')[1];
            const card = counter.closest('.border');
            const title = card.querySelector('p.font-bold').textContent.trim();
            const price = prices[id];

            items.push({
                nama_produk: title,
                harga: price,
                jumlah: quantity,
                total: price * quantity
            });
        }
    });

    document.getElementById('items-json').value = JSON.stringify(items);
});
</script>



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
