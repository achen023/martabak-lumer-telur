<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin_login() {
        return view('auth.admin');
    }

    public function admin_proses(Request $request) {
        $request->validate ([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

       $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->with('failed', 'Username atau password salah.')->withInput();
    }

   public function admin_logout()
    {
        Auth::guard('admin')->logout(); // Logout dari guard admin
        return redirect()->route('admin'); // Arahkan ke halaman login admin
    }
}

