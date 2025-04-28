@extends('layout.gas')

@section('title', 'landing page')
@section('page_title', 'Selamat datang di website kami')

@section('content')

            @include('components.carousel', [
                'imgsrc' => 'image/martabak1.jpg',
                'title' => 'Gonggong goreng Tepung mak Limah',
                
            ])
          

@section('page', 'Mengapa martabak lumer telur?')
@section('page_comand', 'Karena martabak lumer telur adalah brand martabak usaha lokal  premium yang menawarkan pilihan rasa dan varian menarik, ada banyak toping yang wajib kamu coba')  

@endsection
