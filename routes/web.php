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
    return view('home');
});

Route::get('/login', function () {
    return view('users/login');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
    

Route::post('login', 'Auth\AuthenticateController@login');
Route::get('logout', 'Auth\AuthenticateController@logout');
