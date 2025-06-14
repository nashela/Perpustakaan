<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book</title>
      @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <header class="flex justify-between items-center px-6 py-4 border-b">
    <div class="flex items-center gap-4">
      <p class="p-2 font-bold">Perpustakaan Luffy</p>
        <nav class="flex gap-6 font-semibold text-sm">
          <a href="/">Beranda</a>
          <a href="/news">News</a>
          <a href="/book">Book</a>
          <a href="/about">About Us</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
      <input type="text" placeholder="Search" class="border rounded px-3 py-1 text-sm" />
      <button class="rounded-full border p-2">👤</button>
    </div>
  </header>

<section class="max-w-7xl mx-auto py-12 px-4">
  <!-- Bagian atas: gambar dan detail buku -->
  <div class="flex flex-col md:flex-row gap-8 mb-12">
    
    <!-- Gambar Buku -->
    <div class="w-full md:w-1/3">
      <img src="https://via.placeholder.com/300x450" alt="Sampul Buku" class="w-full rounded border" />
    </div>
    
    <!-- Detail Buku -->
    <div class="w-full md:w-2/3">
      <h1 class="text-2xl font-bold mb-2">Judul Buku</h1>
      <p class="text-sm text-gray-700 mb-1">Penulis: <span class="font-medium">Nama Penulis</span></p>
      <p class="text-sm text-gray-700 mb-4">Genre: <span class="font-medium">Genre Buku</span></p>
      <h2 class="font-semibold text-lg mb-2">Deskripsi</h2>
      <p class="text-sm text-gray-600 leading-relaxed mb-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet nisl id dolor iaculis suscipit. Nullam vel elit ut velit sollicitudin vehicula. Integer laoreet, nisi at feugiat lacinia, nisi turpis porttitor ligula, ut laoreet risus velit nec orci. Mauris nec felis nec magna iaculis vulputate. Sed a lorem vel justo viverra dignissim.
      </p>
      <div class="flex items-center gap-4">
        <span class="text-sm">Status: <span class="font-medium">Tersedia</span></span>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 text-sm rounded">Pinjam</button>
      </div>
    </div>
  </div>

  <!-- Rekomendasi Lainnya -->
  <div>
    <h3 class="text-lg font-semibold mb-4">Rekomendasi Lainnya</h3>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      
      <!-- Buku Rekomendasi -->
      <div class="text-center">
        <img src="https://via.placeholder.com/150x220" class="w-full mx-auto border rounded mb-2" alt="Rekomendasi 1">
        <h4 class="text-sm font-medium">Pungaba Suven Karando</h4>
        <p class="text-xs italic text-gray-600">Zieja Amear</p>
      </div>

      <div class="text-center">
        <img src="https://via.placeholder.com/150x220" class="w-full mx-auto border rounded mb-2" alt="Rekomendasi 2">
        <h4 class="text-sm font-medium">Pungaba Suven Karando</h4>
        <p class="text-xs italic text-gray-600">Zieja Amear</p>
      </div>

      <div class="text-center">
        <img src="https://via.placeholder.com/150x220" class="w-full mx-auto border rounded mb-2" alt="Rekomendasi 3">
        <h4 class="text-sm font-medium">Pungaba Suven Karando</h4>
        <p class="text-xs italic text-gray-600">Zieja Amear</p>
      </div>

      <div class="text-center">
        <img src="https://via.placeholder.com/150x220" class="w-full mx-auto border rounded mb-2" alt="Rekomendasi 4">
        <h4 class="text-sm font-medium">Pungaba Suven Karando</h4>
        <p class="text-xs italic text-gray-600">Zieja Amear</p>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="bg-gray-100 mt-10 px-6 py-10 text-sm text-gray-700">
  <div class="grid md:grid-cols-3 gap-6">
    
    <!-- Logo & Info -->
    <div class="flex flex-col items-center md:items-start text-center md:text-left">
      <div class="w-20 h-20 bg-gray-300 rounded-full mb-4 flex items-center justify-center">Logo</div>
      <p class="font-semibold">Perpustakaan Anime</p>
      <p class="mt-1">Jl. Komodo Raya No 1, Komodo Selatan,<br>Komodo, 12456</p>
      <p>Email: perpusanime@gmail.com</p>
      <p>Telp: 089765432102</p>
    </div>

    <!-- Maps -->
    <div class="text-center md:text-left">
      <p class="font-semibold mb-2">Maps</p>
      <div class="w-full aspect-video bg-gray-300 rounded"></div>
    </div>

<footer class="relative bg-gray-100 px-6 py-10">

  <div class="absolute bottom-4 right-6 flex flex-col items-end gap-y-2">
    <div class="flex gap-4 text-xl">
      <a href="#"><i class="fas fa-map-marker-alt"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-x-twitter"></i></a>
    </div>
    <p class="text-right text-sm">
      Copyright © 2025 Kel 4 Allright Reserved
    </p>

  </div>
</footer>


</body>
</html>
