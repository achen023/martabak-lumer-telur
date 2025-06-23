<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('pages.product', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric', // tambahkan validasi harga
            'foto' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

    $file = $request->file('foto');
    $filename = time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads'), $filename);

    Produk::create([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'kategori' => $request->kategori,
        'harga' => $request->harga, // simpan harga
        'foto' => $filename,
    ]);

    return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
}

 public function update(Request $request, $id)
{
    $produk = Produk::findOrFail($id);

    $produk->nama = $request->nama;
    $produk->deskripsi = $request->deskripsi;
    $produk->kategori = $request->kategori;
    $produk->harga = $request->harga; // update harga juga

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $produk->foto = $filename;
    }

    $produk->save();

    return redirect()->back()->with('success', 'Produk berhasil diperbarui.');
}

    public function destroy(Produk $product)
{
    // Hapus file foto jika ada
    if ($product->foto && file_exists(public_path('uploads/' . $product->foto))) {
        unlink(public_path('uploads/' . $product->foto));
    }

    $product->delete();

    return redirect()->back()->with('success', 'Produk berhasil dihapus.');
}

public function showByKategori($kategori)
{
    $produks = Produk::where('kategori', $kategori)->get();
    return view('pages.menu', compact('produks'));
}
public function menu(Request $request)
{
    $kategori = $request->kategori;

    if ($kategori) {
        $produks = Produk::where('kategori', $kategori)->get();
    } else {
        $produks = Produk::all();
    }

    return view('pages.menu', compact('produks'));
}
public function show($id)
{
    $produk = Produk::find($id);

    if (!$produk) {
        abort(404, 'Produk tidak ditemukan');
    }

    return view('pages.detail', compact('produk'));
}

}