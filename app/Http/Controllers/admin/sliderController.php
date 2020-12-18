<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function insertSliderForm()
    {
        return view('admin.insertSlider');
    }

    public function addSlider(Request $request)

    {
       $addSlider = new Slider();

       $addSlider->name = $request->input('name');

       if($request->hasFile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); //getting image extension
        $filename = time().'.'.$extension;
        $file->move('upload/',$filename);
        $addSlider->image = $filename;

       }

       $addSlider->save();

       return redirect()->back()->with('message','inserted slider Successfully!'); 
    
    }

    public function viewSlider()
    {
        $sliderShow = Slider::all();
        return view('admin.viewSlider',compact('sliderShow'));
    }

    public function sliderDelete($id)
    {
        $sliderDelete = Slider::find($id);

        $sliderDelete->delete();

        return redirect()->back()->with('message','Deleted slider Successfully!');

    }
}
