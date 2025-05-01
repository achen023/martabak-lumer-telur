<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    function show() {

        return view('pages.detail');
    }
}
