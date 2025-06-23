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
          <a href="/histori">Histori</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
      <input type="text" placeholder="Search" class="border rounded px-3 py-1 text-sm" />
      <button class="rounded-full border p-2"><a href="/login">👤</a></button>
    </div>
  </header>

<section class="max-w-7xl mx-auto py-12 px-4">
  <h2 class="text-2xl font-bold text-center mb-8">NEWS</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    
    <!-- Berita Item -->
    <div class="text-center">
      <a href="/news_detail">
      <img src="https://siapjak.jakarta.go.id/storage/program/brosur/9f32fc00-b483-405a-9af2-f57112c90d8e.png" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">Light Up With Duta Bach "Melek Digital Biar Gak Ketipu"</h3>
      </a>
    </div>

    <div class="text-center">
      <a href="/news_detail">
      <img src="https://siapjak.jakarta.go.id/storage/program/brosur/9f32fc00-b483-405a-9af2-f57112c90d8e.png" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">Light Up With Duta Bach "Pemanfaatan Dan Dampak AI"</h3></a>
    </div>

    <div class="text-center">
      <a href="/news_detail">
      <img src="https://siapjak.jakarta.go.id/storage/program/brosur/9f32fc00-b483-405a-9af2-f57112c90d8e.png" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">Light Up With Duta Bach "Ekspresikan Pikiranmu Lewat Essai"</h3></a>
    </div>

    <div class="text-center">
      <a href="/news_detail">
      <img src="https://backend.perpusnas.go.id/uploads/berita/1738745003_3b12c622b90e1dfe1624.jpg" alt="Berita" class="w-full h-auto rounded border mb-2"/>
      <h3 class="text-sm font-medium">Menteri Dikdasmen: Peningkatan Budaya Baca dan Kecakapan Literasi untuk Membangun Peradaban Bangsa"</h3></a>
    </div>

    <div class="text-center">
      <a href="/news_detail">
      <img src="https://backend.perpusnas.go.id/uploads/berita/1750437178_4bafa5f3169f0ef84801.jpeg" alt="Berita" class="w-full h-auto rounded border mb-2" />
      <h3 class="text-sm font-medium">Perpustakaan Luffy dan NLB Singapura Teken Nota Kesepahaman, Perluas Kolaborasi Literasi Antarbangsa"</h3></a>
    </div>

    <div class="text-center">
      <a href="/news_detail">
      <img src="https://backend.perpusnas.go.id/uploads/berita/1750169050_3b670f2593f4f68fcbfe.jpeg" alt="Berita" class="w-full h-64 rounded border mb-2" />
      <h3 class="text-sm font-medium">Perkuat Ekosistem Literasi yang Inklusif dan Berkelanjutan dalam Forum CONSAL 2025 di Malaysia"</h3></a>
    </div>

  </div>
</section>


<!-- Footer -->
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
