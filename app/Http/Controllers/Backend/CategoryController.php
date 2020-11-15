<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function insertCategory(){

        $parentCategory = Category::where(['parent_id'=>0])->get();
        return view('backend.layouts.insertCategory',compact('parentCategory'));
    }

    public function storeCategory(Request $request)

    {
        $categoryStore = Category::create([
            'name' =>  $request->input('name'),
            'parent_id' => $request->input('parent_id'),
            'description' => $request->input('description')
        ]);

    
        return redirect()->back();


    }
}
