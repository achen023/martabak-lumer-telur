@extends('layout.layoutlanding')
@section('title', 'menu')

@section('content2')
<h1 class="text-4xl text-center mr-4 font-bold mb-8">Menu Kami</h1>

<div class="container mx-auto px-8 py-2">
    <!-- Tombol untuk membuka dropdown -->
    <button id="dropdownSmallButton"
        data-dropdown-toggle="dropdownSmall"
        class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
        type="button">
        KATEGORI
        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownSmall"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSmallButton">
            <li>
                <a href="{{ route('menu.kategori', ['kategori' => 'Martabak Manis']) }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    MARTABAK MANIS
                </a>
            </li>
            <li>
                <a href="{{ route('menu.kategori', ['kategori' => 'Martabak Telor']) }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    MARTABAK TELUR
                </a>
            </li>
        </ul>
    </div>

    {{-- Menampilkan produk --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @forelse ($produks as $item)
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('uploads/' . $item->foto) }}" alt="{{ $item->nama }}" class="w-full h-48 object-cover rounded">
                <h2 class="text-xl font-bold mt-2">{{ $item->nama }}</h2>
                <p class="text-gray-600">{{ $item->deskripsi }}</p>
                <p class="text-blue-600 font-semibold mt-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
            </div>
        @empty
            <p class="text-gray-600">Tidak ada produk dalam kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
