@extends('layout.layoutlanding')

@section('content')
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

  <div class="flex justify-center my-10">
    <button class="flex items-center gap-x-2 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md">
      <img src="/image/wa.png" alt="WhatsApp" class="w-8 h-8" />
       hubungi kami
    </button>
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
      <p class="text-gray-600 text-center">Jl. Contoh Batu Besar MTC, Batam, Indonesia</p>
    </div>
    <div class="flex flex-col items-center">
      <div class="text-3xl mb-2"><img src="/image/mail.png" alt=""></div>
      <p class="font-semibold">Email:</p>
      <p class="text-gray-600">setyapramudiya18@gmail.com</p>
    </div>
  </div>
</section>


@endsection