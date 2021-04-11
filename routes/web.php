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


Route::get('/','SessionController@index');
Route::get('view','SessionController@view');
Route::get('set','SessionController@set');
Route::get('delete','SessionController@delete');

Route::get('/login','LoginController@index');
Route::any('check','LoginController@check');
Route::any('login_success','LoginController@ura');
Route::any('logout','LoginController@logout');
