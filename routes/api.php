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

Route::post('login', 'API\UserLoginController@login');
Route::post('register', 'API\UserRegisterController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'API\UserDetailController@details');
});
