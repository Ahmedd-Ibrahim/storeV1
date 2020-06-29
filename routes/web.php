<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::group(['prefix' => '/'], function () {
    Route::get('index','front\indexController@index')->name('index');
    Route::get('category','front\indexController@category')->name('category');
    Route::get('collection','front\indexController@collection')->name('collection');
    Route::get('product','front\indexController@product')->name('product');
     });

Route::get("relation",'ajaxController@index');




