<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Martabak Lumer Telur') }}</title>
    <link rel="stylesheet" href="style/flowbite.min.css">
    <link rel="icon" href="image/logo-web.png" type="image/x-icon">
    <script src="style/flowbite.min.js"></script>
</head>
<body class="bg-yellow-500 min-h-screen flex">
    
    <!-- Tombol kembali -->
    <a href="{{ url('/') }}" class="absolute top-4 left-4 px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition shadow">
        ⬅ Back
    </a>

    {{-- Side Branding --}}
    <div class="w-1/2 bg-yellow-500 flex flex-col items-center justify-center p-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-black">MARTABAK</h1>
        <h2 class="text-2xl font-semibold text-black mt-2">LUMER TELUR</h2>
        <p class="text-md text-black italic font-medium mt-8 max-w-sm">
            “Kami adalah kedai martabak lokal yang berdedikasi menyajikan martabak terbaik—manis legit, gurih renyah. 
            Mulai dari topping klasik hingga rasa kekinian, kami hadir untuk memanjakan lidah Anda.”
        </p>
    </div>

    {{-- Main Content --}}
    <div class="w-1/2 flex items-center justify-center h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
            @yield('content')
        </div>
    </div>

</body>
</html>
