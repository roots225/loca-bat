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

Route::group(['prefix' => 'v1'], function() {
    Route::post('/login', 'V1\AuthController@login')->name('login');
});

Route::group(['prefix' => 'v1'], function() {
    Route::resource('users', 'V1\UserController');
    Route::resource('owners', 'V1\OwnerController');
    Route::resource('agencies', 'V1\AgencyController');
    Route::resource('tenants', 'V1\TenantController');
    Route::resource('employees', 'V1\EmployeeController');
    Route::resource('properties', 'V1\PropertyController');
});
