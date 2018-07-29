<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('bank', 'BankController@listbanks');

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::post('login/petugas', 'AuthController@loginPetugas');

Route::get('bank/list', 'BankController@listbanks');

Route::post('transaksi', 'TransController@bankSend');

Route::post('ambil', 'BankController@ambil');
Route::get('get/ambil', 'BankController@tampil');

Route::get('ambil/daftar', 'BankController@daftarAmbil');

Route::post('pikup', 'BankController@pikup');
