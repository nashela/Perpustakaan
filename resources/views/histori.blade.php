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
          <a href="/histori">Histori</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
      <input type="text" placeholder="Search" class="border rounded px-3 py-1 text-sm" />
      <button class="rounded-full border p-2"><a href="/login">👤</a></button>
    </div>
  </header>

  <div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center mb-10">HISTORY</h1>

    <!-- Card List -->
    <div class="space-y-6">

      <div class="bg-white border rounded-lg shadow p-4 flex gap-4">
        <div class="w-1/4 text-center">
        <img 
            src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1675406904i/96178812.jpg" 
            alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">

        </div>
        <div class="w-3/4">
          <h2 class="text-xl font-semibold">Tulus Untuk Orang Yang Salah</h2>
          <p class="text-sm text-gray-600 mb-2">Boy Candra</p>
          <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt fermentum eros,
            at convallis erat sollicitudin at. Vivamus mattis lorem et ligula facilisis, nec
            tristique risus tincidunt. Etiam dapibus sem vel erat posuere, at vehicula risus viverra.
          </p>
          <p class="mt-3 text-sm italic text-gray-500">Status Buku: <span class="font-semibold">Dikembalikan</span> (Selesai)</p>
        </div>
      </div>

        <div class="bg-white border rounded-lg shadow p-4 flex gap-4">
        <div class="w-1/4 text-center">
            <img 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKGZdWun3X0ikBpjhOTuQhKTraNrSlk_22VQ&s" 
            alt="Buku" class="w-[150px] h-auto mx-auto mb-2 border rounded shadow-sm">
        </div>
        <div class="w-3/4">
            <h2 class="text-xl font-semibold">Laut Bercerita</h2>
            <p class="text-sm text-gray-600 mb-2">Leila S. Chudori</p>
            <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt fermentum eros,
            at convallis erat sollicitudin at. Vivamus mattis lorem et ligula facilisis, nec
            tristique risus tincidunt. Etiam dapibus sem vel erat posuere, at vehicula risus viverra.
            <p class="mt-3 text-sm italic" style="color: red;">
            Status Buku: <span class="font-bold">Dipinjam</span>
            </p>
        </div>
        </div>


    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center items-center gap-2">
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-200">1</button>
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-200">2</button>
      <span class="px-3 py-1 text-gray-500">next →</span>
    </div>
  </div>

</body>
</html>
