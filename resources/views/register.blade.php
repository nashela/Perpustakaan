<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center">

  <div class="w-full max-w-sm bg-blue-200 p-8 rounded-xl shadow-lg space-y-6 text-center">
    <h2 class="text-2xl font-bold text-gray-800">Register</h2>

    <form class="space-y-4 text-left">
      <!-- Username -->
      <div>
        <label class="block text-sm text-gray-700 mb-1">Username</label>
        <input type="text" name="username" placeholder="Type your username" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm" />
      </div>

    <div>
        <label class="block text-sm text-gray-700 mb-1">Email</label>
        <input type="text" name="username" placeholder="Type your username" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm" />
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm text-gray-700 mb-1">Password</label>
        <input type="password" name="password" placeholder="Type your password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm" />
      </div>

      <div>
        <label class="block text-sm text-gray-700 mb-1">Password Confirm</label>
        <input type="password" name="password" placeholder="Type your password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm" />
      </div>

      <!-- Login button as link -->
      <a href="/login" class="block text-center w-full py-2 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
        REGISTER
      </a>
    </form>

    <div class="text-sm text-gray-600 mt-2">Sudah punya akun?</div>
    <a href="/login" class="text-blue-600 text-sm font-medium hover:underline">Masuk</a>
  </div>

</body>
</html>
