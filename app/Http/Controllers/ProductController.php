<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Impor model Produk
use Illuminate\Http\Request;

class productController extends Controller
{
    function show() {

        return view('pages.product');
    }

    public function update(Request $request)
{
    $produk = Produk::find($request->id);
    $produk->nama = $request->nama;
    $produk->kategori = $request->kategori;
    $produk->deskripsi = $request->deskripsi;

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $namaFoto = time().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('image'), $namaFoto);
        $produk->foto = $namaFoto;
    }

    $produk->save();
    return redirect()->back()->with('success', 'Produk berhasil diupdate!');
}

public function destroy(Request $request)
{
    $produk = Produk::find($request->id);
    if ($produk) {
        // Hapus gambar jika ada
        if ($produk->foto) {
            unlink(public_path('image/' . $produk->foto));
        }
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
    return redirect()->back()->with('error', 'Produk tidak ditemukan!');
}


}
