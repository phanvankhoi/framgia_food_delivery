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
Route::get('/404', 'Sites\HomeController@view404')->name('404');
Route::get('/contact', 'Sites\HomeController@viewContact')->name('contact');
Route::get('/topfood', 'Sites\HomeController@viewTopFood')->name('topFood');
Route::post('search', 'Sites\HomeController@searchFood')->name('search');
Route::resource('/news', 'Sites\NewsController');
Route::resource('/cart', 'Sites\CartController');
Route::get('/admin', 'Admins\HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('user', 'Admins\UserController');
	  Route::resource('category', 'Admins\CategoryController');
});
Route::resource('category', 'Sites\CategoryController', ['only' => ['index',
	'show',
]]);

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
