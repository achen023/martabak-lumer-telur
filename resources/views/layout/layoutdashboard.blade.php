<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="style/flowbite.min.css">
    <link rel="icon" href="image/logo-web.png" type="image/x-icon">
    <script src="style/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
   @include('components.navadmin')
<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      @yield('content')
      <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
      </div>
      </div>
   </div>
</div>
</body>
