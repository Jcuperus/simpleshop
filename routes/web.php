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

Route::get('/', 'ProductController@index')->name('products');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::post('/product/{id}/comment', 'ProductController@saveComment')->name('product.comment');

Route::get('/categories', 'CategoryController@index')->name('categories');
