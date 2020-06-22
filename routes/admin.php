<?php

use Illuminate\Support\Facades\Auth;
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
// Auth::routes(['verify'=>true]);
Route::get('/', function () {
    return view('welcome');
});

Route::get('bye',function (){
return "Hello World";
});
// Route::get('hello', 'FirstController@show');

################## admin route###############

// , 'middleware' => ['isAdmin']
// ->withoutMiddleware('isAdmin');
// Route::group(['prefix' => 'admin' ], function () {

//     Route::get('login',function(){
//         return view('admin.login');
//         });

//     Route::get('index',function(){
//         return view('admin.index');
//         })->middleware('isAdmin');

//     Route::get('register',function(){
//         return view('admin.register');
//         });

//     Route::get('forget',function(){
//         return view('admin.forget');
//         });
//     Route::get('cards',function(){
//         return view('admin.cards');
//         });
//     Route::get('tables',function(){
//         return view('admin.tables');
//         });
//     Route::get('404',function(){
//         return view('admin.404');
//         });
//     Route::get('blank',function(){
//         return view('admin.blank');
//         });

//     Route::get('charts',function(){
//         return view('admin.charts');
//         });
//     Route::get('utilities-animation',function(){
//         return view('admin.utilities-animation');
//         });

//     Route::get('buttons',function(){
//         return view('admin.buttons');
//         });
//     Route::get('border',function(){
//         return view('admin.border');
//         });
//     Route::get('color',function(){
//         return view('admin.color');
//         });
//     Route::get('other',function(){
//         return view('admin.other');
//         });
// });
