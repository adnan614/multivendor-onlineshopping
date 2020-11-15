<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;

class productController extends Controller
{
    public function insertProduct(){
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat)
        {
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        return view('backend.layouts.insertProduct',compact('categories_dropdown'));
    }

    public function addProduct(Request $request){

        // dd($request->all());
         
       try{
        $productStore = new Product();

        $productStore->category_id = $request->input('category_id');
        $productStore->name = $request->input('name');
        $productStore->color = $request->input('color');
        $productStore->price = $request->input('price');
        $productStore->description = $request->input('description');

        if($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension(); //getting image extension
             $filename = time().'.'.$extension;
             $file->move('upload/',$filename);
             $productStore->image = $filename;
        }else{
             return $request;
             $productStore->image = '';
        }

        $productStore->save();
        return redirect()->back()->with('success','inserted Successfully!');

       }catch(Throwable $exception){
        return redirect()->back()->with('error','something went wrong!');  
       }
    }
    
    public function viewProduct()
    {

        $productShow = Product::all();
        return view('backend.layouts.viewProduct',compact('productShow'));
    }


    public function deleteProduct($id)
    {
          $productDelete = Product::find($id);
          $productDelete->delete();

          return redirect()->back();
    }

    public function editProduct($id)
    {
        $productEdit = Product::find($id);
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            if($cat->id==$productEdit->category_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
        }

        $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
        
        foreach($sub_categories as $sub_cat){
            if($sub_cat->id==$productEdit->category_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$sub_cat->id."'".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            
        }

        // $categories = Category::where(['parent_id'=>0])->get();
        // $categories_dropdown = "<option value='' selected disabled>Select</option>";
        // foreach($categories as $cat)
        // {
        //     $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
        //     $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
        //     foreach($sub_categories as $sub_cat){
        //         $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
        //     }
        // }
        return view('backend.layouts.editProduct')->with(compact('productEdit','categories_dropdown'));

        
    }

    public function updateProduct(Request $request,$id)
    {
        $productUpdate = Product::find($id);

        $productUpdate->category_id = $request->input('category_id');
        $productUpdate->name = $request->input('name');
        $productUpdate->color = $request->input('color');
        $productUpdate->price = $request->input('price');
        $productUpdate->description = $request->input('description');

        if($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension(); //getting image extension
             $filename = time().'.'.$extension;
             $file->move('upload/',$filename);
             $productUpdate->image = $filename;
        }else{
             return $request;
             $productUpdate->image = '';
        }

        $productUpdate->save();
        return redirect()->route('viewProduct');  
    }
}
