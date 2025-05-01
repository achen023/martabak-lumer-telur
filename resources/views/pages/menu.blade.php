@extends('layout.layoutmenu')
@section('title', 'menu')

@section('content')

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
@endsection