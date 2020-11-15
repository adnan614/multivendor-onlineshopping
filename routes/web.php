<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','Backend\HomeController@index')->name('dashboard');

// products //

Route::get('/insertProduct','Backend\productController@insertProduct')->name('insertProduct');
Route::get('/viewProduct','Backend\productController@viewProduct')->name('viewProduct');
Route::get('delete.product{id}','Backend\productController@deleteProduct');
Route::get('edit.product{id}','Backend\productController@editProduct');
Route::post('/addProduct','Backend\productController@addProduct')->name('addProduct');
Route::post('update.product{id}','Backend\productController@updateProduct');

// Category //
Route::get('/insertCategory','Backend\CategoryController@insertCategory')->name('insertCategory');

Route::post('/storeCategory','Backend\CategoryController@storeCategory')->name('storeCategory');