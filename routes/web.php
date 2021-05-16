<?php
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController');
Route::resource('/mobil', 'MobilController');
Route::get('/mobilupdate/{id}','MobilController@show');
Route::put('/mobilupdate/{id}','MobilController@update');
Route::get('/mobildelete/{id}','MobilController@destroy');

Route::get('/userupdate/{id}','UserController@show');
Route::put('/userupdate/{id}','UserController@update');
Route::get('/userdelete/{id}','UserController@destroy');

