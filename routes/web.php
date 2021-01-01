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


Auth::routes();

Route::get('/', 'PostController@index')->name('index');   //本来はMutter.com/post/index（アドレス/コントローラ名/アクション名）
Route::post('/', 'PostController@create')->name('create');  //localhostなので本来.comはつかない。
Route::post('/delete', 'PostController@delete')->name('delete');   //本来はMutter.com/post/index（アドレス/コントローラ名/アクション名）



