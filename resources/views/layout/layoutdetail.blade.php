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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>
<body class="bg-white-100 text-gray-800 font-sans">
<!-- Navbar -->
    @include('components.megamenu')

<!-- Main Content -->
<main class=" bg-white-300">
        <div class="max-w-5xl mx-auto p-4 pb-8 md:pb-12 grid grid-cols-1 md:grid-cols-2 gap-6 bg-white mb-4">
        <!-- Gambar Produk -->
        <img src="{{ asset('uploads/' . $produk->foto) }}" alt="{{ $produk->nama }}" class="w-full h-full object-cover rounded-lg mt-4">
        <!-- Detail Produk -->
            <div class="space-y-6 mt-6">
                <div >
                    <h2 class="text-4xl font-bold mb-6">@yield('name_produk')</h2>
                    <p><span class="font-semibold">Kategori:</span>@yield('kategori_produk')</p>
                </div>
                    <p class="text-2xl font-bold text-black">@yield('price')</p>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
                    <a href="https://wa.me/qr/QUDDZGB4FXTUN1">@yield('order')</a>
                </button>
                <!-- Section Deskripsi dan Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">@yield('Description')</h3>
                    <p class="text-sm text-gray-700">@yield('Description_info')</p>
                </div>
            </div>
        </div>
        @include('components.footer')
</main>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</html>