<div id="editProdukModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Produk</h3>
            <form id="formEditProduk" action="{{ route('produk.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-id">
                <div class="mb-4">
                    <label for="edit-nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" name="nama" id="edit-nama"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="edit-kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <input type="text" name="kategori" id="edit-kategori"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="edit-deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="edit-deskripsi"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="edit-foto" class="block text-sm font-medium text-gray-700">Foto Produk (opsional)</label>
                    <input type="file" name="foto" id="edit-foto"
                        class="mt-1 block w-full text-sm text-gray-500">
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Simpan</button>
            </form>
        </div>
    </div>
</div>
