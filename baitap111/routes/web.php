<?php

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
Route::get('/', function () {
    // return 'hello cac ban hoc PHP';
    return view('welcome');
});

Route::post('dangKiUser', 'ProductController@dangKiCon');
// Route::redirect('xxx', 'http://google.com');

Route::get('product', 'ProductController@index');
Route::get('product/add', 'ProductController@add');
Route::get('product/edit/{id}', 'ProductController@edit');
Route::get('product/show/{id}', 'ProductController@show');
Route::post('product/delete', 'ProductController@delete');
Route::post('product/create', 'ProductController@create');
Route::get('searchProduct', 'ProductController@index');



