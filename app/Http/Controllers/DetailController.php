<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; 

class DetailController extends Controller
{
    public function show($id)
{
    $produk = Produk::findOrFail($id); // ambil produk berdasarkan ID
    return view('pages.detail', compact('produk'));
}

}
