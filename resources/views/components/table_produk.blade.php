<div class="relative overflow-x-auto">
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Home
        
        </caption>
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">NO</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Foto Produk</th>
                <th scope="col" class="px-6 py-3">Kategori</th>
                <th scope="col" class="px-6 py-3">Harga</th> <!-- Kolom harga baru -->
                <th scope="col" class="px-6 py-3">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $index => $produk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $index + 1 }}
                    </th>
                    <td class="px-6 py-4">{{ $produk->nama }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('uploads/' . $produk->foto) }}" alt="{{ $produk->nama }}"
                            class="w-24 h-24 object-cover rounded">
                    </td>
                    <td class="px-6 py-4">{{ $produk->kategori }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</td> <!-- Harga -->
                    <td class="px-6 py-4">{{ $produk->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
