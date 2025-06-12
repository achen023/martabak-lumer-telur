<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Impor model Produk
use Illuminate\Http\Request;

class ProductController extends Controller
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

  public function update(Request $request, $id)
{
    $produk = Produk::findOrFail($id);

    $produk->nama = $request->nama;
    $produk->deskripsi = $request->deskripsi;
    $produk->kategori = $request->kategori;

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $produk->foto = $filename;
    }

    $produk->save();

    return redirect()->back()->with('success', 'Produk berhasil diperbarui.');
}


    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }
}