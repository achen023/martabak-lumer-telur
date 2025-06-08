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
    <main class="w-full mt-10 px-4">
        <div class="text-center py-10">
            <h2 class="text-4xl font-bold mb-6">@yield('page_title',)</h2>
            @yield('content')
        </div>
    <div class="bg-gray-50 py-8">
        <div class="container mx-auto px-4  rounded-lg">
            
            @yield('content2')
        </div>
    </div>
    </main>

<!-- Footer -->
    @include('components.footer')
</body>
</html>
