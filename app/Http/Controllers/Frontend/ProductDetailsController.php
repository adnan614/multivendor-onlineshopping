<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productDetails($id)
    {
        $productShow = Product::with('seller')->find($id);
        $categoryShow = Category::all();
        // dd($productShow);
       return view('frontend.layouts.productDetails',compact('productShow','categoryShow'));
    }

   

}
