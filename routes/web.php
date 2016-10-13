<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// client

Route::resource('users', 'Client\UserController');
Route::resource('products', 'Client\ProductController');
Route::resource('categories', 'Client\CategoryController');
Route::resource('featuredproducts', 'Client\FeaturedProductsController');
Route::resource('invoices', 'Client\InvoiceController');
Route::resource('invoice-products', 'Client\InvoiceProductController');
Route::resource('posts', 'Client\PostController');
Route::resource('post-category', 'Client\PostCategoryController');
Route::resource('messages', 'Client\MessageController');
Route::resource('admin-message', 'Client\AdminMessageController');

// admin
Route::group(['prefix' => 'admin'], function() {
    Route::resource('users', 'Admin\UserController');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('featured-products', 'Admin\FeaturedProductsController');
    Route::resource('invoices', 'Admin\InvoiceController');
    Route::resource('invoice-products', 'Admin\InvoiceProductController');
    Route::resource('posts', 'Admin\PostController');
    Route::resource('post-categories', 'Admin\PostCategoryController');
    Route::resource('messages', 'Admin\MessageController');
    Route::resource('admin-message', 'Admin\AdminMessageController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
