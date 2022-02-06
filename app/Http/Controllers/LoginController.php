<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->to('/barang');

        } else {
            return view('auth.login');
        }
        
    } 
    
    public function authenticate(Request $request)
    {
        Cookie::forget('XSRF-TOKEN');
        Cookie::forget('laravel_demo_session');

        $request->session()->flush();

        $check = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (User::where('email', $check['email'])->first()) {
            Auth::attempt($check);
            if (Auth::check()) {
                Auth::logoutOtherDevices($check['password']);
                return redirect()->to('/barang')->with('success', 'Anda berhasil Login.');
            }
            return redirect()->to('/login')->with('danger', 'Password yang anda masukkan salah.');
            
        }
        return redirect()->to('/login')->with('danger', 'Email tidak ditemukan.');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login')->with('success', 'Anda Berhasil Logout.');
    }
}
