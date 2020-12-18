<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function showLogin()
    {
        return view('admin.adminLogin');
    }

    public function login(Request $request)
    {
        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }

    public function adminShow()
    {
        return view('admin.index');
    }
}
