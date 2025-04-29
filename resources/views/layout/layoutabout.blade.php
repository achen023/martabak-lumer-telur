<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="style/flowbite.min.css">
    <script src="style/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
<!-- Navbar -->
    @include('components.megamenu')

<!-- Main Content -->
    <main class="container mx-auto mt-6 px-4">
        <h2 class="mt-2 text-center text-xl font-semibold mb-4">@yield('page_title', 'Judul Halaman')</h2>
        <div class="bg-white shadow-md rounded-lg p-6 -ml-4">
        <img class="h-auto max-w-lg" src="image/martabak1.jpg" alt="image description">
            @yield('content')
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 -ml-4">
        <img class="h-auto max-w-lg" src="image/martabak1.jpg" alt="image description">
            @yield('content')
        </div>
    </main>

<!-- Footer -->
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Laravel App. All rights reserved.
    </footer>

</body>
</html>
