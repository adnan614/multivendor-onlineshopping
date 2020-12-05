<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Frontend\HomeController@home')->name('home');


Route::get('/home','Backend\HomeController@index')->name('dashboard');

Route::get('/logout','Backend\SellerController@logout')->name('logout');

// seller account login & registration

Route::get('/sellerRegister','Backend\SellerController@registerIndex');
Route::get('/sellerLogin','Backend\SellerController@loginIndex');

Route::post('/sellerRegister','Backend\SellerController@register')->name('sellerRegister');
Route::post('/sellerLogin','Backend\SellerController@login')->name('login');
Route::get('/sellerRegister','Backend\SellerController@sellerRegister')->name('register');


// products seller //

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

// frontend products

Route::get('/products','Frontend\ProductController@products')->name('products');
Route::get('/categoryWiseShow/{id}','Frontend\HomeController@categoryWiseShow')->name('categoryWiseShow');

// frontend productsDetails

Route::get('/productDetails','Frontend\ProductDetailsController@productDetails')->name('productDetails');

//  checkout

Route::get('/checkout','Frontend\CheckoutController@checkout')->name('checkout');

// cart

Route::get('/cart','Frontend\CartController@cart')->name('cart');

// customer login

Route::get('/customerLogin','Frontend\CustomerLoginController@customerLogin')->name('customerLogin');