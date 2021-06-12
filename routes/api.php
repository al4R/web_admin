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

Route::post('login','Api\UserController@login');
Route::post('register','Api\UserController@register');
Route::get('getuser','Api\UserController@index');

Route::post('uimage/{id}','Api\UserController@updateImg');

Route::post('upuser/{id}','Api\UserController@update');
Route::post('upass/{id}','Api\UserController@updatePass');

Route::get('mobil','Api\MobilController@index');
Route::post('updatemobil/{id}','Api\MobilController@update');


Route::post('pesan','Api\TransaksiController@store');
Route::get('history/{id}','Api\TransaksiController@history');
Route::get('berjalan/{id}','Api\TransaksiController@berjalan');
                         



