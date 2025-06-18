<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class MasukController extends Controller
{
    // Halaman login & register
    public function masuk()
    {
        return view('masuk'); // pastikan masuk.blade.php ada di resources/views
    }

    // Proses login
    public function prosesLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            logger('Login berhasil untuk user: ' . Auth::user()->username);
            return redirect()->route('beranda')->with('success', 'Berhasil login');
        }

        return redirect()->route('masuk')->with('error', 'Username atau password salah');
    }

    // Proses daftar
    public function prosesDaftar(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Log::info('Membuat user baru', [
            'username' => $request->username
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('masuk')->with('success', 'Berhasil daftar, silakan login.');
    }


}
