<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Impor model Produk
use Illuminate\Http\Request;

class productController extends Controller
{
    function show() {

        return view('pages.product');
    }
}
