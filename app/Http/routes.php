<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// membuat sub alamat
Route::get('/avability', 'HomeController@avability');
Route::get('/avabilityow', 'HomeController@avabilityow');

Route::get('/search', 'HomeController@search');

Route::get('/register', 'HomeController@register');

Route::get('/bagasi', 'HomeController@bagasi');
Route::get('/bayar', 'HomeController@bayar');
Route::get('/bayar2', 'HomeController@bayar2');
Route::get('/profil', 'HomeController@profil');
Route::get('/isi', 'HomeController@isi');
Route::get('/daftar', 'HomeController@daftar');

//mobile
Route::get('/welmob', 'HomeController@welcomemob');
