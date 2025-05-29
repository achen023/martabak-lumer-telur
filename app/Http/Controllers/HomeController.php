<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;


class HomeController extends Controller
{
    function show() {

        return view('pages.home');
    }

    public function index()
    {
        return view('home'); // pastikan view ini ada
    }
}
