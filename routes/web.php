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

Route::get('/', function () {
    return view('welcome');
//dd(\Illuminate\Support\Facades\DB::table('user')->get());
//dd();
//    return \Illuminate\Support\Facades\Cache::put('heihei','hello phpredis');
    return \Illuminate\Support\Facades\Cache::get('heihei');
});


Route::get('/hello/{name}','TestController@cache');
Route::get('/hello','TestController@get');
