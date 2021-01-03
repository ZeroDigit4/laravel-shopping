<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ProductController@index');

Route::get('/signin','UserController@signin');

Route::get('/signup','UserController@signup');
Route::post('/signup','UserController@postsignup');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products/{id_type}', 'ProductController@getProducts');

Route::get('/product/{id_product}', 'ProductController@getProductDetail');

//-------------------------------------------------------------
//route admin control panel
Route::get('/admin', 'AdminController@index');
Route::get('/admin/products', 'AdminController@getProducts');

Route::get('/admin/add-product', 'AdminController@addProduct');
Route::post('/admin/add-product', 'AdminController@postAddProduct');

Route::get('/admin/users', 'AdminController@getUsers');















