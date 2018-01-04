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
//     return view('welcome');
// });

Route::view('/','welcome');
Route::view('/electra', 'electra');
Route::post('admin', 'VerifController@update');
Route::post('/admin/delete', 'AdminController@delete');
Route::post('/admin/nopes', 'AdminController@nopes');
Route::post('/admin/update', 'AdminController@update');
Route::post('/admin/tambah', 'AdminController@tambah');
Route::view('/admin/nopes', 'admin');
Route::get('/admin/baronas', 'AdminController@baronasindex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
