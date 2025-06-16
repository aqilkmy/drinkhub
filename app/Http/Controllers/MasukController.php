<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function masuk(){
        return view('masuk');
    }

        public function prosesLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/produk');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
