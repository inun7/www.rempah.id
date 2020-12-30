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
//
// Route::get('/', function () {
//     return view('');
// });

// login dan register User
Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@v_login');
Route::get('/register', 'PagesController@v_register');
Route::get('/forgotpassword', 'PagesController@v_forgotpassword');
Route::post('/loginUser', 'LoginController@loginUser');
Route::post('/loginOperator', 'LoginController@loginOperator');
Route::post('/loginAdmin', 'LoginController@loginAdmin');
Route::get('/logout', 'LoginController@logout');

// login Operator
Route::get('/operator', 'PagesController@indexOperator');

// login Admin
Route::get('/admin', 'PagesController@indexAdmin');

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
Route::get('/transaksi_keluar', 'TransaksiController@index2');

// pendapatan
Route::resource('pendapatans', 'PendapatanController');

// user
Route::resource('users', 'UserController');

// operator
Route::resource('/operators', 'OperatorController');







