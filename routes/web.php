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

//user
Route::get('/user_profil', 'pages_controller@vu_profil');
Route::resource('sampahs', 'SampahController');

//bank sampah
Route::resource('sampahs2', 'SampahController2');

//admin
Route::resource('sampahs3', 'SampahController3');
