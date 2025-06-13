<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $produks = \App\Models\Produk::all();
        return view('pages.dashboard', compact('produks'));
    }

}
