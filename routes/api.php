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
// Route::get('getuser','Api\UserController@show');
Route::patch('updateuser/{id}','Api\UserController@update');

Route::get('mobil','Api\MobilController@index');
Route::patch('updatemobil/{id}','Api\MobilController@update');


Route::post('pesan','Api\TransaksiController@store');
Route::get('history/{id}','Api\TransaksiController@history');
                         



