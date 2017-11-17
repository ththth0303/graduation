<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
             return redirect('/');
        }
        return view('auths.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::check()) {
            return redirect('/');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed...
            return redirect('/');
        } else {
            return redirect('login')->with('status', 'Tên tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
