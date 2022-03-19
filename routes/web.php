<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', 'App\Http\Controllers\PostController@index');

// Route::get('posts', 'App\Http\Controllers\PostController@index'); // 一覧画面
// Route::get('posts/create', 'App\Http\Controllers\PostController@create'); // 更新画面
// Route::post('posts', 'App\Http\Controllers\PostController@store'); // 更新処理
// Route::get('posts/{id}', 'App\Http\Controllers\PostController@show'); // 詳細画面
// Route::get('posts/{id}/edit', 'App\Http\Controllers\PostController@edit'); // 詳細編集画面
// Route::put('posts/{id}', 'App\Http\Controllers\PostController@update'); // 詳細編集処理
// Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destory'); // 詳細編集処理

Route::resource('posts', 'App\Http\Controllers\PostController');

// Cloud9の時は必要
// if (env('APP_ENV') === 'local') {
//     URL::forceScheme('https');
// }
