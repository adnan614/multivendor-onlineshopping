<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session('cart') ?? [];
        

        $total = array_sum(array_column($cart,'sub_total'));
 
        return view('frontend.layouts.checkout',compact('total'));
        
    }

    public function addCheckout(Request $request)
    {
        dd(session()->get('cart'));
        Order::create([
            'user_id' => auth()->user()->id,
            'email'=>$request->input('email'),
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),
            'email'=>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
            'order_status'=>'pending',
            'payment_method'=>'handCash',
            'grant_total'=>session()->get('price')
        ]);

        return redirect()->back();
    }
}
