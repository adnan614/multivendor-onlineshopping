<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function viewCustomer()
    {
        $date = \Carbon\Carbon::today()->subDays(30);
        $users = User::where('created_at', '>=', $date)->get();
       
        $customerShow = User::where('role', 'customer')->paginate(5);
        return view('admin.viewCustomer', compact('customerShow'));
    }

    public function CustomerDelete($id)
    {
        $customerDelete = User::find($id);

        $customerDelete->delete();

        return redirect()->back()->with('message', 'Data Deleted successfully!');
    }
}
