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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'order', 'middleware' => ['auth']], function () {
    Route::get('/create', 'OrderController@create')->name('order.create');
    Route::get('/edit/{id}', 'OrderController@edit')->name('order.edit');
    Route::get('/delete/{id}', 'OrderController@delete')->name('order.delete');
    Route::post('/store', 'OrderController@store')->name('order.store');
    Route::post('/update/{id}', 'OrderController@update')->name('order.update');

});
