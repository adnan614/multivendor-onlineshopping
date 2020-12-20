<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session('cart') ?? [];
        

        $total = array_sum(array_column($cart,'sub_total'));
 
        return view('frontend.layouts.cart',compact('total'));
    }

    public function addToCart(Request $request,$id)
    { 
       
       $product = Product::find($id);
       if($product)
       {
        $cartData = session()->get('cart');


    
        // if cart is empty then this the first product
        if(!$cartData) {
            $cart = [
                    $id => [
                        'id'=>$product->id,
                        'seller_id'=>$product->user_id,
                        'name' => $product->name,
                        'quantity' => $request->quantity,
                        'price' => $product->price,
                        'image' => $product->image,
                        'sub_total'=>$product->price * $request->quantity
                    ]
            ];

          

            session()->put('cart', $cart); 
            return redirect()->back()->with('message', 'Product added to cart successfully!');

        }
        if(isset($cartData[$id])) 
        {
       
        $cartData[$id]['quantity'] = $cartData[$id]['quantity'] + $request->quantity;
          $cartData[$id]['sub_total']= $cartData[$id]['quantity'] * $cartData[$id]['price'];
        
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product Increment to cart successfully!');
        }
        
        // if item not exist in cart then add to cart with quantity = 1
        $cartData[$id] = [
            "id"=>$product->id,
            'seller_id'=>$product->user_id,
            "name" => $product->name,
            "quantity" => $request->quantity,
            "price" => $product->price,
            "image" => $product->image,
            "sub_total"=>$product->price * $request->quantity
           
        ];

        session()->put('cart', $cartData);
        return redirect()->back()->with('message', 'Product added to cart successfully!');



       }else{
            return redirect()->back()->with('message','no product found');
       }

    }

    // cart remove

    public function CartRemove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('message', 'Product Deleted into cart successfully!');
        }
    }
    
    public function CartUpdate(Request $request)
    {
        
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
          
             $cart[$request->id]["quantity"] = $request->quantity;
        
             $cart[$request->id]['sub_total']= $cart[$request->id]['quantity'] * $cart[$request->id]['price'];
             session()->put('cart', $cart);
            return redirect()->back()->with('message', 'Product Updated into cart successfully!');
        }
    }
}
