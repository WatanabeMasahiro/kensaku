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


Route::get('kensaku/home1', 'ContentTableController@index1')->middleware('auth');
Route::get('kensaku/home2', 'ContentTableController@index2')->middleware('auth');
Route::get('kensaku/home3', 'ContentTableController@index3')->middleware('auth');
Route::get('kensaku/home4', 'ContentTableController@index4')->middleware('auth');
Route::get('kensaku/home5', 'ContentTableController@index5')->middleware('auth');

Route::get('kensaku/syousai', 'ContentTableController@detail')->middleware('auth');

Route::get('kensaku/touroku', 'ContentTableController@register1')->middleware('auth');
Route::post('kensaku/touroku', 'ContentTableController@register2');

Route::get('kensaku/koushin/confirm', 'ContentTableController@koushin')->middleware('auth');

Route::get('kensaku/koushin', 'ContentTableController@update1')->middleware('auth');
Route::post('kensaku/koushin', 'ContentTableController@update2');

Route::get('kensaku/sakuzyo/confirm', 'ContentTableController@sakuzyo')->middleware('auth');

Route::get('kensaku/sakuzyo', 'ContentTableController@delete1')->middleware('auth');
Route::post('kensaku/sakuzyo', 'ContentTableController@delete2');

Route::get('kensaku/taikai', 'ContentTableController@withdrawal1')->middleware('auth');
Route::post('kensaku/taikai', 'ContentTableController@withdrawal2');

Auth::routes();


// Route::get('', 'Controller@');
// Route::post('', 'Controller@');

