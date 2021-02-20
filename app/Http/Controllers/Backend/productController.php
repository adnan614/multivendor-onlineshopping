<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use Toastr;
use Throwable;

class productController extends Controller
{
    public function insertProduct()
    {
        $categories = Category::all();
        return view('backend.layouts.insertProduct', compact('categories'));
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required|min:3',
            'category_id' => 'required',
            'color' => 'required',
            'image' => 'required'
        ]);


        $productStore = new Product();

        $productStore->category_id = $request->input('category_id');
        $productStore->name = $request->input('name');
        $productStore->color = $request->input('color');
        $productStore->price = $request->input('price');
        $productStore->description = $request->input('description');
        $productStore->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
            $productStore->image = $filename;
        }
        $productStore->save();
        Toastr::success('product inserted successfully', 'Success', ["positionClass" => "toast-top-full-width"]);

        return redirect()->back();
    }

    public function viewProduct()
    {

        $productShow = Product::where('user_id', auth()->user()->id)->with('categoryRelation')->paginate(5);
        return view('backend.layouts.viewProduct', compact('productShow'));
    }


    public function deleteProduct($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();

        alert()->warning('Warning Message', 'Optional Title');
        return redirect()->back();
    }

    public function editProduct($id)
    {
        $productEdit = Product::find($id);
        $categories = Category::all();

        return view('backend.layouts.editProduct', compact('productEdit', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {

        $productUpdate = Product::find($id);
        $productUpdate->category_id = $request->input('category_id');
        $productUpdate->name = $request->input('name');
        $productUpdate->color = $request->input('color');
        $productUpdate->price = $request->input('price');
        $productUpdate->description = $request->input('description');
        $productUpdate->user_id = auth()->user()->id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
            $productUpdate->image = $filename;
        }
        $productUpdate->save();
        return redirect()->route('viewProduct')->with('message', 'Product Updated Successfully!');
    }
}
