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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'VerifyTypeController');

Route::group(['middleware' => ['type:admin'], 'prefix' => 'admin'], function () {
    Route::get('home', 'Admin\HomeController@index');
});

Route::group(['middleware' => ['type:client'], 'prefix' => 'client'], function () {
    Route::get('home', 'Client\HomeController@index');
});