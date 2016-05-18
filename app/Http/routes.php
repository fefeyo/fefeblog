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

Route::get('/', function() {
    return "トップページ";
});

// 管理者しか入れない
Route::get('admin', 'AdminController@index');
Route::get('postblog', 'AdminController@postblog');
// 管理者しか入れない

// 管理者用のルート
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', function() {
    Auth::logout();
    return redirect('admin');
});
