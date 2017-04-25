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



Route::get('/', 'BaseController@getIndex');
Route::post('/cart', 'CartController@index');
Route::get('/cart', 'CartController@index');
Route::get('/delete-cart-product/{id}', 'CartController@removeItem');

Route::post('/search', 'SearchController@getIndex');

Route::post('/book/{id}', 'CommentsController@save');

//Route::resource('cart', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::get('/about', 'BaseController@index');
//Route::get('/sales', 'BaseController@getIndex');
Auth::routes();
Route::get('/sales', 'BaseController@getSales');
Route::get('/new', 'BaseController@getNew');
Route::get('/logout', 'HomeController@getLogout');

//Route::get('/basket', 'BasketController@getIndex');
 
//Route::post('/basket', 'BasketController@postBasket');
Route::get('/home', 'BaseController@getIndex');
Route::get('/genre/{id1}/{id}', 'GenreController@getGoods');

Route::get('/genre/{id}', 'GenreController@getCategory');

Route::get('/book/{id}', 'GenreController@getBook');
Route::get('{id}', 'StaticController@getindex');
 
 
 