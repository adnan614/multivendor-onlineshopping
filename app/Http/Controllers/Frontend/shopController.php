<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class shopController extends Controller
{
    public function viewShop()
    {
        $shopShow = Seller::all();
        return view('frontend.layouts.shop',compact('shopShow'));
    }

    public function shopWiseShow($user_id)
    {
        $productShow = Product::where('user_id',$user_id)->get();
        return view('frontend.layouts.shopWiseProductShow',compact('productShow'));
    }
}
