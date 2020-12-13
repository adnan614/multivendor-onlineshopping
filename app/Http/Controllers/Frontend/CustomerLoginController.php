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

        return view('frontend.layouts.customerLogin');

    }

    public function Login(Request $request)
    {
        $login = $request->only('email','password');
        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('home');
        }
    }

    public function logout()
    {
    
        Auth::logout();
        session()->forget('cart');
        return redirect()->route('customerLogin');
    }

}
