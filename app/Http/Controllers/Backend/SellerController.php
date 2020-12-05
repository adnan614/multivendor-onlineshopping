<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  
    public function registerIndex()
    {
        return view('backend.layouts.sellerRegister');
    }


    public function register(Request $request)
    {

        User::create([
             'name'=>$request->input('username'),
             'email'=>$request->input('email'),
             'password'=>bcrypt($request->input('password')),
             'address'=>$request->input('address'),
             'city'=>$request->input('city'),
             'country'=>$request->input('country'),
             'phone_number'=>$request->input('phone_number'),
             'role'=>'seller'
        ]);

        return view('backend.layouts.sellerLogin');

    }

    public function loginIndex()
    {
        return view('backend.layouts.sellerLogin');
    }

    public function sellerRegister()
    {
        return view('backend.layouts.sellerRegister');
    }

    public function login(Request $request)
    {
        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
