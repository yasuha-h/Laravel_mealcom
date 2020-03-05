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

Route::get('/', 'HomeController@index');
Route::get('/signup', function () {
  return view('register.signup');
});
Route::get('/login', 'Auth\LoginController@showLoginForm');

Route::get('/user/{id}', 'UserController@showProfile');
Route::get('/user/{id}/following', 'UserController@showFollowing');
Route::get('/user/{id}/followers', 'UserController@showFollowers');
Route::get('/user/{id}/nices', 'UserController@showNices');
Route::post('user/{id}/follow', 'UserController@follow')->name('follow');
Route::delete('user/{id}/unfollow', 'UserController@unfollow')->name('unfollow');

Route::get('/edit', 'UserController@showEdit');
Route::get('/share', 'PostController@createPost');

Route::post('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/signup', 'Auth\RegisterController@register');
Route::post('/share', 'PostController@post');
Route::post('/edit', 'UserController@editProfile');
Route::delete('/share/{id}/delete', 'PostController@delete')->name('post-delete');


