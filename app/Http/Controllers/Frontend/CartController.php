<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('frontend.layouts.cart');
    }

    public function addToCart($id)
    {
      
       $product = Product::find($id);
        
       if($product)
       {
        $cartData = session()->get('cart');
    
        // if cart is empty then this the first product
        if(!$cartData) {
          
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
    

            session()->put('cart', $cart); 
            return redirect()->back()->with('message', 'Product added to cart successfully!');


        }
      
             // if cart not empty then check if this product exist then increment quantity
        if(isset($cartData[$id])) {
            $cartData[$id]['quantity']++;
            session()->put('cart', $cartData);

            return redirect()->back()->with('message', 'Product Increment to cart successfully!');
        }
        
        // if item not exist in cart then add to cart with quantity = 1
        $cartData[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
           
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
            session()->put('cart', $cart);
            return redirect()->back()->with('message', 'Product Updated into cart successfully!');
        }
    }
}
