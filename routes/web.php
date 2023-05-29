<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => ['auth', 'needsRole:admin'], 'prefix' => 'admin'], function () {
	Route::post('contact/create', 'ContactController@store');
	Route::put('contact/edit/{ID}', 'ContactController@edit');
	Route::post('contact/update', 'ContactController@update');
	Route::get('contact/delete/{ID}', 'ContactController@delete');
});