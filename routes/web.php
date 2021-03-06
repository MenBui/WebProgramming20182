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

/*
* Get view login, register
*/
Route::get('login', 'UserController@viewLogin');
Route::get('register', 'UserController@viewRegister');
/*
* signin and signup using JWT 
*/
Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'UserController@getUserInfo');
});


/*
* Get admin view and data
*/
Route::get('index',['as'=>'index','uses'=>'AdminController@index']);
Route::get('courseAdmin',['as'=>'course','uses'=>'AdminController@course']);

Route::get("userAdmin", 'AdminController@users');
/*
* Generate data
*/
Route::get('gendata', 'GenerateDataController@handleDatabase');