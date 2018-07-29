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
    return view('index');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin', 'AdminController@index')->name('admin');

    // post bank
    Route::get('admin/bank/add', 'AdminController@addBank');
    Route::post('admin/bank/list', 'AdminController@storeBank');
    // list bank
    Route::get('admin/bank/list', 'AdminController@listBank');
    // list kategori
    Route::get('admin/bank/cat', 'AdminController@cat');

  });