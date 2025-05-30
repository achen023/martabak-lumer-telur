<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="style/flowbite.min.css">
    <link rel="icon" href="image/logo-web.png" type="image/x-icon">
    <script src="style/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
<!-- Navbar -->
    @include('components.megamenu')

<!-- Main Content -->
    <main class="container mx-auto mt-10 px-4">
        <div class="text-center py-10">
            <h1 class="text-2xl font-bold mb-6">@yield('page_title', 'Menu kami')</h1>
        </div>
        @yield('content')
    </main>

<!-- Footer -->
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Laravel App. All rights reserved.
    </footer>

</body>
</html>
