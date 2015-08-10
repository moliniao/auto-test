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

//注册登录
Route::get('auth/login', 'Auth\AuthController@log in');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@registerShow');
Route::post('auth/register', 'Auth\AuthController@registerWrite');


//用户注册新的产品线
//展现提交框
Route::get('autotest/produtLineIndex', "autotest\ProductLineController@index");

Route::post('autotest/produtLineCreate', "autotest\ProductLineController@create");
