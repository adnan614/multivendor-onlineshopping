<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\Controller;
use App\Models\Order_product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $show_product_quantity = Product::where('user_id',auth()->user()->id)->count();
        $order_quantity = Order_product::where('seller_id',auth()->user()->id)->count();
       
       
       return view('backend.index',compact('show_product_quantity','order_quantity'));
    }
}
