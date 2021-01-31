<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 訪問者情報取得ツール
Route::prefix('your-info')->group(function () {
    Route::namespace('YourInfo')->group(function () {
        Route::get('/', 'UserAgentController@show');
    });
});

// JSON整形ツール
Route::prefix('json-format')->group(function () {
    Route::namespace('Json')->group(function () {
        Route::get('/', 'JsonFormatController@show');
        Route::post('/format', 'JsonFormatController@getFormatJson');
    });
});
