<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
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

Route::get('bye',function (){
return "Hello World";
});
// Route::get('hello', 'FirstController@show');

// front rout
Route::group(['namespace' => 'Front'], function () {
    Route::get('hello', 'FirstController@show');
});