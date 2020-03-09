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

Route::get('/news','FrontController@news');




Route::get('/proucts_Types', 'FrontController@proucts_Types');
Route::get('/home/products','FrontController@proucts');




Route::get('/front/news_inner/{id}','FrontController@news_inner');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/news', 'NewController@index');


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
// 點擊刪除多張圖片
Route::post('/admin/news/ajax', 'NewController@ajax');


Route::post('/home/ajax_post_sort', 'NewController@ajax_post_sort');



// 產品類型管理

Route::get('/home/product_types', 'ProductTypeController@product_types');

// 新增
Route::get('/admin/product_type/create', 'ProductTypeController@create');

// 儲存
Route::post('/home/product_type/store1', 'ProductTypeController@store1');

// 修改
Route::get('/admin/news/edit/{id}', 'NewController@edit');
// 更新
Route::post('/admin/news/update/{id}', 'NewController@update');
// 刪除
Route::post('/admin/news/delete/{id}', 'NewController@delete');


// 產品管理

Route::get('/home/products', 'ProductsController@products');

// 儲存
Route::post('/home/news/store', 'ProductsController@store');
// 新增
Route::get('/admin/product/create2', 'ProductsController@create2');
// 修改
Route::get('/admin/news/edit/{id}', 'ProductsController@edit');
// 更新
Route::post('/admin/news/update/{id}', 'ProductsController@update');
// 刪除
Route::post('/admin/news/delete/{id}', 'ProductsController@delete');


});






