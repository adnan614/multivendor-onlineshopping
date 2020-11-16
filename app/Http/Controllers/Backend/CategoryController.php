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

    public function viewCategory()
    {
        $categoryShow = Category::all();
        return view('backend.layouts.viewCategory',compact('categoryShow'));

    }
   
    public function editCategory(Request $request,$id)
    {
       if($request->isMethod('post')){
           $data = $request->all();
           Category::where(['id'=>$id])->
           update(['name'=>$data['category_name'],
           'parent_id'=>$data['parent_id']]);
           return redirect()->route('viewCategory'); 
       }
       
       $levels = Category::where(['parent_id'=>0])->get();
       $categoryDetails = Category::where(['id'=>$id])->first();
        return view('backend.layouts.editCategory')->with(compact('levels','categoryDetails'));
    }

    public function deleteCategory($id)
    {
        Category::where(['id'=>$id])->delete();

          return redirect()->back();
    }

}
