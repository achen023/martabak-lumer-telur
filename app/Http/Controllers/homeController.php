<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class homeController extends Controller
{
    function show() {

        return view('pages.home');
    }
}
