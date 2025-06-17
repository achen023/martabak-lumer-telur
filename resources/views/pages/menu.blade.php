@extends('layout.layoutlanding')
@section('title', 'menu')

@section('content2')
<h1 class="text-4xl text-center mr-4 font-bold mb-8">Menu Kami</h1>

<div class="container mx-auto px-8 py-2">
    <!-- Tombol untuk membuka dropdown -->
    <button id="dropdownSmallButton"
        data-dropdown-toggle="dropdownSmall"
        class="text-white bg-yellow-600 hover:bg-yellow-700 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center ml-6"
        type="button">
        KATEGORI
        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownSmall"
        class="z-10 hidden bg-yellow-500 divide-y divide-yellow-600 rounded-lg shadow-sm w-44">
        <ul class="py-2 text-sm text-white" aria-labelledby="dropdownSmallButton">
            <li>
                <a href="{{ route('menu.kategori', ['kategori' => 'Martabak Manis']) }}"
                    class="block px-4 py-2 hover:bg-yellow-700 rounded-lg">
                    MARTABAK MANIS
                </a>
            </li>
            <li>
                <a href="{{ route('menu.kategori', ['kategori' => 'Martabak Telor']) }}"
                    class="block px-4 py-2 hover:bg-yellow-700 rounded-lg">
                    MARTABAK TELUR
                </a>
            </li>
        </ul>
    </div>

    {{-- Menampilkan produk --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6 ml-6">
        @forelse ($produks as $item)
            <a href="/detail/{{ $item->id }}" 
               class="block max-w-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 hover:shadow-xl bg-yellow-500 border border-gray-200 rounded-lg shadow-sm cursor-pointer dark:bg-yellow-600 dark:border-gray-70">
               
                <img src="{{ asset('uploads/' . $item->foto) }}" alt="{{ $item->nama }}"
                    class="w-full h-48 object-cover rounded-t-lg" />
                
                <div class="p-5">
                    <h2 class="text-2xl font-bold mb-1 text-gray-900 dark:text-black">{{ $item->nama }}</h2>

                    <!-- Ganti deskripsi dengan kategori -->
                    <p class="text-sm font-medium text-gray-800 dark:text-black mb-2 uppercase">{{ $item->kategori }}</p>

                    <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-yellow-700 rounded-lg">
                        Rp {{ number_format($item->harga, 0, ',', '.') }}
                    </span>
                </div>
            </a>
        @empty
            <p class="text-gray-600">Tidak ada produk dalam kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
