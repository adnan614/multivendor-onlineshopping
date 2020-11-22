<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productDetails()
    {
       return view('frontend.layouts.productDetails');
    }
}
