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
Route::get('/mail', 'HomeController@mail');
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
    Route::get('users', function ()    {
        echo "serhat";
    });
    Route::get('/empty', 'HomeController@empt');
});

