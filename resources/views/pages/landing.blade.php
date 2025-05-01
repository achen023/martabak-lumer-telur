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
          

@section('page', 'Selamat Datang di martabak lumer telur – Surga Martabak Terlezat!')
@section('page_comand', 'Kami dengan senang hati menyambut Anda di tempat di mana cita rasa martabak terbaik bertemu dengan pelayanan hangat dan ramah. Dari martabak manis yang legit dengan topping melimpah, hingga martabak telur gurih yang kaya rempah – kami hadir untuk memanjakan lidah Anda.
Nikmati pengalaman kuliner tak terlupakan, dibuat dari bahan-bahan berkualitas dan resep turun-temurun. Terima kasih telah berkunjung, dan selamat menikmati kelezatan martabak khas kami!')  

@endsection
