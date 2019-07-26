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

Route::get('/', 'ShoeController@home')->name('root');

Auth::routes();

Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
  Route::get('/', 'HomeController@index')->name('home');
  // Route::get('/sepatu', 'ShoeController@dashboard')->name('shoe.index');
  Route::resource('/sepatu', 'ShoeController');
  Route::resource('/merk', 'BrandController');
  Route::resource('/tipe', 'TypeController');
});
