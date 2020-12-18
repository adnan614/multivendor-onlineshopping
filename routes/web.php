<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', 'Frontend\HomeController@home')->name('home');


Route::get('/seller','Backend\HomeController@index')->name('dashboard')->middleware('seller');
// seller logout
Route::get('/seller/logout','Backend\SellerController@logout')->name('logout')->middleware('seller');

// customer login & registration

Route::get('/customer/login','Frontend\CustomerLoginController@customerLogin')->name('customerLogin');

Route::post('/customer/signup','Frontend\CustomerLoginController@signup')->name('signup');
Route::post('/customer/login','Frontend\CustomerLoginController@Login')->name('Login');

// customer logout

Route::get('/customer/logout','Frontend\CustomerLoginController@logout')->name('customerLogout')->middleware('customer');

// seller account login & registration

Route::get('/sellerRegister','Backend\SellerController@registerIndex')->name('register');
Route::get('/seller/login/form','Backend\SellerController@loginIndex')->name('seller.login');

Route::post('/seller/insert/register','Backend\SellerController@register')->name('sellerRegister');
Route::post('/seller/login','Backend\SellerController@login')->name('login');


// admin login

Route::get('/admin/login/form','admin\adminController@showLogin')->name('show.login');
Route::post('/admin/login/','admin\adminController@login')->name('login');

//admin logout

Route::get('/admin/logout','admin\adminController@logout')->name('logout');


// products seller //

Route::group(['middleware'=>'seller'],function(){
    Route::get('/insertProduct','Backend\productController@insertProduct')->name('insertProduct');
    Route::get('/viewProduct','Backend\productController@viewProduct')->name('viewProduct');
    Route::get('delete.product{id}','Backend\productController@deleteProduct');
    Route::get('edit.product{id}','Backend\productController@editProduct');
    Route::post('/addProduct','Backend\productController@addProduct')->name('addProduct');
    Route::post('/update/product/{id}','Backend\productController@updateProduct')->name('update.product');
    
    // Category seller//
    Route::get('/insertCategory','Backend\CategoryController@insertCategory')->name('insertCategory');
    Route::post('/storeCategory','Backend\CategoryController@storeCategory')->name('storeCategory');
    Route::get('/viewCategory','Backend\CategoryController@viewCategory')->name('viewCategory');
    Route::get('edit.category{id}','Backend\CategoryController@editCategory');
    Route::get('delete.category{id}','Backend\CategoryController@deleteCategory');
    Route::post('update.category{id}','Backend\CategoryController@updateCategory');
});



// frontend products

Route::get('/products','Frontend\ProductController@products')->name('products');
Route::get('/categoryWiseShow/{id}','Frontend\HomeController@categoryWiseShow')->name('categoryWiseShow');

// frontend productsDetails

Route::get('/productDetails/{id}','Frontend\ProductDetailsController@productDetails')->name('productDetails');


//  checkout

Route::get('/checkout','Frontend\CheckoutController@checkout')->name('checkout.form')->middleware('customer');

Route::post('/add/shipping/details','Frontend\CheckoutController@addCheckout')->name('add.shipping');

// cart

Route::get('/cart','Frontend\CartController@cart')->name('cart');
Route::post('/cart/add/{id}','Frontend\CartController@addToCart')->name('cart.add');
Route::get('/cart/remove/{id}','Frontend\CartController@CartRemove')->name('cart.remove');
Route::put('/cart/update/{id}','Frontend\CartController@CartUpdate')->name('cart.update');

// admin 

Route::get('/admin','admin\adminController@adminShow')->name('admin.dashboard');
Route::get('/admin/view/customer','admin\customerController@viewCustomer')->name('view.customer');
Route::get('/admin/view/seller','admin\sellerController@viewSeller')->name('view.seller');
Route::get('/admin/view/customer/delete{id}','admin\customerController@CustomerDelete')->name('customer.delete');
Route::get('/admin/view/seller/delete{id}','admin\sellerController@sellerDelete')->name('seller.delete');

