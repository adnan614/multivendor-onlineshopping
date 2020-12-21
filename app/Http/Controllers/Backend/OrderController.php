<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder()
    {

        $orders = Order_product::with('order')->where('seller_id',auth()->user()->id)->get();
        return view('backend.layouts.viewOrder',compact('orders'));
    }
}
