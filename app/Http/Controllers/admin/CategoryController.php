<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function insertCategory()
    {
  
        return view('admin.insertCategory');
    }

    public function storeCategory(Request $request)

    {
        $request->validate([
            'name'=>'required | min:3',

        ]);
        $categoryStore = Category::create([
            'name' =>  $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->back()->with('message','Category Inserted Successfully!');

    }

    public function viewCategory()
    {
        $categoryShow = Category::all();
        return view('admin.viewCategory',compact('categoryShow'));

    }
   
    public function editCategory($id)
    {
      $categoryEdit = Category::find($id);
      return view('admin.editCategory',compact('categoryEdit'));
    }

    public function updateCategory(Request $request,$id)
    {
        $request->validate([
            'name'=>'required | min:3',

        ]);

          $categoryUpdate = Category::find($id);

          $categoryUpdate->name = $request->input('category_name');
          $categoryUpdate->description = $request->input('category_description');
          

          $categoryUpdate->save();
          return redirect()->route('viewCategory')->with('message','Category updated Successfully!'); 
    }
    public function deleteCategory($id)
    {
        $categoryDelete = Category::find($id);
          $categoryDelete->delete();

          return redirect()->back()->with('message','Category Deleted Successfully!');
    }

    public function categoryActiveStatus($id)
    {
        $categoryStatus = Category::find($id);

       
        if($categoryStatus->status)
        {
            $categoryStatus->update([
                'status' => 0
            ]);
        }else{
            $categoryStatus->update([
                'status' => 1
            ]);
        }
        return redirect()->back()->with('message','category Status Updated!'); 
    }


}
