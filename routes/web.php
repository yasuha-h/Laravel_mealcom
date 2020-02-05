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
    return view('index');
});
Route::get('/signup', function () {
  return view('register.signup');
});
Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('/signup', 'Auth\LoginController@login');
Route::post('/signup', 'Auth\RegisterController@register');