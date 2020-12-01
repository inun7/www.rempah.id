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

// Route::get('/', function () {
//     return view('user_setor');
// });
Auth::routes();

Route::get('/', 'pages_controller@index');
Route::get('/register', 'pages_controller@v_register');
Route::get('/forgetpass', 'pages_controller@v_forgetpass');
Route::get('/user_profil', 'pages_controller@vu_profil');

// sampah
Route::resource('sampahs', 'SampahController');
Route::resource('sampahs2', 'SampahController2');
Route::resource('sampahs3', 'SampahController3');

// keluhan
Route::resource('keluhans', 'KeluhanController');

// produk
Route::resource('produks', 'ProdukController');
Route::get('vu_produk_orang', 'ProdukController@vu_produk_orang');

// transaksi
Route::resource('transaksis', 'TransaksiController');
