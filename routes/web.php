<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();
Route::get('/', 'HomeController@get_index');
Route::get('/anasayfa', 'HomeController@get_index');
Route::get('/deneme', 'HomeController@get_index');
Route::get('/mail', 'HomeController@mail');
Route::get('/home', 'HomeController@index');
Route::get('/analytics', 'HomeController@deneme');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/empty', 'HomeController@empt');
    Route::get('/', 'Admin\AdminController@get_dashboard');
    Route::get('/dashboard', 'Admin\AdminController@get_dashboard');
    Route::get('/slider-resim-ekle', 'Admin\AdminController@get_sliderResimEkle');
});

