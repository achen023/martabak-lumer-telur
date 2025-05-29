<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class AboutController extends Controller
{
    function show() {

        return view('pages.about');
    }
}
