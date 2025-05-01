@extends('layout.main')

@section('title', 'Home')

@section('content')

<div class="overflow-x-auto bg-white rounded-lg shadow-md p-6 pl-8">
<h1><u class="text-4xl font-extrabold mb-6 pb-10">Home</u></h1>
  <table class="w-full table-auto border-collapse border border-gray-300 pt-16 pb-0">
    <thead class="bg-gray-100">
      <tr>
        <th class="border border-gray-300 px-4 py-2">NO</th>
        <th class="border border-gray-300 px-4 py-2">nama</th>
        <th class="border border-gray-300 px-4 py-2">foto produk</th>
        <th class="border border-gray-300 px-4 py-2">KATEGORI</th>
        <th class="border border-gray-300 px-4 py-2">DESKRIPSI</th>
      </tr>
    </thead>
    <tbody>
      <!-- isi data produk -->
      <tr>
        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
        <td class="border border-gray-300 px-4 py-2">martabak telur spesial</td>
        <td class="border border-gray-300 px-4 py-2">
          <img src="https://source.unsplash.com/100x100/?food,martabak" class="w-24 h-24 object-cover mx-auto">
        </td>
        <td class="border border-gray-300 px-4 py-2">martabak telur</td>
        <td class="border border-gray-300 px-4 py-2">terbuat dari telur dan tepung kemudian dengan ukuran yang cukup besar dan renyah</td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
        <td class="border border-gray-300 px-4 py-2">martabak coklat manis</td>
        <td class="border border-gray-300 px-4 py-2">
          <img src="https://source.unsplash.com/100x100/?food,martabak" class="w-24 h-24 object-cover mx-auto">
        </td>
        <td class="border border-gray-300 px-4 py-2">martabak manis</td>
        <td class="border border-gray-300 px-4 py-2">terbuat dari adukan tepung dan telur kemudian dilumer dengan colkat lembut </td>
      </tr>
      <tr>
        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
        <td class="border border-gray-300 px-4 py-2">martabak keju kacang</td>
        <td class="border border-gray-300 px-4 py-2">
          <img src="https://source.unsplash.com/100x100/?food,martabak" class="w-24 h-24 object-cover mx-auto">
        </td>
        <td class="border border-gray-300 px-4 py-2">martabak manis</td>
        <td class="border border-gray-300 px-4 py-2">terbuat dari adonan tepung dan telur kemudian ditabur dengan kacang dan keju
        dan juga susu kental manis </td>
      </tr>
      <!-- dan seterusnya -->
    </tbody>
  </table>
</div>
@endsection

