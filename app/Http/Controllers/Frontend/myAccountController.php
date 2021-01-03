<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;

use App\Rules\oldPasswordRule;
use App\Http\Controllers\Controller;
use App\Models\Order_product;
use App\Models\Order;
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
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->role  = 'customer';

        $user->save();

         return redirect()->back()->with('message','Profile Updated Successfully!');
    }

    public function showOrder()
    {
         $id = auth()->user()->id;
        
          $orderT = Order::where('user_id',$id)->get();
          
        return view('frontend.layouts.myOrder',compact('orderT'));
          
    }

    public function changePassword()
    {
        return view('frontend.layouts.changepassword');
    }

    public function editPassword(Request $request)
    {
        
     
        $request->validate([
            'old_password'=>['required', new oldPasswordRule()],
            'password' => 'required|confirmed'
        ]);

        auth()->user()->update([
            
             'password'=>bcrypt($request->input('password')),
        
        ]);
   
        return redirect()->route('customerLogout')->with('message','password reset successfully!');

    }

    public function orderView($id)
    {
        $orderProducts = Order_product::where('order_id',$id)->get();
        dd($orderProducts);
        return view('frontend.layouts.orderProductsView');
    }
}
