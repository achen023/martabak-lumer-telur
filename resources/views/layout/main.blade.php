<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Martabak MTC - @yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="flex min-h-screen bg-gray-100">

  <!-- Sidebar -->
  <aside class="w-64 bg-white text-black flex flex-col justify-between p-4">
    <div>
      <h1 class="text-2xl font-bold mb-10">
        <span class="text-black">Martabak</span> <span class="text-black-700">MTC</span>
      </h1>
      <nav class="flex flex-col space-y-4">
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-red-400 font-semibold' : 'hover:text-gray-300' }}">Home</a>
        <a href="{{ route('product.index') }}" class="hover:text-gray-300">Product</a>
        <a href="{{ route('user.index') }}" class="hover:text-gray-300">User Account</a>
      </nav>
    </div>
    <div>
      <a href="#" class="hover:text-gray-300">Logout</a>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 pt-0 pl-0 pr-0">
    <!-- Header -->
    <header class="bg-yellow-500 p-8 mb-8 ">
      <h2 class="text-xl font-semibold">Welcome Admin</h2>
    </header>

    @yield('content')

  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>

