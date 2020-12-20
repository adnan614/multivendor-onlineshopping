<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_product;

use App\Models\Payment;

class CheckoutController extends Controller
{
    public function checkout()
    {
 
        return view('frontend.layouts.checkout');
        
    }

    public function addCheckout(Request $request)
    {
       
       $cart = session('cart');
       $order =  Order::create([
            'user_id' => auth()->user()->id,
            'email'=>$request->input('email'),
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'city'=>$request->input('city'),
            'email'=>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
            'order_status'=>'pending',
            'grant_total'=>array_sum(array_column($cart,'sub_total'))
        ]);


        foreach ($cart as $item)
        {
            $order_products = Order_product::create([
             
                'order_id'=>$order->id,
                'seller_id'=>$item['seller_id'],
                'product_id'=>$item['id'],
                'product_price'=>$item['price']
            ]);
            
        }
      

         Payment::create([

            'order_id'=>$order->id,
            'amount'=>array_sum(array_column($cart,'sub_total')),
            'payment_method'=>$request->input('payment_method')
         ]);

        return redirect()->back();
    }
}
