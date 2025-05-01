<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Impor model Produk
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari database
        $produk = Produk::all();
        
        // Mengirim data produk ke view
        return view('pages.produk', compact('produk'));
    }
}
