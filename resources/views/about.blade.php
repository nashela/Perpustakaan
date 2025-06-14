<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
      @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white text-gray-800">
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

  <!-- About Us Section -->
  <section class="text-center py-12 px-4">
    <h1 class="text-3xl font-bold mb-8">ABOUT US</h1>
    <div class="w-full max-w-4xl mx-auto h-64 bg-gray-300 mb-10"></div>
    <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 justify-center">
      <div class="w-full md:w-1/2 bg-gray-100 p-4 text-left text-sm leading-relaxed">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies dolor. Proin
          volutpat blandit sapien, at volutpat orci suscipit vel...
        </p>
      </div>
      <div class="w-full md:w-1/2 bg-gray-100 p-4 text-left text-sm leading-relaxed">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies dolor. Proin
          volutpat blandit sapien, at volutpat orci suscipit vel...
        </p>
      </div>
    </div>
  </section>

  <!-- Ruang Perpustakaan -->
    <section class="py-12 px-4 max-w-7xl mx-auto">
    <h2 class="text-2xl font-semibold mb-8 text-center uppercase tracking-wide">
        Ruang Perpustakaan yang Nyaman
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Kartu 1 -->
        <div class="bg-white border rounded-lg shadow p-4">
        <img src="https://via.placeholder.com/300x200" alt="Ruang 1" class="w-full h-48 object-cover rounded mb-4">
        <h3 class="font-semibold text-sm mb-2">Ruang 1</h3>
        <p class="text-sm text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proses interaksi di ruang ini berjalan nyaman karena suasana yang tenang dan pencahayaan alami yang cukup. Sangat cocok untuk membaca dan belajar mandiri.
        </p>
        </div>

        <!-- Kartu 2 -->
        <div class="bg-white border rounded-lg shadow p-4">
        <img src="https://via.placeholder.com/300x200" alt="Ruang 2" class="w-full h-48 object-cover rounded mb-4">
        <h3 class="font-semibold text-sm mb-2">Ruang 2</h3>
        <p class="text-sm text-gray-700">
            Dilengkapi dengan fasilitas komputer dan akses internet, ruang ini cocok untuk penelitian atau aktivitas digital. Tata ruang ergonomis memberi kenyamanan lebih dalam beraktivitas.
        </p>
        </div>

        <!-- Kartu 3 -->
        <div class="bg-white border rounded-lg shadow p-4">
        <img src="https://via.placeholder.com/300x200" alt="Ruang 3" class="w-full h-48 object-cover rounded mb-4">
        <h3 class="font-semibold text-sm mb-2">Ruang 3</h3>
        <p class="text-sm text-gray-700">
            Ruang diskusi kelompok ini dirancang untuk kolaborasi antar pengguna. Dilengkapi papan tulis dan meja bundar, cocok untuk kerja tim dan diskusi akademik maupun non-akademik.
        </p>
        </div>

    </div>
    </section>


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
