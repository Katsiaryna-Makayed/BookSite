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
Route::post('/order', 'CartController@order');
Route::get('/cart', 'CartController@index');
Route::get('/delete-cart-product/{id}', 'CartController@removeItem');
Route::get('/author/{id}', 'BaseController@getAuthors');
Route::post('/search', 'SearchController@getIndex');
Route::post('/book/{id}', 'CommentsController@save');
Route::get('/ourcontacts', 'BaseController@contact');
Auth::routes();
Route::get('/sales', 'BaseController@getSales');
Route::get('/new', 'BaseController@getNew');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/home', 'BaseController@getIndex');
Route::get('/genre/{id1}/{id}', 'GenreController@getGoods');
Route::get('/filter/{id1}/{id}', 'BookController@getFilter');

Route::get('/genre/{id}', 'GenreController@getCategory');

Route::get('/book/{id}', 'GenreController@getBook');
Route::get('{id}', 'StaticController@getindex');
 
 
 