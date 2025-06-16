<div id="hapusProdukModal" tabindex="-1" aria-hidden="true"
    class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
    <div class="flex justify-center items-center w-full h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6 max-w-md w-full text-center">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Hapus Produk</h3>
            <p id="confirm-text" class="mb-4">
                Apakah kamu yakin ingin menghapus produk <strong id="confirm-nama">Martabak manis kacang</strong>?
            </p>
            <form id="formHapusProduk" action="" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="hapus-id">
                <div class="flex justify-center gap-2">
                    <button type="button"
                            id="cancelDelete" 
                            class="bg-gray-300 text-gray-800 py-2 px-4 rounded hover:bg-gray-400"
                            data-modal-toggle="hapusProdukModal">
                        Batal
                    </button>
                    <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">
                        Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const nama = this.dataset.nama;
        const form = document.getElementById('formHapusProduk');
        form.action = `/product/${id}`;
        document.getElementById('confirm-nama').innerText = nama;
        document.getElementById('hapusProdukModal').classList.remove('hidden');
    });
    document.getElementById('cancelDelete').addEventListener('click', function () {
    document.getElementById('hapusProdukModal').classList.add('hidden');
});
});

</script>