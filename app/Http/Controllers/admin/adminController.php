<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);

        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {

            if(auth()->user()->role === 'admin'){
                return redirect()->route('admin.dashboard')->with('message','Logged in Successfully!');
            }else{
                return redirect()->to('/admin/login/form')->with('message','You need an admin account!');

            }
            
        }
        return redirect()->back()->withErrors('Invalid Credentials'); 
         
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }

    public function adminShow()
    {
        $categoryShow = Category::count();
        $customerShow = User::where('role','customer')->count();
        $sellerShow = User::where('role','seller')->count();
        
        return view('admin.index',compact('customerShow','sellerShow','categoryShow'));
    }
}
