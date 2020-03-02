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

Route::get('/', 'FrontController@index');
Route::get('/', 'FrontController@news');


Route::get('/news', function () {
    return view('front/news');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/news', 'NewController@index');

Route::post('/home/news/store', 'NewController@store');
