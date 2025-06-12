<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-blue-200 font-poppins" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" width="100">
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
        <a href="#" class="text-base/6 font-bold text-cyan-900">Beranda</a>
        <a href="#" class="text-base/6 font-bold text-cyan-900">Produk</a>
        <a href="#" class="text-base/6 font-bold text-cyan-900">Kontak</a>
        <a href="#" class="text-base/6 font-bold text-cyan-900">Tentang</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-base/6 font-bold text-cyan-900 bg-white px-4 py-2 rounded-lg "> Daftar <span aria-hidden="true"></span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

<body class="font-poppins bg-[#c9daf8]">
  <div class="max-w-7xl mx-auto px-4 py-10 flex flex-col lg:flex-row items-center justify-between">
    
    <!-- Kiri: Logo dan Brand -->
    <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
      <div class="w-40 h-40 bg-blue-300 rounded-full flex items-center justify-center shadow-md mb-4">
        <span class="text-sm text-white">[Logo Gelas Air]</span>
      </div>
      <h1 class="text-4xl font-bold text-[#003366]">Drink <span class="bg-white text-[#003366] px-2 py-1 rounded">Hub</span></h1>
    </div>

    <!-- Kanan: Teks Deskripsi -->
    <div class="mt-6 lg:mt-0 lg:w-1/2 text-white">
      <h2 class="text-2xl lg:text-3xl font-semibold">THE PERFECT BLEND<br><span class="font-bold">FOR EVERY SIP</span></h2>
      <p class="mt-4 text-sm text-white/90">
        Purchase your favorite drink from your favorite places here, on our web. As smooth as in the app. Same fast delivery. Countless places to try.
      </p>
    </div>
  </div>

  <!-- Box Lokasi -->
  <div class="flex flex-col lg:flex-row items-center justify-center mt-4 gap-4 px-4">
    <div class="bg-[#0c2b4a] text-white px-6 py-4 rounded-2xl flex flex-col lg:flex-row items-center gap-4 shadow-lg">
      <div class="text-sm font-semibold">Your Location</div>
      <div class="flex items-center bg-white text-black px-4 py-2 rounded-full gap-2 w-full max-w-xs">
        <span class="text-lg">📍</span>
        <span class="truncate text-sm">Jl. Mayjen Sungkono No....</span>
        <svg class="w-4 h-4 text-gray-500 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
      <button class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-2 rounded-full font-semibold hover:opacity-90 transition">
        Explore
      </button>
    </div>

    <!-- Icon Cuaca -->
    <div class="bg-[#0c2b4a] w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg">
      <span class="text-white">[🌡️ Ikon Suhu]</span>
    </div>
  </div>

  <!-- Section Bawah -->
  <div class="mt-10 text-center">
    <h2 class="text-2xl font-bold text-[#001f3f]">Cuaca panas, enaknya minum apa?</h2>
    <p class="text-gray-800 mt-2">Temukan beragam minuman favorit, menu andalan lokal, dan penawaran eksklusif di dekatmu.</p>
    <div class="w-20 h-1 bg-blue-300 mx-auto mt-4 rounded-full"></div>
  </div>

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