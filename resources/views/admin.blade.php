<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Buku</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white p-6">
      <h2 class="text-xl font-bold mb-10">HI, ADMIN</h2>
      <nav class="space-y-4">
        <a href="#" class="block hover:text-yellow-400">EDIT BUKU</a>
        <a href="#" class="block hover:text-yellow-400">DAFTAR PEMINJAM</a>
        <a href="#" class="block hover:text-yellow-400">DAFTAR PENGUNJUNG</a>
        <a href="#" class="block hover:text-yellow-400 flex items-center gap-2 mt-10">
          LOGOUT <i class="fas fa-sign-out-alt"></i>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h1 class="text-2xl font-bold mb-6">EDIT BUKU</h1>

      <!-- Create Button -->
      <div class="mb-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
          + Create
        </button>
      </div>

      <!-- Table -->
      <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full text-sm border">
          <thead class="bg-gray-200 text-gray-700">
            <tr>
              <th class="px-4 py-2 text-left">Name</th>
              <th class="px-4 py-2 text-center">Age</th>
              <th class="px-4 py-2 text-center">Nickname</th>
              <th class="px-4 py-2 text-center">Employee</th>
              <th class="px-4 py-2 text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">Giovanni Ghiseppe</td>
              <td class="px-4 py-2 text-center">36</td>
              <td class="px-4 py-2 text-center">Puldi</td>
              <td class="px-4 py-2 text-center"><input type="checkbox" checked disabled></td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                <button class="text-red-500 hover:text-red-700">🗑️</button>
              </td>
            </tr>
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">Natsumi</td>
              <td class="px-4 py-2 text-center">34</td>
              <td class="px-4 py-2 text-center">Potato</td>
              <td class="px-4 py-2 text-center"><input type="checkbox" checked disabled></td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                <button class="text-red-500 hover:text-red-700">🗑️</button>
              </td>
            </tr>
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">Yamato Hoshizawa</td>
              <td class="px-4 py-2 text-center">29</td>
              <td class="px-4 py-2 text-center">Yui</td>
              <td class="px-4 py-2 text-center"><input type="checkbox" disabled></td>
              <td class="px-4 py-2 text-center space-x-2">
                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                <button class="text-red-500 hover:text-red-700">🗑️</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center mt-6 space-x-1 text-sm">
        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300"><</button>
        <button class="px-3 py-1 bg-gray-300 font-bold rounded">1</button>
        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">2</button>
        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">3</button>
        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">></button>
      </div>

      <!-- Footer -->
      <div class="mt-10 text-center text-sm text-gray-500">
        Perpustakaan Anime || Copyright © 2025 Shelzh All rights reserved
      </div>
    </main>
  </div>
</body>
</html>
