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

Route::post('/v1/login', 'V1\AuthController@login')->name('login');

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function() {
    Route::resource('user', 'V1\UserController');
});
