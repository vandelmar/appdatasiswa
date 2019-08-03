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
    return view('welcome');
});

Route::resource('siswa', 'SiswaController');

Route::get('/create', function() {
    return view('siswa.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view', function() {
    return view('index');
});

Route::delete('/siswa/{id}', 'SiswaController@destroy');
