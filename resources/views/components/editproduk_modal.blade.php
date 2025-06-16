<div id="editProdukModal"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Produk</h3>
            <form id="formEditProduk" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-id">

                <div class="mb-4">
                    <label for="edit-nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" name="nama" id="edit-nama"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                    <select id="edit-kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5">
                        <option value="Martabak Manis">Martabak Manis</option>
                        <option value="Martabak Telor">Martabak Telor</option>
                        <!-- Tambah kategori lain sesuai kebutuhan -->
                    </select>
                </div>

                <div class="mb-4">
                    <label for="edit-deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="edit-deskripsi"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                </div>
                <div class="mb-4">
    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
    <input type="number" name="harga" id="edit-harga" required
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-500 focus:ring-opacity-50">
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const nama = this.dataset.nama;
            const kategori = this.dataset.kategori;
            const deskripsi = this.dataset.deskripsi;

            document.getElementById('edit-id').value = id;
            document.getElementById('edit-nama').value = nama;
            document.getElementById('edit-kategori').value = kategori;
            document.getElementById('edit-deskripsi').value = deskripsi;

            // Set action form
            document.getElementById('formEditProduk').action = `/product/${id}`;
        });
    });
});
</script>

