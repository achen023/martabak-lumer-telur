<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;
use App\Models\Produk;

class LandingController extends Controller
{
    public function landing()
    {
        $produks = Produk::all();
        return view('pages.landing', compact('produks'));
    }
}
