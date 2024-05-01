<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function pageLogin()
    {
        $user = User::all();
        return view('authentication.login', compact('user'));
    }
    public function loginAction(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'superadmin') {
                return redirect('/');
            } else {
                return redirect('/');
            }
        } else {
            return 'user tidak ditemukan';
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
