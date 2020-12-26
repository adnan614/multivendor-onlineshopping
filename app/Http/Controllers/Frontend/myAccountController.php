<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class myAccountController extends Controller
{
    public function myAccount()
    {
       
        return view('frontend.layouts.myAccount');
    }

    public function editMyAccount()
    {
        return view('frontend.layouts.editMyAccount');
    }

    public function edit(Request $request)
    {

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->role  = 'customer';
        $user->password = auth()->user()->password;

        $user->save();

         return redirect()->back()->with('message','Profile Updated Successfully!');
    }
}
