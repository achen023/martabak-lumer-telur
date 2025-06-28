@extends('layout.layoutlanding')
@section('title', 'contact')
@section('content')
<!-- Main Content -->
<section class="py-8 px-4 bg-white text-center">
  <h1 class="mt-2 mb-6 text-2xl font-bold text-center">Hubungi atau kunjungi outlet kami</h1>

  <div class="w-full max-w-4xl mx-auto mb-8">
    <iframe 
      src="https://www.google.com/maps?q=1.1375755745746552,104.11250718872274&z=17&output=embed" 
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
      class="rounded-lg shadow-md">
    </iframe>

  </div>

  <div class="flex justify-center my-10">
    <a href="https://wa.me/62895600550241" target="_blank" class="flex items-center gap-x-2 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md">
      <img src="/image/wa.png" alt="WhatsApp" class="w-8 h-8" />
      hubungi kami
    </a>
  </div>


  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left">
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2"><img src="/image/aod.png" alt=""></div>
      <p class="font-semibold">Phone:</p>
      <p class="text-gray-600">+62 895-6005-50241</p>
    </div>
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2"><img src="/image/location_on.png" alt=""></div>
      <p class="font-semibold">Address:</p>
      <p class="text-gray-600 text-center">Jl.Batu Besar MTC, Batam, Indonesia</p>
    </div>
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2"><img src="/image/mail.png" alt=""></div>
      <p class="font-semibold">Email:</p>
      <p class="text-gray-600">setyapramudiya18@gmail.com</p>
    </div>
  </div>
</section>


@endsection