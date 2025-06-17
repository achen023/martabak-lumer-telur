<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Products
            <div class="mb-6 flex justify-end">
                <button data-modal-target="tambahProdukModal" data-modal-toggle="tambahProdukModal"
                    class="block text-white bg-yellow-400 hover:bg-yellow-500 font-bold rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer"
                    type="button">
                    Tambah Produk
                </button>
            </div>
            @include('components.modal_produk')
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">NO</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Foto Produk</th>
                <th scope="col" class="px-6 py-3">Kategori</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Deskripsi</th>
                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
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
                    <td class="px-6 py-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">{{ $produk->deskripsi }}</td>
                    <td class="px-6 py-4 text-right space-y-2">
                        <!-- Tombol Edit -->
                        <button type="button"
                            class="edit-btn text-white bg-yellow-400 hover:bg-yellow-500 font-semibold rounded-lg text-sm px-5 py-2.5 w-full cursor-pointer"
                            data-id="{{ $produk->id }}"
                            data-nama="{{ $produk->nama }}"
                            data-kategori="{{ $produk->kategori }}"
                            data-harga="{{ $produk->harga }}"
                            data-deskripsi="{{ $produk->deskripsi }}"
                            data-foto="{{ $produk->foto }}"
                            data-modal-target="editProdukModal"
                            data-modal-toggle="editProdukModal">
                            Edit
                        </button>
                        <!-- Tombol Hapus -->
                        <button type="button"
                            class="delete-btn text-white bg-red-500 hover:bg-red-600 font-semibold rounded-lg text-sm px-5 py-2.5 w-full cursor-pointer"
                            data-id="{{ $produk->id }}"
                            data-nama="{{ $produk->nama }}"
                            data-modal-target="hapusProdukModal"
                            data-modal-toggle="hapusProdukModal">
                            Hapus
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('components.editproduk_modal')
    @include('components.hapusproduk_modal')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('edit-id').value = this.dataset.id;
                document.getElementById('edit-nama').value = this.dataset.nama;
                document.getElementById('edit-kategori').value = this.dataset.kategori;
                document.getElementById('edit-deskripsi').value = this.dataset.deskripsi;
                document.getElementById('edit-harga').value = this.dataset.harga;
                document.getElementById('formEditProduk').action = `/product/${this.dataset.id}`;
            });
        });

        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const nama = this.dataset.nama;

                const form = document.getElementById('formHapusProduk');
                form.action = `/product/${id}`;
                document.getElementById('hapus-id').value = id;
                document.getElementById('confirm-nama').innerText = nama;
                document.getElementById('hapusProdukModal').classList.remove('hidden');
            });
        });

        const cancelButton = document.querySelector('[data-modal-toggle="hapusProdukModal"]');
        if (cancelButton) {
            cancelButton.addEventListener('click', function () {
                document.getElementById('hapusProdukModal').classList.add('hidden');
            });
        }
    });
</script>
