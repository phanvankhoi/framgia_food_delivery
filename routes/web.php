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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/404', 'HomeController@view404')->name('404');

Route::get('/contact', 'HomeController@viewContact')->name('contact');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/cart', 'CartController@index')->name('cart');
