<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 ml-6 mt-8">
    @foreach ($produks as $index => $produk)
        <div data-aos="fade-up"
             data-aos-delay="{{ 100 * ($index + 1) }}"
             data-aos-duration="600">

            <a href="/detail/{{ $produk->id }}" 
               class="block max-w-sm transition-transform duration-300 ease-in-out 
                      hover:scale-105 hover:-translate-y-1 hover:shadow-xl 
                      bg-yellow-500 border border-gray-200 rounded-lg shadow-sm 
                      cursor-pointer dark:bg-yellow-600 dark:border-gray-700">

                <img src="{{ asset('uploads/' . $produk->foto) }}" 
                     alt="{{ $produk->nama }}"
                     class="w-full h-48 object-cover rounded-t-lg" />

                <div class="p-4">
                    <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                        {{ $produk->nama }}
                    </h5>

                    <p class="mb-1 text-sm font-medium text-gray-800 dark:text-black">
                        {{ $produk->kategori }}
                    </p>                

                    <span class="inline-flex items-center px-3 py-2 text-sm font-medium 
                                 text-white bg-yellow-700 rounded-lg">
                        Rp {{ number_format($produk->harga, 0, ',', '.') }}
                    </span>
                </div>
            </a>
        </div>
    @endforeach
</div>
