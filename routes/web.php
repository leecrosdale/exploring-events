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

Route::get('/', 'FoodController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('buy/{food}', 'OrderController@buy')->name('buy')->middleware('auth');
Route::get('order/{order}', 'OrderController@show')->name('order')->middleware('auth');
Route::get('admin', 'OrderController@index')->name('admin')->middleware('auth');


