<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function insertCategory(){

        
        return view('backend.layouts.insertCategory');
    }

    public function storeCategory(Request $request)

    {
        $categoryStore = Category::create([
            'name' =>  $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->back();

    }

    public function viewCategory()
    {
        $categoryShow = Category::all();
        return view('backend.layouts.viewCategory',compact('categoryShow'));

    }
   
    public function editCategory($id)
    {
      $categoryEdit = Category::find($id);
      return view('backend.layouts.editCategory',compact('categoryEdit'));
    }

    public function updateCategory(Request $request,$id)
    {
          $categoryUpdate = Category::find($id);

          $categoryUpdate->name = $request->input('category_name');
          $categoryUpdate->description = $request->input('category_description');

          $categoryUpdate->save();
          return redirect()->route('viewCategory'); 
    }
    public function deleteCategory($id)
    {
        $categoryDelete = Category::find($id);
          $categoryDelete->delete();

          return redirect()->back();
    }


}
