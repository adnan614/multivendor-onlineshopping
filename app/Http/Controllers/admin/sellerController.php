<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function viewSeller()
    {
        $sellerShow = User::where('role','seller')->get();
        return view('admin.viewSeller',compact('sellerShow'));
    }

    public function sellerDelete($id)
    {
        $sellerDelete = User::find($id);
        $sellerShopDelete = Seller::where('user_id',$id)->delete();
        
        $sellerDelete->delete();

        return redirect()->back()->with('message', 'Data Deleted successfully!');
        
    }
}
