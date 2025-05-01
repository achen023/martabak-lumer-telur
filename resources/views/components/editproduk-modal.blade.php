@foreach ($produk as $p)
<div id="editProdukModal-{{ $p->id }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Produk - {{ $p->nama }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600"
                    onclick="closeModal('editProdukModal-{{ $p->id }}')">
                    ✖
                </button>
            </div>

            <!-- Body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('produk.update', $p->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nama-{{ $p->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama-{{ $p->id }}" value="{{ $p->nama }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" required>
                    </div>

                    <div>
                        <label for="deskripsi-{{ $p->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi-{{ $p->id }}" rows="3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" required>{{ $p->deskripsi }}</textarea>
                    </div>

                    <div>
                        <label for="kategori-{{ $p->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select name="kategori" id="kategori-{{ $p->id }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5">
                            <option {{ $p->kategori === 'Martabak Manis' ? 'selected' : '' }} value="Martabak Manis">Martabak Manis</option>
                            <option {{ $p->kategori === 'Martabak Telor' ? 'selected' : '' }} value="Martabak Telor">Martabak Telor</option>
                        </select>
                    </div>

                    <div>
                        <label for="foto-{{ $p->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganti Foto (Opsional)</label>
                        <input type="file" name="foto" id="foto-{{ $p->id }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5">
                    </div>

                    <button type="submit" class="w-full text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
