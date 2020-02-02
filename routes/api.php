<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('posts', 'Api\PostController');
Route::get('/post/{slug}', 'Api\PostController@show')->name('post');
Route::get('/tasa', 'Api\PostController@tasaindex')->name('tasa');
Route::get('/dolar', 'Api\PostController@dolarindex')->name('dolar');