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
    return view('welcome');
});
Route::get('/login', 'LoginController@showLogin')->name('show.login');
Route::post('/login', 'LoginController@login')->name('user.login');
Route::get('/logout', 'LogoutController@logout')->name('user.logout');
Route::get('products', 'ProductController@index')->name('index');
Route::get('products/{id}', 'ProductController@show')->name('show');

