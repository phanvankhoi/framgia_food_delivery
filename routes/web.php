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

Route::get('/', 'Sites\HomeController@index')->name('index');

Route::get('404', 'Sites\HomeController@view404')->name('404');

Route::get('contact', 'Sites\HomeController@viewContact')->name('contact');

Route::get('admin/home', 'Admins\HomeController@index')->name('home');

Route::get('admin/index', 'Admins\UserController@index');

Route::resource('news', 'Sites\NewsController');

Route::resource('cart', 'Sites\CartController');

Route::resource('category', 'Sites\CategoryController');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('getLogin');
Route::post('login', 'Auth\LoginController@login')->name('postLogin');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('getRegister');
Route::post('register', 'Auth\RegisterController@register')->name('postRegister');

Route::prefix('password')->group(function () {
    Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('reset', 'Auth\ResetPasswordController@reset');
});

Route::get('profile', 'Sites\UserController@showProfile')->name('showProfile');
Route::get('editprofile', 'Sites\UserController@getProfile')->name('getProfile');
Route::post('editprofile', 'Sites\UserController@editProfile')->name('editProfile');
