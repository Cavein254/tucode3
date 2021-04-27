<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth:api')->group(function () {
    Route::post('/new', '\App\Http\Controllers\ArticleController@store');
    Route::get('/articles', '\App\Http\Controllers\ArticleController@index');
    Route::post('/logout', '\App\Http\Controllers\Auth\ApiAuthController@logout');
});

Route::Group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('/login', '\App\Http\Controllers\Auth\ApiAuthController@login')->name('login');
    Route::post('/register', '\App\Http\Controllers\Auth\ApiAuthController@register')->name('register');
});
