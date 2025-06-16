<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class MenuController extends Controller
{
      public function show()
    {
        $produks = \App\Models\Produk::all();
        return view('pages.menu', compact('produks'));
    }
    public function filterByKategori($kategori)
    {
        $produks = \App\Models\Produk::where('kategori', $kategori)->get();
        return view('pages.menu', compact('produks'));
    }
}