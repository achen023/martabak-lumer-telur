<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request) {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('product.index');
        }else{
            return redirect()->route('login')->with('failed', 'email atau password salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success','kamu berhasil logout');
    }

    public function register() {
        return view('auth.register');
    }

    public function register_proses(Request $request) { 
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email'  => $request->email,
            'password' => $request->password
        ];

         $login = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('landing');
        }else{
            return redirect()->route('login')->with('failed', 'email atau password salah');
        }
    }
}