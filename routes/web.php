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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// get('signup') 和 get('/signup') 没区别, laravel 兼容两种写法, 自己看get()哦
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');