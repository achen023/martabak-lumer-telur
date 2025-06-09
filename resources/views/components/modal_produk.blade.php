<div id="tambahProdukModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Produk
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600" data-modal-hide="tambahProdukModal">
                    ✖
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5" required>
                    </div>

                    <div>
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5" required></textarea>
                    </div>

                    <div>
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5">
                            <option value="Martabak Manis">Martabak Manis</option>
                            <option value="Martabak Telor">Martabak Telor</option>
                            <!-- Tambah kategori lain sesuai kebutuhan -->
                        </select>
                    </div>

                    <div>
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Produk</label>
                        <input type="file" id="foto" name="foto" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Tambah
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
