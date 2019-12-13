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

Route::get('/', 'wel2controller@index');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/tabel1', 'HomestayController@index');
Route::get('/formdh', function () {
    return view('formdh');
})->middleware('auth');
Route::get('/formlogin', function () {
    return view('formlogin');
})->name('login');
Route::get('/formsignup', function () {
    return view('formsignup');
});
Route::get('/afterjelajahi', function () {
    return view('afterjelajahi');
});
Route::post('/homestay/kirim','HomestayController@kirim');
Route::get('/homestay/edit/{id}','HomestayController@edit');
Route::post('/homestay/update','HomestayController@update');
Route::get('/homestay/hapus/{id}','HomestayController@hapus');
Route::get('/homestay/cari','HomestayController@search');
Route::get('/login',function(){
    return view('/login');
});
Route::get('/homeadmin',function(){
    return view('homeadmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');