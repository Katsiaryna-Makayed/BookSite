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



Route::get('/', 'BaseController@index');
Route::get('/about', 'BaseController@index');
Auth::routes();
Route::get('/logout', 'HomeController@getLogout');
Route::get('/basket', 'BasketController@getindex');
Route::get('/home', 'HomeController@index');
Route::get('/genre/{id}', 'GenreController@getIndex');

Route::get('{id}', 'StaticController@getindex');
 
