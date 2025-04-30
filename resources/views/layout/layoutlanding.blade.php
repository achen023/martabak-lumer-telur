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
            <h2 class="text-4xl font-bold mb-6">@yield('page_title',)</h2>
            @yield('content')
            
            <h1 class="mt-8 mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-black">
            @yield('page')</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
            @yield('page_comand')</p>
        </div>
    </main>

<!-- Footer -->
    @include('components.footer')
</body>
</html>
