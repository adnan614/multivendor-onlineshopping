<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $products = Product::all();
        return view('frontend.home',compact('categories','products','sliders'));

    }

    public function categoryWiseShow($id)
    {
        
        $categories = Category::all();
        $category_wise_products = Product::where('category_id',$id)->get();
       
        return view('frontend.layouts.categoryWiseProducts',compact('category_wise_products','categories'));

       
    }
   
}
