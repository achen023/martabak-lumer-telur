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
<section class="py-8 px-4 bg-white text-center">
  <h1 class="mt-2 mb-6 text-2xl font-bold text-center">Hubungi atau kunjungi outlet kami</h1>

  <div class="w-full max-w-4xl mx-auto mb-8">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63312.39728658732!2d110.3893948!3d-7.801194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57964e63e325%3A0x8c5393b9a5390a8d!2sJava%20Java%20Borna!5e0!3m2!1sen!2sid!4v1656484482213!5m2!1sen!2sid"
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
      class="rounded-lg shadow-md">
    </iframe>
  </div>

  <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-6 rounded-lg mb-10">
   Hubungi kami
  </button>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left">
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2">📞</div>
      <p class="font-semibold">Phone:</p>
      <p class="text-gray-600">+62 812-XXXX-XXXX</p>
    </div>
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2">📍</div>
      <p class="font-semibold">Address:</p>
      <p class="text-gray-600 text-center">Jl. Contoh Alamat No.123, Kota, Indonesia</p>
    </div>
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2">✉️</div>
      <p class="font-semibold">Email:</p>
      <p class="text-gray-600">info@example.com</p>
    </div>
  </div>
</section>

@include('components.footer')

</body>
</html>
