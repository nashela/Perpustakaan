<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Homepage</title>
      @vite('resources/css/app.css')
      @vite('resources/js/app.js')
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

<section class="relative w-full h-96 bg-gray-200 overflow-hidden">
  <div id="slider" class="flex transition-transform duration-700 ease-in-out h-full">
    <img src="{{ asset('img/foto_buku.jpg') }}" class="min-w-full h-full object-cover">
    <img src="{{ asset('img/rak_buku.jpg') }}" class="min-w-full h-full object-cover">
    <img src="{{ asset('img/ruang_membaca.jpg') }}" class="min-w-full h-full object-cover">
  </div>
</section>

  <!-- Best Book Section -->
<section class="px-6 py-10">
  <h2 class="text-xl font-bold mb-6">BEST BOOK</h2>
  <div class="relative overflow-hidden h-[320px] group" aria-label="Best book carousel, auto scrolling, pause on hover">
    <div class="flex gap-6 whitespace-nowrap animate-scroll-left group-hover:animation-play-state-paused">
      
      <!-- First copy of books grid -->
      <div class="flex gap-6 min-w-max">
        <!-- Book Item -->
        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1442310576i/22037542.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Dilan 1990</h3>
          <p class="text-sm">Pidi Baiq</p>
          <p class="text-xs text-gray-500">Novel</p>
          </a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://cdn.gramedia.com/uploads/items/9786239554569.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Tentang Kamu</h3>
          <p class="text-sm">Tere Liye</p>
          <p class="text-xs text-gray-500">Novel</p>
          </a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKGZdWun3X0ikBpjhOTuQhKTraNrSlk_22VQ&s" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Laut Bercerita</h3>
          <p class="text-sm">Leila S. Chudori</p>
          <p class="text-xs text-gray-500">Novel</p>
          </a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://cdn.gramedia.com/uploads/items/JACKET_COV-_UZUMAKI_INA.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Uzumaki</h3>
          <p class="text-sm">Ito Junji</p>
          <p class="text-xs text-gray-500">Komik</p>
          </a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://upload.wikimedia.org/wikipedia/id/d/d2/CiL_%28sampul%29.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Cantik Itu Luka</h3>
          <p class="text-sm">Eka Kurniawan</p>
          <p class="text-xs text-gray-500">Novel</p>
          </a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0 select-none" tabindex="0">
          <a href="/book_detail">
          <img src="https://m.media-amazon.com/images/I/61ZcCEpbrsL.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Quantum Computing</h3>
          <p class="text-sm">Noson & Mirco</p>
          <p class="text-xs text-gray-500">Ilmiah</p></a>
        </div>
      </div>

      <!-- Duplicate for seamless scroll -->
      <div aria-hidden="true" class="flex gap-6 min-w-max select-none pointer-events-none">
        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1442310576i/22037542.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Dilan 1990</h3>
          <p class="text-sm">Pidi Baiq</p>
          <p class="text-xs text-gray-500">Novel</p></a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://cdn.gramedia.com/uploads/items/9786239554569.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Tentang Kamu</h3>
          <p class="text-sm">Tere Liye</p>
          <p class="text-xs text-gray-500">Novel</p></a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKGZdWun3X0ikBpjhOTuQhKTraNrSlk_22VQ&s" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Laut Bercerita</h3>
          <p class="text-sm">Leila S. Chudori</p>
          <p class="text-xs text-gray-500">Novel</p></a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://cdn.gramedia.com/uploads/items/JACKET_COV-_UZUMAKI_INA.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Uzumaki</h3>
          <p class="text-sm">Ito Junji</p>
          <p class="text-xs text-gray-500">Komik</p></a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://upload.wikimedia.org/wikipedia/id/d/d2/CiL_%28sampul%29.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Cantik Itu Luka</h3>
          <p class="text-sm">Eka Kurniawan</p>
          <p class="text-xs text-gray-500">Novel</p></a>
        </div>

        <div class="text-center w-[150px] flex-shrink-0">
          <a href="/book_detail">
          <img src="https://m.media-amazon.com/images/I/61ZcCEpbrsL.jpg" class="w-full aspect-[3/4] rounded shadow-sm mx-auto">
          <h3 class="mt-2 font-medium text-sm">Quantum Computing</h3>
          <p class="text-sm">Noson & Mirco</p>
          <p class="text-xs text-gray-500">Ilmiah</p></a>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- News Section -->
<section class="max-w-3xl mx-auto">
  <h1 class="text-2xl font-bold mb-6 text-center">NEWS</h1>
    <!-- First row -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start md:items-center">
        <div class="flex justify-center md:justify-end">
          <img src="https://newsinfo.inquirer.net/files/2023/06/photo-from-Makati.jpeg"
              alt="News Image"
              class="w-full max-w-xs rounded shadow object-cover">
        </div>

        <div class="text-left">
          <h2 class="text-xl font-semibold">Jadwal Perpustakaan Keliling</h2>
          <p class="text-sm text-gray-600 mb-1">by Admin</p>
          <span class="text-xs font-semibold bg-gray-200 px-2 py-0.5 rounded">NEWS</span>
          <p class="mt-3 text-gray-700 text-sm">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et tincidunt dolor..."
          </p>
          <p class="mt-2 text-gray-700 text-sm">
            Placerat faucibus varius ut blandit pellentesque vitae elit. Elemen volutpat porta nibh...
          </p>
        </div>
      </div><br>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start md:items-center">
        <div class="flex justify-center md:justify-end">
            <img src="https://media.istockphoto.com/id/1194576684/id/foto/jam-buka-baru-pada-gelembung-ucapan-dengan-latar-belakang-kuning-cerah.jpg?s=612x612&w=0&k=20&c=vlXcA0DiAuBmqduOVgBkpiPnGMIwj13LPxA6-O2fWWE="
              alt="News Image"
              class="w-full max-w-xs rounded shadow object-cover">
        </div>

        <div class="text-left">
          <h2 class="text-xl font-semibold">Jadwal Perpustakaan Keliling</h2>
          <p class="text-sm text-gray-600 mb-1">by Admin</p>
          <span class="text-xs font-semibold bg-gray-200 px-2 py-0.5 rounded">NEWS</span>
          <p class="mt-3 text-gray-700 text-sm">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et tincidunt dolor..."
          </p>
          <p class="mt-2 text-gray-700 text-sm">
            Placerat faucibus varius ut blandit pellentesque vitae elit. Elemen volutpat porta nibh...
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- Footer -->
<footer class="bg-gray-100 mt-10 px-6 py-10 text-sm text-black">
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
