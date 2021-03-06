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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/restaurant', 'HomeController@restaurant');
Route::get('restaurant/detail', 'HomeController@restaurantDetail');
Route::get('/delivery', 'HomeController@delivery');
Route::get('/blog', 'HomeController@blog');

