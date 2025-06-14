<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>News</title>
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
  <h2 class="text-2xl font-bold text-center mb-8">NEWS</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    
    <!-- Berita Item -->
    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
    </div>

    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
    </div>

    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
    </div>

    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
    </div>

    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
    </div>

    <div class="text-center">
      <img src="https://via.placeholder.com/300x200" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">DIKABARKAN JAKARTA TERTIBAN METEOR</h3>
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
