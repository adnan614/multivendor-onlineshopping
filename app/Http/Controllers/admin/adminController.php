<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

            if(auth()->user()->role === 'admin'){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->to('/admin/login/form');

            }
            // Authentication passed.. 
        }
        return redirect()->back();  
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }

    public function adminShow()
    {

        $customerShow = User::where('role','customer')->count();
        $sellerShow = User::where('role','seller')->count();
        
        return view('admin.index',compact('customerShow','sellerShow'));
    }
}
