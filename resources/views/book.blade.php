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
      <button class="rounded-full border p-2"><a href="/login">👤</a></button>
    </div>
  </header>

  <section class="py-12 px-4 max-w-7xl mx-auto">
    <div class="relative mb-6">
      <h2 class="text-2xl font-bold text-center text-gray-800">Book Collection</h2>
      
      <div class="absolute right-0 top-1/2 -translate-y-1/2">
        <label for="genre" class="sr-only">Select Genre</label>
        <select id="genre" class="border border-gray-300 rounded-lg px-4 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option disabled selected>Pilih Genre</option>
          <option>Novel</option>
          <option>Komik</option>
          <option>Ilmiah</option>
          <option>Fiksi</option>
          <option>Non-Fiksi</option>
          <option>Sejarah</option>
        </select>
      </div>
    </div>


    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="text-center">
        <a href="/book_detail">
        <img 
          src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1675406904i/96178812.jpg" 
          alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Tulus Untuk Orang Yang Salah</h3>
        <p class="text-xs italic text-gray-600">Boy Candra</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/MAAF_TUHAN_AKU_HAMPIR_MENYERAH.jpg"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Maaf Tuhan, Aku Hampir Menyerah</h3>
        <p class="text-xs italic text-gray-600">Alfi Alghazi</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1736474633i/223441713.jpg"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Seporsi Mie Ayam</h3>
        <p class="text-xs italic text-gray-600">Brian Khrisna</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Anatomic Habbits</h3>
        <p class="text-xs italic text-gray-600">James Clear</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Sebuah-seni-untuk-bersikap-bodoh-amat.jpg"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Sebuah Seni Untuk Bersikap...</h3>
        <p class="text-xs italic text-gray-600">Mark Manson</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://cdn.gramedia.com/uploads/items/pengantar_jtsLmjm.jpg"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Anatomi dan Fisiologi Manusia</h3>
        <p class="text-xs italic text-gray-600">Ardian Nugraha</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo1R3BGAjiPA_dttmYKVLQ5V9bGOdZ9WLDMQ&s"
        alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">The Lean Startup</h3>
        <p class="text-xs italic text-gray-600">Eric Lies</p></a>
      </div>

      <div class="text-center">
        <a href="/book_detail">
        <img src="https://api.penerbitsalemba.com/book/books/02-0338/images/c4fa408a-02dd-4735-98d4-fe65087a29f6.jpg"
        alt="Buku" class="w-[165px] h-auto mx-auto mb-2 border rounded shadow-sm">
        <h3 class="text-sm font-semibold">Komunikasi Bisnis</h3>
        <p class="text-xs italic text-gray-600">Suwatno</p></a>
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
