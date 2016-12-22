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
Route::get('/home', 'HomeController@index');
//Route::resource('users', 'Client\UserController');
//Route::resource('products', 'Client\ProductController');
//Route::resource('categories', 'Client\CategoryController');
//Route::resource('featured-products', 'Client\FeaturedProductsController');
//Route::resource('invoices', 'Client\InvoiceController');
//Route::resource('invoice-products', 'Client\InvoiceProductController');
//Route::resource('posts', 'Client\PostController');
//Route::resource('post-categories', 'Client\PostCategoryController');
//Route::resource('messages', 'Client\MessageController');
//Route::resource('admin-messages', 'Client\AdminMessageController');

// admin
//Route::group(['prefix' => 'admin'], function() {
//    Route::resource('users', 'Admin\UserController');
//    Route::resource('products', 'Admin\ProductController');
//    Route::resource('categories', 'Admin\CategoryController');
//    Route::resource('featured-products', 'Admin\FeaturedProductsController');
//    Route::resource('invoices', 'Admin\InvoiceController');
//    Route::resource('invoice-products', 'Admin\InvoiceProductController');
//    Route::resource('posts', 'Admin\PostController');
//    Route::resource('post-categories', 'Admin\PostCategoryController');
//    Route::resource('messages', 'Admin\MessageController');
//    Route::resource('admin-messages', 'Admin\AdminMessageController');
//});

Auth::routes();
Route::group(['prefix' => 'auth'], function() {
    Route::get('/{social}', [
        'as' => '{social}.login',
        'uses' => 'Auth\SocialiteController@redirect'
    ]);
    Route::get('/{social}/callback', 'Auth\SocialiteController@callback');
});

Route::resource('pets', 'PetsController', ['middleware' => 'auth']);

Route::get('email/send', function () {
    $invoice = \App\Models\Invoice::findOrFail(1);
    $users = \App\Models\User::all();
    foreach ($users as $user) {
        dispatch(new \App\Jobs\SendEmail($user, $invoice));
    }
});

Route::get('/oauth2/access-token/{resourceId}', 'OAuthTestController@generateAccessToken');