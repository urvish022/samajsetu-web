<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }

        return view('auth.login');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false, 'message' => trans('auth.failed')]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
