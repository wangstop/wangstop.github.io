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

// Route::get('/', 'FrontController@news');

Route::get('/front/product', 'FrontController@product');


Route::get('/news','FrontController@news');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/news', 'NewController@index');



Route::get('/admin/news/edit', 'NewController@edit1');

// 儲存
Route::post('/home/news/store', 'NewController@store');
// 新增
Route::get('/admin/news/create', 'NewController@create');
// 修改
Route::get('/admin/news/edit/{id}', 'NewController@edit');
// 更新
Route::post('/admin/news/update/{id}', 'NewController@update');
// 刪除
Route::post('/admin/news/delete/{id}', 'NewController@delete');

