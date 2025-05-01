<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    function show() {

        return view('pages.product');
    }
}
