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
Route::get('/blog', "App\Http\Controllers\ViewController@getBlog");
Route::get('/contact', "App\Http\Controllers\ViewController@getContact");
Route::get('/blog/{id}', "App\Http\Controllers\ViewController@getBlogDetail");
Route::post('/send/contact', "App\Http\Controllers\ViewController@createContact")->name("create_contact");
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


