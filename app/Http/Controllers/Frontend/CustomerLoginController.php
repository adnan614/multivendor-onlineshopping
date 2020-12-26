<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\User as AppUser;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

class CustomerLoginController extends Controller
{
    public function customerLogin()
    {
        return view('frontend.layouts.customerLogin');
    }

    public function signup(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'password'=>'required | min:5',
            'city'=>'required | min:3',
            'country'=>'required | min:3',
            'phone_number'=>'required | min:11 | unique:users'
        ]);

        User::create([
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'address'=>$req->input('address'),
            'password'=>bcrypt($req->input('password')),
            'city'=>$req->input('city'),
            'country'=>$req->input('country'),
            'phone_number'=>$req->input('phone_number'),
            'role'=>'customer'
        ]);

        return redirect()->route('customerLogin')->with('message','Registration Successfully Done!');

    }

    public function Login(Request $request)
    {
        $request->validate([
           
            'email'=>'required',
             'password'=>'required'
           
        ]);

        $login = $request->only('email','password');
        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('home')->with('message','Logged in Successfully!');
        }
        return redirect()->back()->withErrors('Invalid Credentials');
    }

    public function logout()
    {
    
        Auth::logout();
        session()->forget('cart');
        return redirect()->route('customerLogin');
    }

}
