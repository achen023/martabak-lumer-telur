<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);

        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $filename,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
    }

    public function update(Request $request, Produk $produk)
    {
        // (sama seperti store, tambahkan validasi dan logika update)
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }
}