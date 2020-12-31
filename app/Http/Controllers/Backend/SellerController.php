<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  
    public function registerIndex()
    {
        return view('backend.layouts.sellerRegister');
    }


    public function register(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required | unique:users',
            'address'=>'required',
            'shop_name'=>'required|min:2',
            'shop_location'=>'required | min: 3',
            'image'=>'required',
            'city'=>'required | min:3',
            'country'=>'required | min:3',
            'phone_number'=>'required | min:11 | unique:users',
        ]);

       $user =  User::create([
             'name'=>$request->input('username'),
             'email'=>$request->input('email'),
             'password'=>bcrypt($request->input('password')),
             'address'=>$request->input('address'),
             'city'=>$request->input('city'),
             'country'=>$request->input('country'),
             'phone_number'=>$request->input('phone_number'),
             'role'=>'seller'
        ]);

           $sellerStore = new Seller();

           $sellerStore->user_id = $user->id;
           $sellerStore->shop_name = $request->input('shop_name');
           $sellerStore->shop_location = $request->input('shop_location');
           if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'.$extension;
            $file->move('upload/',$filename);
            $sellerStore->image = $filename;
       }
        $sellerStore->save();


        return redirect()->route('seller.login')->with('message','Registration Successfully Done!'); 

    }

    public function loginIndex()
    {
        return view('backend.layouts.Login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);
        
        $login = $request->only('email', 'password');
        
        if (Auth::attempt($login)) {

            if(auth()->user()->role === 'seller'){
                return redirect()->to('/seller')->with('message','Logged in Successfully!');
            }else{
                return redirect()->to('/seller/login/form')->with('message','You need an seller account!');

            } 
        }
        return redirect()->back()->withErrors('Invalid Credentials'); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('seller.login');
    }

    public function productActiveStatus($id)
    {
       $productStatus = Product::find($id);

       
       if($productStatus->status)
       {
          $productStatus->update([
               'status' => 0
           ]);
       }else{
          $productStatus->update([
               'status' => 1
           ]);
       }
       return redirect()->back()->with('message','Product Status Updated!');
    }
}
