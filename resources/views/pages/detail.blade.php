@extends('layout.layoutlanding')

@section('title', $produk->nama)

@section('content2')
<div class="container mx-auto px-8 py-4">
    <div class="flex flex-col md:flex-row items-start gap-8">
        <!-- Gambar di kiri -->
        <img src="{{ asset('uploads/' . $produk->foto) }}" alt="{{ $produk->nama }}" class="w-full md:w-1/2 max-w-md rounded-lg" />
        
        <!-- Tulisan di kanan -->
        <div class="flex flex-col justify-start md:w-1/2">
            <h1 class="text-4xl font-bold mb-2">{{ $produk->nama }}</h1>
            
            <!-- Kategori di bawah nama -->
            <p class="text-yellow-700 font-semibold mb-4 uppercase tracking-wide">{{ $produk->kategori }}</p>
            
            <p class="mb-4">{{ $produk->deskripsi }}</p>
            
            <p class="font-semibold text-yellow-700 text-xl mb-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>

            <!-- Button Pesan Sekarang -->
            <a href="https://wa.me/62895600550241?text={{ urlencode('Selamat malam, saya tertarik untuk membeli ' . $produk->nama) }}" 
            target="_blank" 
            class="inline-block px-6 py-3 bg-yellow-600 text-white font-semibold rounded hover:bg-yellow-700 transition duration-300 text-center flex items-center gap-2 w-fit">
                <!-- Ikon WhatsApp berwarna putih -->
                <svg class="w-5 h-5 fill-white" viewBox="0 0 32 32">
                    <path d="M19.11 17.93c-.3-.15-1.77-.87-2.05-.96-.27-.1-.47-.15-.66.15-.2.3-.76.96-.93 1.15-.17.2-.34.22-.64.07-.3-.15-1.25-.46-2.38-1.45-.88-.79-1.48-1.77-1.66-2.07-.17-.3-.02-.46.13-.6.13-.13.3-.34.45-.5.15-.17.2-.3.3-.5.1-.2.05-.38-.02-.53-.07-.15-.66-1.58-.91-2.16-.24-.58-.49-.5-.66-.5H8.2c-.17 0-.45.06-.68.3-.23.24-.9.88-.9 2.13 0 1.25.92 2.46 1.05 2.63.13.17 1.8 2.74 4.37 3.84.61.26 1.08.42 1.45.53.61.2 1.17.17 1.6.1.49-.07 1.53-.62 1.75-1.23.22-.61.22-1.13.15-1.23-.07-.1-.27-.17-.56-.3zM16 2.5C8.55 2.5 2.5 8.55 2.5 16c0 2.83.93 5.44 2.49 7.57L3 29l5.61-1.97c2.05 1.29 4.46 2.05 7.1 2.05 7.45 0 13.5-6.05 13.5-13.5S23.45 2.5 16 2.5zm0 24c-2.26 0-4.35-.7-6.08-1.89l-.44-.3-3.33 1.17 1.11-3.25-.29-.5A11.44 11.44 0 0 1 4.5 16c0-6.34 5.16-11.5 11.5-11.5S27.5 9.66 27.5 16 22.34 26.5 16 26.5z"/>
                </svg>
                Pesan Sekarang
            </a>


        </div>
    </div>

    <a href="{{ route('menu') }}" class="inline-block mt-6 px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
       Kembali ke Menu
    </a>
</div>
@endsection
