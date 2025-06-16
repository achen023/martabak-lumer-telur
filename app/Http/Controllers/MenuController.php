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
}