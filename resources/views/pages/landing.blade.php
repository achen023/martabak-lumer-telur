@extends('layout.layoutlanding')

@section('title', 'landing page')
@section('page_title', 'Selamat datang di website kami')

@section('content')

            @include('components.carousel', [
                'imgsrc1' => 'image/martabak1.jpg',
                'imgsrc2' => 'image/martabak_coklatkeju.jpg',
                'imgsrc3' => 'image/martabaktelur (2).jpg',
                'imgsrc4' => 'image/martabak mage.jpg',
                'imgsrc5' => 'image/martabak7.jpg',
                'title' => 'Gonggong goreng Tepung mak Limah',
                
            ])
           
              <main class="container mx-auto mt-10 px-4">
        <div class="text-center py-10">
            <h1 class="text-2xl font-bold mb-6">@yield('page_title', 'Menu kami')</h1>
        </div>
        @yield('content')
    </main>
            @include('components.card', [
        'imgsrc1' => 'image/martabak3.jpg',
        'imgsrc2' => 'image/martabakmanis.jpg',
        'imgsrc3' => 'image/pandankeju.jpg',
        'imgsrc4' => 'image/martabak2.jpg',
        'imgsrc5' => 'image/Telurspesial (3).jpg',
        'imgsrc6' => 'image/telursosis.jpg',
        'title1' => 'Martabak coklat keju',
        'title2' => 'Martabak coklat',
        'title3' => 'Martabak pandan coklat keju',
        'title4' => 'Martabak telur jumbo',
        'title5' => 'Martabak telur puyuh',
        'title6' => 'Martabak telur sosis',
        'desc1' => 'Martabak manis',
        'desc2' => 'Martabak manis',
        'desc3' => 'Martabak manis',
        'desc4' => 'Martabak telur',
        'desc5' => 'Martabak telur',
        'desc6' => 'Martabak telur',
    ])
          

@section('page', 'Selamat Datang di martabak lumer telur – Surga Martabak Terlezat!')
@section('page_comand', 'Kami dengan senang hati menyambut Anda di tempat di mana cita rasa martabak terbaik bertemu dengan pelayanan hangat dan ramah. Dari martabak manis yang legit dengan topping melimpah, hingga martabak telur gurih yang kaya rempah – kami hadir untuk memanjakan lidah Anda.
Nikmati pengalaman kuliner tak terlupakan, dibuat dari bahan-bahan berkualitas dan resep turun-temurun. Terima kasih telah berkunjung, dan selamat menikmati kelezatan martabak khas kami!')  
@endsection
