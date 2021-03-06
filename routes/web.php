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
Route::view('/baronas', 'baronas');
Route::view('/register/electra', 'closed_registerelectra');
Route::view('/register/baronas', 'registerbaronas');
Route::view('/register/nationalsymposium', 'registerns');
Route::view('/nationalsymposium', 'ns');
Route::view('/register/baronas/success', 'success_registerbaronas');
Route::view('/register/ns/success', 'success_registerns');
Route::post('admin', 'VerifController@update');
Route::post('/admin/delete', 'AdminController@delete');
Route::post('/admin/baronas/delete', 'AdminController@baronasdelete');
Route::post('/admin/nopes', 'AdminController@nopes');
Route::post('/admin/update', 'AdminController@update');
Route::post('/admin/ns/update', 'AdminController@nsupdate');
Route::post('/admin/tambah', 'AdminController@tambah');
Route::post('/home/baronas/update-profile', 'RegisterBaronasController@updateuserbaronas');
Route::post('/admin/baronas/adduser', 'AdminController@baronasadduser');
Route::post('/admin/baronas/tambah', 'AdminController@baronaskestari');
Route::view('/admin/nopes', 'admin');
Route::get('/admin/baronas', 'AdminController@baronasindex');
Route::get('/admin/ns', 'AdminController@nsindex');
Route::post('/register/baronas/register', 'RegisterBaronasController@daftar');
Route::post('/register/ns/register', 'RegisterNSController@daftar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
