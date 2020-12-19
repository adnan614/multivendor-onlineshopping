<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  
    public function registerIndex()
    {
        return view('backend.layouts.sellerRegister');
    }


    public function register(Request $request)
    {
        // dd($request->all());

       $user =  User::create([
             'name'=>$request->input('username'),
             'email'=>$request->input('email'),
             'password'=>bcrypt($request->input('password')),
             'address'=>$request->input('address'),
             'city'=>$request->input('city'),
             'country'=>$request->input('country'),
             'phone_number'=>$request->input('phone_number'),
             'role'=>'seller'
        ]);

           Seller::create([
            'user_id'=>$user->id,
            'shop_name'=>$request->input('shop_name'),
            'shop_location'=>$request->input('shop_location')
        ]);
        

        return redirect()->route('seller.login');

    }

    public function loginIndex()
    {
        return view('backend.layouts.Login');
    }

    
    public function login(Request $request)
    {
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {

            if(auth()->user()->role ==='admin'){
                return redirect()->route('admin.dashboard'); 
            }
            return redirect()->route('dashboard');
        }

        return redirect()->back();  
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('seller.login');
    }
}
