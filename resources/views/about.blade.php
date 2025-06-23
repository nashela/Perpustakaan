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
      <button class="rounded-full border p-2"><a href="/login">👤</a></button>
    </div>
  </header>

  <!-- About Us Section -->
<section class="text-center py-12 px-4">
  <h1 class="text-3xl font-bold mb-8">ABOUT US</h1>

  <img src="{{ asset('img/photo_aboutus.jpg') }}"
       class="w-full max-w-4xl mx-auto h-80 object-cover rounded-lg shadow-md mb-10">

  <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 justify-center">
    
    <!-- VISI -->
    <div class="w-full md:w-1/2 bg-gray-100 p-6 text-left rounded-lg shadow-sm">
      <h2 class="text-xl font-bold mb-2">VISI</h2>
      <p class="text-sm leading-relaxed">
        Menjadi pusat informasi dan pembelajaran yang unggul serta mudah diakses oleh seluruh lapisan masyarakat. Mendukung proses pendidikan dan penelitian dengan menyediakan sumber daya yang lengkap dan berkualitas. Perpustakaan luffy juga berperan aktif dalam mengembangkan budaya literasi dan pembelajaran.
      </p>
    </div>
    
    <!-- MISI -->
    <div class="w-full md:w-1/2 bg-gray-100 p-6 text-left rounded-lg shadow-sm">
      <h2 class="text-xl font-bold mb-2">MISI</h2>
      <ul class="list-decimal list-inside text-sm leading-relaxed space-y-1">
        <li>Menyediakan akses yang luas dan adil terhadap sumber informasi yang berkualitas.</li>
        <li>Menciptakan lingkungan belajar yang nyaman, inklusif, dan berbasis teknologi.</li>
        <li>Mendorong budaya literasi dan riset.</li>
        <li>Menjalin kerja sama dengan berbagai pihak dalam pengembangan koleksi dan layanan informasi.</li>
      </ul>
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
        <img src="{{ asset('img/ruang_membaca.jpg') }}" alt="Ruang 1" class="w-full h-48 object-cover rounded mb-4">
        <!-- <h3 class="font-semibold text-sm mb-2">Ruang 1</h3> -->
        <p class="text-sm text-gray-700">
        Perpustakaan ini dirancang dengan suasana yang nyaman dan tenang, ideal untuk belajar maupun membaca. Tersedia meja-meja panjang yang cocok untuk diskusi kelompok, dilengkapi kursi dan pencahayaan yang terang.</p>
        </div>

        <!-- Kartu 2 -->
        <div class="bg-white border rounded-lg shadow p-4">
        <img src="{{ asset('img/ruang_komputer.jpg') }}" alt="Ruang 2" class="w-full h-48 object-cover rounded mb-4">
        <!-- <h3 class="font-semibold text-sm mb-2">Ruang 2</h3> -->
        <p class="text-sm text-gray-700">
        Ruang komputer ini tersedia secara gratis untuk pengunjung yang ingin mengerjakan tugas atau melakukan pencarian informasi. Dilengkapi dengan meja, kursi kerja ergonomis, dan komputer yang tertata rapi, ruangan ini didesain untuk mendukung produktivitas dalam suasana yang tenang dan modern.        </p>
        </div>

        <!-- Kartu 3 -->
        <div class="bg-white border rounded-lg shadow p-4">
        <img src="{{ asset('img/rak_buku.jpg') }}" alt="Ruang 3" class="w-full h-48 object-cover rounded mb-4">
        <!-- <h3 class="font-semibold text-sm mb-2">Ruang 3</h3> -->
        <p class="text-sm text-gray-700">
        Tersedia berbagai koleksi buku yang tertata rapi di rak-rak perpustakaan, mulai dari literatur populer hingga referensi akademik. Pengunjung dapat dengan mudah menemukan bacaan yang sesuai dengan kebutuhan belajar maupun minat pribadi.        </p>
        </div>

    </div>
    </section>


<footer class="bg-gray-100 mt-10 px-6 py-10 text-sm text-gray-700">
  <div class="grid md:grid-cols-3 gap-6">
    
    <!-- Logo & Info -->
    <div class="flex flex-col items-center md:items-start text-center md:text-left">
      <img src="{{ asset('img/logo.jpg') }}" class="w-50 h-20 mb-4 flex items-center justify-center">
      <!-- <div class="w-20 h-20 bg-gray-300 rounded-full mb-4 flex items-center justify-center">Logo</div> -->
      <p class="font-semibold">Perpustakaan Luffy</p>
      <p class="mt-1">1 Chome-9-3 Sannomaru, Naka Ward<br>Nagoya, Aichi 460-0001, Japan</p>
      <p>Email: perpusluffy@gmail.com</p>
      <p>Telp: 089765432102</p>
    </div>

    <!-- Maps -->
    <div class="text-center md:text-left">
      <p class="font-semibold mb-2">Maps</p>
      <div class="w-[450px] h-[200px] rounded overflow-hidden">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.1236725603935!2d136.8952080011449!3d35.17847000146159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376cfce8c6da3%3A0x78a4b5566ce0eb0d!2sAichi%20Prefectural%20Library!5e0!3m2!1sen!2sid!4v1750660580222!5m2!1sen!2sid" 
          width="100%" 
          height="100%" 
          class="border-0" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
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
      Copyright © 2025 Shelah Allright Reserved
    </p>

  </div>
</footer>
</body>
</html>
