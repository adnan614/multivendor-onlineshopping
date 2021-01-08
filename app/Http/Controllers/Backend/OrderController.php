<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Payment;
use Illuminate\Http\Request;
use pdf;

class OrderController extends Controller
{
    public function viewOrder()
    {

        $orders = Order_product::with('order','payment')->where('seller_id',auth()->user()->id)->paginate(5);
        return view('backend.layouts.viewOrder',compact('orders'));
    }

    public function orderStatus(Request $request,$id)
    {
       
        $orderProducts = Order_product::find($id);
       $orderProducts->update([
           'order_status'=>$request->order_status,
       ]);
       return redirect()->back()->with('message','Order Status Updated');
    }

    public function generateInvoice($id)
    {
        $orderInvoice = Order_product::with('orderRelation')->find($id);
        $pdf = pdf::loadView('backend.layouts.invoice', compact('orderInvoice'));
    
        return $pdf->stream('invoice.pdf');
        return $pdf->download('invoice.pdf');
    }
}
