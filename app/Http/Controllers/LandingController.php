<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class LandingController extends Controller
{
    function show() {

        return view('pages.landing');
    }
}
