@extends('layout.main')

@section('title', 'Product')

@section('content')

<!-- Button tambah produk -->

<!-- Tabel Produk -->
<div class="overflow-x-auto bg-white rounded-lg shadow-md p-6 pl-8">
    <h1><u class="text-4xl font-extrabold mb-6 pl-10">Table Product</u></h1>
    <div class="mb-6 flex justify-end">
    <button data-modal-target="tambahProdukModal" data-modal-toggle="tambahProdukModal" class="block text-white bg-yellow-400 hover:bg-yellow-500 font-bold rounded-lg text-sm px-5 py-2.5 text-center" type="button">
    Tambah Produk
</button>
</div>
@include('components.modal_produk')

@include('components.editproduk_modal')
    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2">NO</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Foto Produk</th>
                <th class="border border-gray-300 px-4 py-2">Kategori</th>
                <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data produk pertama -->
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                <td class="border border-gray-300 px-4 py-2">martabak telur spesial</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <img src="https://source.unsplash.com/100x100/?martabak,telur" class="w-24 h-24 object-cover mx-auto">
                </td>
                <td class="border border-gray-300 px-4 py-2">Martabak Telur</td>
                <td class="border border-gray-300 px-4 py-2">terbuat dari telur dan tepung kemudian dengan ukuran yang cukup besar dan renyah</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <div class="flex flex-col space-y-2">
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                        <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</a>
                    </div>
                </td>
            </tr>

            <!-- Data produk kedua -->
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                <td class="border border-gray-300 px-4 py-2">martabak coklat manis</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <img src="{{ asset('images/martabakmanis.jpg') }}" class="w-24 h-24 object-cover mx-auto">
                    
                </td>
                <td class="border border-gray-300 px-4 py-2">Martabak Manis</td>
                <td class="border border-gray-300 px-4 py-2">terbuat dari adukan tepung dan telur kemudian dilumer dengan coklat lembut</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                <div class="flex flex-col space-y-2">
                    <!-- Tombol Edit -->
                    <a href="#" onclick="openModal('editProdukModal')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</a>
                </div>

                </td>
            </tr>

            <!-- Data produk ketiga -->
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                <td class="border border-gray-300 px-4 py-2">martabak keju kacang</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <img src="https://source.unsplash.com/100x100/?martabak,keju" class="w-24 h-24 object-cover mx-auto">
                </td>
                <td class="border border-gray-300 px-4 py-2">Martabak Manis</td>
                <td class="border border-gray-300 px-4 py-2">terbuat dari adonan tepung dan telur kemudian ditabur dengan kacang dan keju dan juga susu kental manis</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <div class="flex flex-col space-y-2">
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                        <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</a>
                    </div>
                </td>
            </tr>

            <script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.remove('hidden');
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.add('hidden');
    }
</script>
        </tbody>
    </table>
</div>
@endsection
