@extends('layout.layoutmenu')
@section('title', 'menu')

@section('content')

    @include('components.card', [
        'imgsrc' => 'image/martabak3.jpg',
        'title1' => 'Martabak coklat',
        'title2' => 'Martabak keju',
        'title3' => 'Martabak telur daging',
        'desc1' => 'Martabak manis',
        'desc2' => 'Martabak manis',
        'desc3' => 'Martabak telur',
    ])
@endsection