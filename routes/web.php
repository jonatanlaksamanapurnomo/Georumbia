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

Route::get('/', "App\Http\Controllers\ViewController@getIndex");

Route::get('/about', "App\Http\Controllers\ViewController@getAbout");
Route::get('/services', "App\Http\Controllers\ViewController@getServices");
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

